{% extends 'base.php' %}

{% block content %}
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url_for('static', filename='assets/heart_disease/css/styles.css')}}" rel="stylesheet" />
        <link href="{{url_for('static', filename='assets/heart_disease/css/main1.css')}}" rel="stylesheet" />
        <link href="{{url_for('static', filename='assets/heart_disease/css/design.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{url_for('static', filename='css/design.css')}}">
    </head>
    <body id="page-top">
        <div class="container" id="main1">
             {% include 'intro_model.php' %}
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
            </header>
        </div>
{% endblock %}
