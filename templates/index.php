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
        <link href="{{url_for('static', filename='css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{url_for('static', filename='css/design.css')}}">
    </head>
    <body id="page-top">
        <div class="container" id="main1">
             <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href="#page-top"><img src="{{url_for('static', filename='assets/img/brain.png')}}" alt="..." /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars ms-1"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">HOME</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/energy_efficiency/doc">Energy Efficiency (LinR) Doc</a></li>
                                    <li><a class="dropdown-item" href="/heart_disease/doc">Heart Disease (LogR) Doc</a></li>
                                    <li><a class="dropdown-item" href="/types_migraine/doc">Types of Migraine (NN) Doc</a></li>
                                    <li><a class="dropdown-item" href="/leukemia/doc">Leukemia (CNN) Doc</a></li>
                                    <li><a class="dropdown-item" href="/reinforcementLearning/doc">Frozen Lake (RL) Doc</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 id="demotext">INTELLIGENT SYSTEM MODELS</h1>
            <a class="gradient-button" href="#team1"><p id="black_">
                Our team has embarked on a journey to create an intelligent system model that will 
                revolutionize the way we think about data. With each member contributing their 
                expertise and creativity, we are crafting a masterpiece that will stand the test 
                of time. Our collaboration is fueled by a passion for innovation and a 
                commitment to excellence, and together, we are forging a path towards a brighter future.</p></a>
            <!-- Masthead-->
            <header class="masthead">
                <div class="gallery">
                    <div id="energy_e" style="background-image: url('{{url_for('static', filename='assets/img/energy_efficiency2.jpg')}}');" class="center"><p><a href="/energy_efficiency">ENERGY EFFICIENCY<h6 id="text1">linear Regression</h6></a></p></div>
                    <div id="heart_d" style="background-image: url('{{url_for('static', filename='assets/img/bg-heart-disease.jpg')}}');" class="center"><p><a href="/heart_disease">HEART DISEASE <h6 id="text1">logistical Regression</h6></a></p></div>
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
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
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



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
