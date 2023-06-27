{% extends 'base.php' %}

{% block content %}
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url_for('static', filename='assets/energy_efficiency/css/styles.css')}}" rel="stylesheet" />
        <link href="{{url_for('static', filename='assets/energy_efficiency/css/main.css')}}" rel="stylesheet" />
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
                            <h2 class="title" id="black_">Energy Efficiency Prediction</h2>

                            <form method="POST" action="/energyefficiencypredicted">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" step="0.01" placeholder="RELATIVE COMPACTNESS" name="relative_compactness">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" step="0.01" placeholder="SURFACE AREA" name="surface_area">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" step="0.01" placeholder="WALL AREA" name="wall_area">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" step="0.01" placeholder="ROOF AREA" name="roof_area">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" step="0.01" placeholder="OVERALL HEIGHT" name="overall_height">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" step="0.01" placeholder="ORIENTATION" name="orientation">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" step="0.01" placeholder="GLAZING AREA" name="glazing_area">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" step="0.01" placeholder="GLAZING AREA DISTRIBUTION" name="glazing_area_distribution">
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