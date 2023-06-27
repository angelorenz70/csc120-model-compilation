{% extends 'documentation/base.php' %}

{% block content %}
        <!-- Masthead-->
        <header class="masthead text-light" style="background-image: url('{{url_for('static', filename='assets/img/energy_efficiency_doc.jpg')}}')">
            <div class="container">
                <div class="masthead-subheading">LINEAR REGRESSION</div>
                <div class="masthead-heading text-uppercase">APPLICATION: ENERGY EFFICIENCY</div>
            </div>
        </header>
        <!-- Explanation-->
        <section class="page-section text-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">UNVEILING ENERGY EFFICIENCY</h2>
                    <h3 class="section-subheading  ">The application of linear regression in energy efficiency analysis and prediction enables a deeper understanding of the factors influencing energy efficiency and facilitates informed decision-making to optimize energy usage and improve sustainability.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_energy/energy1.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>ABOUT THE DATASET</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">This dataset in a direct regression setting, able to utilize the input factors to foresee the warming stack
                                and cooling stack of a building. The expectations able to get from this dataset depend on the assignment we select to perform. For illustration, if we utilize direct regression, we are able to anticipate the warming and cooling loads of a building based on its highlights.

                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_energy/energy2.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>SPLITTING THE DATA INTO TWO SETS</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The energy efficiency dataset has a total number of 768 data available that were retrieved from the Kaggle website. The data is being split into training and testing sets with a ratio of 80:20 (see Figure 1).</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_energy/energy3.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>ALGORITHMS EVALUATION AND TRAINING</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The structure of linear regression for training and evaluating the model was shown in Figure 2.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_energy/energy4.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>MODEL EVALUATION</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The utilized evaluation metrics will depend on the problem domain. Common metrics for regression tasks include Mean Squared Error (MSE)(see Definition 1), 
                                Mean Absolute Error (MAE) (see Definition 2), and R-squared (R²) (see Definition 3) while for classification tasks, accuracy can be used.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_energy/energy5.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>METRICS VALUE</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">In Linear Regression, the values of the metrics during training in cooling and healing load were shown in Figure 3-4.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
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
                            <h4>What is 
                                <br/>
                                Energy 
                                <br/>
                                Efficiency?</h4>
                        </div>
                    </li>
                </ul>
                <div class="text-center">
                    <h5 class="section-subheading  "> <br />  Energy efficiency refers to the effective use of energy resources to achieve desired outcomes while minimizing waste. It involves adopting practices, technologies, and strategies that reduce 
                    energy consumption while maintaining productivity and comfort. Energy efficiency brings multiple benefits, including cost savings, environmental sustainability through reduced emissions, improved comfort and productivity, enhanced 
                    energy security, and economic growth. It plays a crucial role in promoting sustainability, lowering environmental impact, and creating a more efficient and resilient energy system.</h5>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio" 
        style="background: rgb(63,94,251); background: radial-gradient(circle, rgba(192, 192, 192) 0%, rgba(0, 53, 128) 100%);">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">FIGURES AND DEFINITIONS</h2>
                    <h3 class="section-subheading  ">Look at this figures to know how the model was made and the corresponding definitions of some terms.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Split the Data into Training and Test Sets</div>
                                    <div class="portfolio-caption-subheading  ">Figure 1</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Structure of Linear Regression</div>
                                    <div class="portfolio-caption-subheading  ">Figure 2</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Metrics Value of Linear Regression</div>
                                    <div class="portfolio-caption-subheading  ">Figure 3-4</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Mean Squared Error</div>
                                    <div class="portfolio-caption-subheading  ">Definition 1</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Mean Absolute Error</div>
                                    <div class="portfolio-caption-subheading  ">Definition 2</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Coefficient of Determination</div>
                                    <div class="portfolio-caption-subheading  ">Definition 3</div>
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
                                    <h2 class="text-uppercase">Split the Data into Training and Test Sets</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_energy/energy6.jpg')}}" alt="..." />
                                    <p>Here we can see the code on how to split the data into two sets; training and testing sets.</p>
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
                                    <h2 class="text-uppercase">Structure of Linear Regression</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_energy/energy7.jpg')}}" alt="..." />
                                    <p>Here we can see the code for training and evaluating a Linear Regression Model.</p>
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
                                    <h2 class="text-uppercase">Metrics Value of Linear Regression</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_energy/energy8.jpg')}}" alt="..." />
                                    <p>We have the table for the values of the metrics of Linear Regression during training (Energy Efficiency = Cooling Load).</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 3</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_energy/energy9.jpg')}}" alt="..." />
                                    <p>We have the table for the values of the metrics of Linear Regression during training (Energy Efficiency = Healing Load)</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 4</strong>
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
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">What is Mean Squared Error (MSE)?</h2>
                                    <p>The average of the squared differences between the predicted and actual values is what the MSE measures. 
                                        It is determined by taking the normal of the squared contrasts between the anticipated and real qualities. 
                                        Better performance is indicated by a lower MSE value.</p>
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
                                    <h2 class="text-uppercase">What is Mean Absolute Error (MAE)?</h2>
                                    <p>The average of the absolute differences that exist between the predicted and actual values is what MAE measures. 
                                        The average of the absolute differences between the predicted and actual values is used to calculate it. 
                                        A lower worth of MAE shows better execution.</p>
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
                                    <h2 class="text-uppercase">What is Coefficient of Determination (R²)?</h2>
                                    <p>The proportion of the variance in the dependent variable (the target variable) that can be predicted from the model's independent variables (the features) is referred to statistically as R2. 
                                        It ranges from 0 to 1, with 1 denoting a perfect fit and 0 denoting that the model does not account for any of the target variable's variability. Better performance is indicated by a higher R2 value.</p>
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
