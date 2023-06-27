{% extends 'documentation/base.php' %}

{% block content %}
        <!-- Masthead-->
        <header class="masthead text-light img-fluid" style="background-image: url('{{url_for('static', filename='assets/img/heart_disease_doc.jpg')}}'); background-repeat: no-repeat;background-size: cover;">
            <div class="container">
                <div class="masthead-subheading">LOGISTIC REGRESSION</div>
                <div class="masthead-heading text-uppercase">APPLICATION: HEART DISEASE</div>
            </div>
        </header>
        <!-- Explanation-->
        <section class="page-section text-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Predictive Modeling for Heart Disease</h2>
                    <h3 class="section-subheading  ">The combination of logistic regression and stochastic gradient descent 
                        in heart disease prediction allows for the development of a predictive model that can estimate the 
                        probability of an individual having heart disease based on their specific characteristics and risk factors.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_heart/heart1.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>ATTRIBUTES OF THE DATASET</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">We have collected a dataset for training and testing the model that have the contents 
                                of 8 attributes with its target prediction (see Graph 1) and the average value in each attributes (see Graph 2).
                                and the p-values of the attributes (see Graph 3).</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_heart/heart2.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>DATA OF THE ATTRIBUTES</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The dataset has number of data based on the 8 attributes -- HeartDiseaseorAttack, Age, Diabetes, 
                                High BP, High Cholesterol, Smoker, Stroke, and Heart Disease (see Graph 4-11).</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_heart/heart3.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>WHAT IS 'SAGA'?</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">SAGA is particularly useful when dealing with large datasets or when the number of features is 
                                high, as it can converge faster than other algorithms such as SGD. It works by using an estimate of the true gradient based on a 
                                subset of the data at each iteration, rather than computing the true gradient on the entire dataset.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_heart/heart4.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>THE MODEL DESIGN</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The sequential code for building the model includes splitting the data into training and testing 
                                sets to get the predicted probabilities and achieve the desired accuracy of the model (see Figure 1-2).</p></div>
                        </div>
                    </li>
                    <li class="">
                    <div class="timeline-image">
                            <h4>How 
                                <br/>
                                to Use 
                                <br/>
                                the Model?</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-body"><p class=" ">STEP 1: Go to home. <br> STEP 2: Click the container of the model. <br> STEP 3: Fill out the following requirements. <br> STEP 4: Then click enter or predict to see the predicted result. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                What is
                                <br />
                                Heart 
                                <br/>
                                Attack?
                            </h4>
                        </div>
                    </li>
                </ul>
                <div class="text-center">
                    <h5 class="section-subheading  "><br/>A heart attack, also known as a myocardial infarction, is a serious medical illness that happens when the 
                        blood supply to the heart suddenly becomes blocked, typically as a result of the accumulation of fatty deposits in the coronary arteries. 
                        The heart muscle may be harmed by this obstruction, which in extreme situations may potentially be fatal.</h5>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio" 
        style="background: rgb(63,94,251); background: radial-gradient(circle, rgba(192, 192, 192) 0%, rgba(0, 53, 128) 100%);">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">GRAPHS AND FIGURES</h2>
                    <h3 class="section-subheading  ">Look at this graphs to know the metrics and evaluation of the model and this figures to know how the model was made.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Attributes of the Heart Attack Dataset</div>
                                    <div class="portfolio-caption-subheading  ">Graph 1</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Average Value of Each Attributes</div>
                                    <div class="portfolio-caption-subheading  ">Graph 2</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">P-values of Each Attributes Indicating the Result</div>
                                    <div class="portfolio-caption-subheading  ">Graph 3</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Number of Data Based on the Attributes</div>
                                    <div class="portfolio-caption-subheading  ">Graph 4-11</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Splitting the Data into Two Sets</div>
                                    <div class="portfolio-caption-subheading  ">Figure 1</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Prediction of Probability with Labels</div>
                                    <div class="portfolio-caption-subheading  ">Figure 2</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Attributes of the Heart Attack Dataset</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart5.jpg')}}" alt="..." />
                                    <p>Here we have the representation of the input of every attributes and the target prediction.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Average Value of Each Attributes</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart6.jpg')}}" alt="..." />
                                    <p>Here we have the average value in each attributes according to the target prediction.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">P-values of Each Attributes Indicating the Result</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart7.jpg')}}" alt="..." />
                                    <p>P-value (typically less than 0.05) indicates that the observed result is unlikely to 
                                        have occurred by chance alone, and therefore provides evidence against the null hypothesis.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Number of Data Based on the Attributes</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart8.jpg')}}" alt="..." />
                                    <p>In the datasets, it count 229,797 of respondents have no Heart Disease and 23,893 of 
                                        respondents have Heart Disease according to age of 1 to 15 years of old.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 4</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart9.jpg')}}" alt="..." />
                                    <p>Number of respondents that have a heart disease according to age attribute.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 5</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart10.jpg')}}" alt="..." />
                                    <p>Number of respondents that having a Heart Disease according to Diabetes, 0 represents as None, 1 represents as pre-diabetes, 2 represents as have diabetes.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 6</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart11.jpg')}}" alt="..." />
                                    <p>Number of respondents that have Heart Disease according to High Blood Pressure, 0 represents as None, 1 represents as Having a High BP.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 7</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart12.jpg')}}" alt="..." />
                                    <p>Number of respondents that have Heart Disease according to High Cholesterol, 0 represents as None, 1 represents as Having a High Cholesterol.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 8</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart13.jpg')}}" alt="..." />
                                    <p>Number of respondents that have Heart Disease according to they are Smoker or Not, 0 represents as None, 1 represents as Smoker.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 9</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart14.jpg')}}" alt="..." />
                                    <p>Number of respondents that have Heart Disease according to they are Stroke or Not, 0 represents as None, 1 represents as person have Strong.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 10</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart15.jpg')}}" alt="..." />
                                    <p>Bar Graph for the average body mass  index that having a  heart disease or not.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 11</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Splitting the Data into Two Sets</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart16.jpg')}}" alt="..." />
                                    <p>Here we can see the code for splitting of data into training and testing sets, and total accuracy of the model.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Prediction of Probability with Labels</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_heart/heart17.jpg')}}" alt="..." />
                                    <p>This is the code for printing the predicted labels and we can also see the output.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}