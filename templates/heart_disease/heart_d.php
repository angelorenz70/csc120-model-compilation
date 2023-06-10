<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Intelligent System Models</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{url_for('static', filename='assets/img/neural-network.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url_for('static', filename='assets/heart_disease/css/styles.css')}}" rel="stylesheet" />
        <link href="{{url_for('static', filename='assets/heart_disease/css/main1.css')}}" rel="stylesheet" />
        <link href="{{url_for('static', filename='assets/heart_disease/css/design.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{url_for('static', filename='css/design.css')}}">
    </head>
    <body id="page-top">
        <div class="container" id="main1">
            <h1 id="demotext">INTELLIGENT SYSTEM MODELS</h1>
            <a class="gradient-button" ><p id="black_">
                Our team has embarked on a journey to create an intelligent system model that will 
                revolutionize the way we think about data. With each member contributing their 
                expertise and creativity, we are crafting a masterpiece that will stand the test 
                of time. Our collaboration is fueled by a passion for innovation and a 
                commitment to excellence, and together, we are forging a path towards a brighter future.</p></a>
            <!-- Masthead-->
            <header class="masthead">
            <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" id="black_" style="text-align:center;width: 500px">HEART DISEASE PREDICTION</h2>
                    <!--FORM-->
                    <form method="POST" action="/heartdisease">
                        <div class="input-group">
                            <label for="">Enter Age: </label>
                            <input class="input--style-1" type="number" step="1" min="0" placeholder="Age" name="Age">
                        </div>
                        <div class="input-group">
                            <label for="">(0 - None, 1 - pre-diabetes, 2 - have diabetes)</label>
                            <input class="input--style-1" type="number" step="1" min="0" max="2" placeholder="Diabetes" name="Diabetes_012">
                        </div>
                        <div class="input-group">
                            <label for="">(0 - None, 1 - high blood pressure)</label>
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="High Blood Pressure" name="HighBP">
                        </div>
                        <div class="input-group">
                            <label for="">(0 - None, 1 - High Cholesterol)</label>
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="High Cholesterol" name="HighChol">
                        </div>
                        <div class="input-group">
                            <label for="">(0 - None, 1 - Check Cholesterol)</label>
                            <input class="input--style-1" type="number" step="1" min="0" max="1" placeholder="Cholesterol Check" name="CholCheck">
                        </div>
                        <div class="input-group">
                            <label for="">Input BMI: </label>
                            <input class="input--style-1" type="number" step="0.1" min="1" placeholder="Body Mass Index" name="BMI">
                        </div>
                        <div class="input-group">
                            <label for="">(0 - Not smoker, 1 - Smoker)</label>
                            <input class="input--style-1" type="number" step="1" min="0" max="3" placeholder="Smoker" name="Smoker">
                        </div>
                        <div class="input-group">
                            <label for="">(0 - None, 1 - Stroke)</label>
                            <input class="input--style-1" type="number" step="1" min="0" max="3" placeholder="Stroke" name="Stroke">
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Predict</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <form method="GET" action="/">
                <div class="p-t-20">
                    <button class="btn btn--radius btn--green" type="submit">Home</button>
                </div>
            </form>
            </header>
        </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url_for('static', filename='assets/heart_disease/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

