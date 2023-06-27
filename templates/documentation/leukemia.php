{% extends 'documentation/base.php' %}

{% block content %}
        <!-- Masthead-->
        <header class="masthead text-light" style="background-image: url('{{url_for('static', filename='assets/img/leukemia_doc.jpg')}}'); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="masthead-subheading">CONVOLUTIONAL NEURAL NETWORK</div>
                <div class="masthead-heading text-uppercase">APPLICATION: LEUKEMIA</div>
            </div>
        </header>
        <!-- Explanation-->
        <section class="page-section text-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Enhancing Leukemia Detection</h2>
                    <h3 class="section-subheading  ">The CNN model offers the potential to enhance the speed, accuracy, and efficiency of leukemia detection, allowing medical professionals to make more informed decisions and facilitate timely treatment interventions.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia1.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>IMAGE COLLECTION</h4>
                            </div>
                            <div class="timeline-body"><p class=" "></p>From the dataset that we collected, we have the code to get the shape of the image (see Figure 1), and image absolute paths for cancer and normal cells (see Figure 2).</div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia2.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>PRESENTATION OF CELL TYPES</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The dataset represented the percentage of each cell type (see Graph 1), and image representation of 3 random sample of each cells (see Figure 3). </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia3.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>BUILDING THE MODEL</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The code for training the data, validating the data, testing the data, the sequential code for building the CNN model, and the summary of every layers of the model (see Figure 4-8).</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia4.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>ACCURACY AND VALUE PREDICTION</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The code for model compilation in a deep learning framework, total time of training, to get the value prediction and to achieve the desired accuracy of the model (see Figure 9-12).</p></div>
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
                                What 
                                <br/>
                                is
                                <br />
                                [ALL]?
                            </h4>
                        </div>
                    </li>
                </ul>
                <div class="text-center">
                    <h5 class="section-subheading  "> <br />  Acute Lymphoblastic Leukemia (ALL) is the most common type of leukemia in children, but it can also occur in adults. ALL is characterized by the rapid accumulation of immature lymphoid cells (lymphoblasts) in the bone marrow and blood. 
                        These abnormal cells multiply quickly and interfere with the production of normal blood cells.</h5>
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
                                    <div class="portfolio-caption-heading">Percentage of Each Cell Type</div>
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
                                    <div class="portfolio-caption-heading">Get the Shape of the Image</div>
                                    <div class="portfolio-caption-subheading  ">Figure 1</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Image Absolute Paths</div>
                                    <div class="portfolio-caption-subheading  ">Figure 2</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">3 Random Sample</div>
                                    <div class="portfolio-caption-subheading  ">Figure 3</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Code for Building the Model</div>
                                    <div class="portfolio-caption-subheading  ">Figure 4-8</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Accuracy & Value Prediction</div>
                                    <div class="portfolio-caption-subheading  ">Figure 9-12</div>
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
                                    <h2 class="text-uppercase">Percentage of Each Cell Type</h2>                                    
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia5.jpg')}}" alt="..." />
                                    <p>Here we can see the pie graph of the cell types ALL and Normal. We have 68 percent for Acute Lymphoblastic Leukemia and the remaining 32 percent for Normal.</p>
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
                                    <h2 class="text-uppercase">Get the Shape of the Image</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia6.jpg')}}" alt="..." />
                                    <p>Here we can see the corresponding value of the height, width, and color channels of the image.</p>
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
                                    <h2 class="text-uppercase">Image Absolute Paths for Cancer Cells and Normal Cells</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia7.jpg')}}" alt="..." />
                                    <p>Here we can see the code for the absolute paths of the cells and the output value.</p>
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
                                    <h2 class="text-uppercase">Random Sample of Normal and ALL Cells</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia8.jpg')}}" alt="..." />
                                    <p>Here we can see the image presentation of 3 random sample of Normal and ALL cell type that we use in the model.</p>
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
                                    <h2 class="text-uppercase">Code for Building the Model</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia9.jpg')}}" alt="..." />
                                    <p>We have the code for training the data and the corresponding output.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 4</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia10.jpg')}}" alt="..." />
                                    <p>We have the code for validating the data and the corresponding output.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 5</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia11.jpg')}}" alt="..." />
                                    <p>We have the code for testing the data and the corresponding output.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 6</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia12.jpg')}}" alt="..." />
                                    <p>We have the sequential code for building the Convolutional Neural Network model.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 7</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia13.jpg')}}" alt="..." />
                                    <p>We have the summary of every layers of the model and corresponding output of the parameters.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 8</strong>
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
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Accuracy & Value Prediction</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia14.jpg')}}" alt="..." />
                                    <p>We have the code for model compilation in a deep learning framework. These are the corresponding meaning of every parameters: 
                                        <br/>
                                        loss='binary_crossentropy': This contention indicates the misfortune work to be utilized amid preparing. 
                                        In this case, 'binary_crossentropy' is utilized, which is commonly utilized for twofold classification assignments. 
                                        <br/>
                                        optimizer='adam': This contention indicates the optimizer calculation to be utilized amid preparing. The optimizer 
                                        decides how the model's weights are upgraded based on the misfortune calculated. 
                                        <br/>
                                        'adam' alludes to the Adam optimizer, which is an versatile learning rate optimization calculation commonly utilized for profound learning models. 
                                        It alters the learning rate powerfully amid preparing. 
                                        <br/>
                                        'accuracy': This metric calculates the by and large precision of the demonstrate, which is the extent of accurately classified tests. 
                                        <br/>
                                        'Recall': Too known as affectability or genuine positive rate, Review measures the model's capacity to accurately recognize positive occasions 
                                        (i.e., genuine positives) out of all the real positive occasions.
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 9</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia15.jpg')}}" alt="..." />
                                    <p>We have the code for the total training time.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 10</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia16.jpg')}}" alt="..." />
                                    <p>We have the code for the accuracy of the CNN model after training and testing the data to the model.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 11</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_leukemia/leukemia17.jpg')}}" alt="..." />
                                    <p>We have the code for the test image value prediction of the CNN model.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Figure 12</strong>
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
{% endblock %}