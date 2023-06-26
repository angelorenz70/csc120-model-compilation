{% extends 'base.php' %}

{% block content %}
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url_for('static', filename='css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{url_for('static', filename='css/design.css')}}">
    </head>
    <body id="page-top">
        <div class="container" id="main1">
            {% include 'intro_model.php' %}
            <!-- Masthead-->
            <header class="masthead">
                <div class="gallery">
                    <div id="energy_e" style="background-image: url('{{url_for('static', filename='assets/img/energy_efficiency2.jpg')}}');" class="center"><p><a href="/energy_efficiency">ENERGY EFFICIENCY<h6 id="text1">Linear Regression</h6></a></p></div>
                    <div id="heart_d" style="background-image: url('{{url_for('static', filename='assets/img/bg-heart-disease.jpg')}}');" class="center"><p><a href="/heart_disease">HEART DISEASE <h6 id="text1">Logistical Regression</h6></a></p></div>
                    <div id="t_migraine" style="background-image: url('{{url_for('static', filename='assets/img/bg-migraine1.jpg')}}');" class="center"><p><a href="/types_migraine">TYPES OF MIGRAINE <h6 id="text1">Neural Network</h6></a></p></div>
                    <div id="t_migraine" style="background-image: url('{{url_for('static', filename='assets/img/Leukemia2.jpg')}}');" class="center"><p><a href="/leukemia">LEUKEMIA <h6 id="text1">Convolutional NN</h6></a></p></div>
                    <div id="t_migraine" style="background-image: url('{{url_for('static', filename='assets/img/avoid_obs.jpg')}}');" class="center"><p><a href="">FROZEN LAKE <h6 id="text1">Reinfrocement Learning</h6></a></p></div>
                </div>
            </header>
        </div>
        <!-- Team-->
        <section class="page-section" id="team1">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team:</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{url_for('static', filename='assets/member/angel1.jpg')}}" alt="..." />
                            <h4>Angel Lorraine Morales</h4>
                            <p>21 Years Old</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{url_for('static', filename='assets/member/angelo.jpg')}}" alt="..." />
                            <h4>Tseiammetse Angelo C. Rendon</h4>
                            <p>20 Years Old</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{url_for('static', filename='assets/member/breech.jpg')}}" alt="..." />
                            <h4>Breech Reca G. Sincolan</h4>
                            <p>21 Years Old</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{% endblock %}