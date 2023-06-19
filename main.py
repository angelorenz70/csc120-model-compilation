from flask import Flask, render_template, request, redirect, url_for, send_from_directory, jsonify
from PIL import Image
import keras
import tensorflow
from keras.preprocessing.image import ImageDataGenerator
import pandas as pd
import io
import os
import uuid
import pickle
import numpy as np

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
#process of each model
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

#DOCUMENTATION
@app.route('/energy_efficiency/doc')
def energy_efficiency_doc():
    return render_template('documentation/energy_efficiency.php')
@app.route('/heart_disease/doc')
def heart_disease_doc():
    return render_template('documentation/heart_disease.php')
@app.route('/types_migraine/doc')
def types_migraine_doc():
    return render_template('documentation/types_migraine.php')
@app.route('/leukemia/doc')
def leukemia_doc():
    return render_template('documentation/leukemia.php')
@app.route('/reinforcementLearning/doc')
def reinforcementLearning():
    return render_template('documentation/ReinforcementLearning.php')

    

#END 

#START - RESULT MODEL UI
@app.route('/energyefficiencypredicted', methods=['POST'])
def energyefficiencypredicted():
    # Get the inputs from the form
    relative_compactness = float(request.form['relative_compactness'])
    surface_area = float(request.form['surface_area'])
    wall_area = float(request.form['wall_area'])
    roof_area = float(request.form['roof_area'])
    overall_height = float(request.form['overall_height'])
    orientation = float(request.form['orientation'])
    glazing_area = float(request.form['glazing_area'])
    glazing_area_distribution = float(request.form['glazing_area_distribution'])

    # Load the trained models
    file_cooling = open('establishment_energy_efficiency_cooling.pickle', 'rb')
    model1 = pickle.load(file_cooling)
    file_heating = open('establishment_energy_efficiency_heating.pickle', 'rb')
    model2 = pickle.load(file_heating)

    # Prepare the input data for prediction
    x_data = np.array([
        [relative_compactness, surface_area, wall_area, roof_area,
         overall_height, orientation, glazing_area, glazing_area_distribution]
    ])

    # Make predictions
    prediction_cooling = model1.predict(x_data)[0]
    prediction_heating = model2.predict(x_data)[0]

    # Render the template with the predictions
    return render_template('energy_efficiency/prediction.html',
                           prediction1=prediction_cooling,
                           prediction2=prediction_heating)


@app.route('/heartdisease', methods=['POST'])
def heartdiseas():
    # Get the input data from the request
    Age = float(request.form['Age'])
    Diabetes_012 = float(request.form['Diabetes_012'])
    HighBP = float(request.form['HighBP'])
    HighChol = float(request.form['HighChol'])
    CholCheck = float(request.form['CholCheck'])
    BMI = float(request.form['BMI'])
    Smoker = float(request.form['Smoker'])
    Stroke = float(request.form['Stroke'])

    data = np.array([[Age, Diabetes_012, HighBP, HighChol, CholCheck, BMI, Smoker, Stroke]])

    with open('HeartDiseaseorAttack.pickle', 'rb') as f:
        model = pickle.load(f)

    # make a prediction using the input values and the loaded model
    y_prediction = model.predict(data)

    # Make the prediction
    prediction = y_prediction[0]

    # Get the probability
    proba = model.predict_proba(data).tolist()[0]
    probability = float(proba[1]) * 100

    # Render the template with prediction result
    return render_template('heart_disease/prediction.html', prediction=prediction, probability=probability)

@app.route('/typesmigraine', methods=['POST'])
def typesmigraine():
    # Get the input data from the request
    name = request.form['name']
    age = float(request.form['age'])
    duration = float(request.form['duration'])
    frequency = float(request.form['frequency'])
    location = float(request.form['location'])
    character = float(request.form['character'])
    intensity = float(request.form['intensity'])
    nausea = float(request.form['nausea'])
    vomit = float(request.form['vomit'])
    phonophobia = float(request.form['phonophobia'])
    photophobia = float(request.form['photophobia'])
    visual = float(request.form['visual'])
    sensory = float(request.form['sensory'])
    dysphasia = float(request.form['dysphasia'])
    dysarthria = float(request.form['dysarthria'])
    vertigo = float(request.form['vertigo'])
    tinnitus = float(request.form['tinnitus'])
    hypoacusis = float(request.form['hypoacusis'])
    diplopia = float(request.form['diplopia'])
    defect = float(request.form['defect'])
    ataxia = float(request.form['ataxia'])
    conscience = float(request.form['conscience'])
    paresthesia = float(request.form['paresthesia'])
    dpf = float(request.form['dpf'])

    # Create the input data as a numpy array
    data = np.array([[
        age, duration, frequency, location, character, intensity,
        nausea, vomit, phonophobia, photophobia, visual, sensory,
        dysphasia, dysarthria, vertigo, tinnitus, hypoacusis,
        diplopia, defect, ataxia, conscience, paresthesia, dpf
    ]])

    # Load the model
    model = keras.models.load_model("migraine_cls.h5")

    # Make a prediction using the input values and the loaded model
    y_prediction = model.predict(data)

    # Create dictionary to map numerical labels to string labels
    label_map = {
        0: 'Typical aura with migraine',
        1: 'Typical aura without migraine',
        2: 'Migraine without aura',
        3: 'Basilar-type aura',
        4: 'Sporadic hemiplegic migraine',
        5: 'Familial hemiplegic migraine',
        6: 'Other'
    }

    # Convert predicted probabilities to labels using label_map
    y_pred = [label_map[pred] for pred in np.argmax(y_prediction, axis=1)]

    # Calculate the probabilities with two decimal places
    probabilities = [round(float(prob) * 100, 2) for prob in y_prediction[0]]

    # Render the template with the prediction and probabilities
    return render_template('types_migraine/prediction.html', prediction=str(y_pred[0]),
                        probabilities1="{:.2f}".format(probabilities[0]),
                        probabilities2="{:.2f}".format(probabilities[1]),
                        probabilities3="{:.2f}".format(probabilities[2]),
                        probabilities4="{:.2f}".format(probabilities[3]),
                        probabilities5="{:.2f}".format(probabilities[4]),
                        probabilities6="{:.2f}".format(probabilities[5]),
                        probabilities7="{:.2f}".format(probabilities[6]))
#PROCESS MODEL END

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
