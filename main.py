from flask import Flask, render_template, request, redirect, url_for, send_from_directory
from PIL import Image
import keras
import tensorflow
from tensorflow.keras.preprocessing.image import ImageDataGenerator
import pandas as pd
import io
import os
import uuid

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = 'uploads'

# Create the uploads folder if it doesn't exist
if not os.path.exists(app.config['UPLOAD_FOLDER']):
    os.makedirs(app.config['UPLOAD_FOLDER'])

# Define a route to the home page
@app.route('/')
def home():
    return render_template('index.php')

# Define a route for processing the uploaded image
@app.route('/process', methods=['POST'])
def process():
    # Get the uploaded file
    file = request.files['image']

    # Generate a unique filename
    filename = str(uuid.uuid4()) + '.png'

    # Specify the full file path
    file_path = os.path.join(app.config['UPLOAD_FOLDER'], filename)

    # Save the uploaded image
    file.save(file_path)

    model_leukemia_prediction = keras.models.load_model('leukemia_model.h5')

    test_dict = {"x_col": file_path}
    test_df = pd.DataFrame(test_dict, index=[0])

    test_datagen = ImageDataGenerator(rescale=1./255)
    test_inputImage = test_datagen.flow_from_dataframe(
        test_df,
        x_col="x_col",
        target_size=(256, 256),
        color_mode="rgb",
        class_mode=None,
        shuffle=False
    )

    input_pred = model_leukemia_prediction.predict(test_inputImage)
    input_pred = input_pred[0][0]  # Extract the prediction value

    # Process the image (example: convert it to grayscale)
    img = Image.open(file_path)
    processed_img = img.convert('L')

    # Save the processed image to a byte buffer
    byte_buffer = io.BytesIO()
    processed_img.save(byte_buffer, format='PNG')
    byte_buffer.seek(0)

    # Return the processed image and prediction as a response
    return redirect(url_for('result', input_pred=input_pred, image_filename=filename, file_path=file_path))

#START - ROUTING MODELS UI
@app.route('/energy_efficiency')
def energy_efficiency():
    return render_template('energy_efficiency/energy_e.php')

@app.route('/heart_disease')
def heart_disease():
    return render_template('heart_disease/heart_d.php')

@app.route('/types_migraine')
def types_migraine():
    return render_template('types_migraine/migraine_t.php')

@app.route('/leukemia')
def leukemia():
    return render_template('leukemia/index.html')

#END 

# Define a route for displaying the processed image
@app.route('/result')
def result():
    input_pred = request.args.get('input_pred')
    image_filename = request.args.get('image_filename')
    file_path = request.args.get('file_path')
    return render_template('leukemia/result.html', input_pred=input_pred, image_filename=image_filename, file_path=file_path)

# Define a route for serving the uploaded images
@app.route('/uploads/<image_filename>')
def serve_image(image_filename):
    return send_from_directory(app.config['UPLOAD_FOLDER'], image_filename)




if __name__ == '__main__':
    app.run(debug=True)
