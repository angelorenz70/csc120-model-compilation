{% extends 'documentation/base.php' %}

{% block content %}
        <!-- Masthead-->
        <header class="masthead text-light" style="background-image: url('{{url_for('static', filename='assets/img/migraine_doc1.jpg')}}'); background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="masthead-subheading">NEURAL NETWORK</div>
                <div class="masthead-heading text-uppercase">APPLICATION: TYPES OF MIGRAINE</div>
            </div>
        </header>
        <!-- Explanation-->
        <section class="page-section text-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">CLASSIFYING TYPES OF MIGRAINE</h2>
                    <h3 class="section-subheading  ">The predictive model may also suggest to the user ways to lessen 
                                the likelihood of experiencing a migraine attack, such as avoiding specific triggers or using preventative 
                                medicine. The predictive algorithm may improve in accuracy and personalization over time as the app gathers 
                                more information about the user's migraine habits and triggers.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine1.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>ATTRIBUTES OF THE DATASET</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">We collected a dataset for training and testing the model that have 
                                the contents of 27 attributes (see Graph 1) and 7 types of Migraine (see Graph 2).
                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine2.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>DATA OF THE ATTRIBUTES</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The dataset has number of data based on the attributes age and frequency (see Graph 3-4) 
                                and the graphical representation of the distribution of frequency variable (see Graph 5) and a Heatmap of the Correlation between the Features (see Graph 6).
                            </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine3.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>PAIRWISE RELATIONSHIPS OF EVERY ATTRIBUTES</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The scatterplot matrix of the dataset includes scatterplots for each pair of attributes in 
                                the migraine dataset that shows the relationship between the variables. The visualization of the pairwise relationships of every attributes was shown in Graph 7 to Graph 11.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine4.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>THE MODEL DESIGN</h4>
                            </div>
                            <div class="timeline-body"><p class=" ">The sequential code for building the model includes
                                splitting the data into training and testing sets to get the predicted probabilities and achieve the desired accuracy
                                of the model (see Figure 1-5).
                            </p></div>
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
                                <br />
                                is
                                <br />
                                MIGRAINE?
                            </h4>
                        </div>
                    </li>
                </ul>
                <div class="text-center">
                    <h5 class="section-subheading  "><br/>Migraines are neurological disorders characterized by recurrent, moderate to 
                        severe headaches accompanied by symptoms like nausea, vomiting, sensitivity to light and sound, and visual 
                        disturbances known as aura. The exact cause is not fully understood but involves genetic and environmental 
                        factors. Migraines can significantly impact daily life, causing fatigue, weakness, and disruptions to work 
                        and social activities.</h5>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio" 
        style="background: rgb(63,94,251); background: radial-gradient(circle, rgba(192, 192, 192) 0%, rgba(0, 53, 128) 100%);
        ">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">GRAPHS and FIGURES</h2>
                    <h3 class="section-subheading  ">Look at this graphs to know the metrics and evaluation of the model and this figures to know how the model was made.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Attributes of the Migraine Dataset</div>
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
                                <div class="portfolio-caption-heading">Number of Data in Every Type of Migraine </div>
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
                                    <div class="portfolio-caption-heading">Number of Data Based on Age and Frequency </div>
                                    <div class="portfolio-caption-subheading  ">Graph 3-4</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-5 mb-sm-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Graphical Representation of  Frequency Variable </div>
                                    <div class="portfolio-caption-subheading  ">Graph 5</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Graphical Representation of a Matrix</div>
                                    <div class="portfolio-caption-subheading  ">Graph 6</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-5 mb-sm-0">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Pairwise Relationships of Every Attributes </div>
                                    <div class="portfolio-caption-subheading  ">Graph 7-11</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Accuracy of the Model</div>
                                    <div class="portfolio-caption-subheading  ">Figure 1</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Scale Input Features</div>
                                    <div class="portfolio-caption-subheading  ">Figure 2</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Building the Model</div>
                                    <div class="portfolio-caption-subheading  ">Figure 3</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal10">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Training the Model</div>
                                    <div class="portfolio-caption-subheading  ">Figure 4</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal11">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Possible Probabilities</div>
                                    <div class="portfolio-caption-subheading  ">Figure 5</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal12">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Predicted Labels</div>
                                    <div class="portfolio-caption-subheading  ">Figure 6</div>
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
                                    <h2 class="text-uppercase">Attributes of the Migraine Dataset</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine5.jpg')}}" alt="..." />
                                    <p>Here we can see the 27 attributes of the dataset and the corresponding counts of every attributes which is basically based on the age provided.</p>
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
                                    <h2 class="text-uppercase">Number of Data in Every Type of Migraine</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine6.jpg')}}" alt="..." />
                                    <p>Here we can see the total count of data in every type of migraine, we have 0 for Typical Aura with Migraine, 1 for Typical Aura without Migraine, 
                                        2 for Migraine without Aura, 3 for Basilar-Type Aura, 4 for Sporadic Hemiplegic Migraine, 5 for Familial Hemiplegic Migraine, and 6 for Other.</p>
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
                                    <h2 class="text-uppercase">Number of Data Based on Age and Frequency</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine7.jpg')}}" alt="..." />
                                    <p>Here we can see the total count of data based on age from the dataset that we collected.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 3</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine8.jpg')}}" alt="..." />
                                    <p>And here we can see the total count of data based on frequency or how often a person experiences migraine attacks from the dataset that we collected.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 4</strong>
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
                                    <h2 class="text-uppercase">Graphical Representation of Frequency Variable</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine9.jpg')}}" alt="..." />
                                    <p>We have the graphical representation of the distribution of frequency variable.</p>
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
                                    <h2 class="text-uppercase">Graphical Representation of a Matrix</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine10.jpg')}}" alt="..." />
                                    <p>A Heatmap (a graphical representation of a matrix in which the values are represented by colors) of the Correlation between the Features.</p>
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
                                    <h2 class="text-uppercase">Pairwise Relationships of Every Attributes</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine11.jpg')}}" alt="..." />
                                    <p>A pair plot or a scatter plot that visualizes the pairwise relationships between 'Age', 'Duration', 'Frequency', 'Location', and 'Character'.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 7</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine12.jpg')}}" alt="..." />
                                    <p>A pair plot or a scatter plot that visualizes the pairwise relationships between 'Intensity', 'Nausea', 'Vomit', ‘Phonophobia', and 'Photophobia'.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 8</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine13.jpg')}}" alt="..." />
                                    <p>A pair plot or a scatter plot that visualizes the pairwise relationships between 'Visual', 'Sensory', 'Dysphasia', 'Dysarthria', and 'Vertigo.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 9</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine14.jpg')}}" alt="..." />
                                    <p>A pair plot or a scatter plot that visualizes the pairwise relationships between 'Sensory', 'Dysphasia', 'Dysarthria', 'Vertigo', and 'Tinnitus'.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Graph 10</strong>
                                        </li>
                                    </ul>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine15.jpg')}}" alt="..." />
                                    <p>A pair plot or a scatter plot that visualizes the pairwise relationships between 'Hypoacusis', 'Diplopia', 'Defect', 'Ataxia', 'Conscience', 'Paresthesia', and 'DPF'.</p>
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
        <!-- Portfolio item 7 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Accuracy of the Model</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine16.jpg')}}" alt="..." />
                                    <p>Here we can see the total accuracy of the model after evaluating the model to the testing data.</p>
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
        <!-- Portfolio item 8 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Scale Input Features</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine17.jpg')}}" alt="..." />
                                    <p>Here we can see the code for scale input Features and the splitting of data into training and testing sets.</p>
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
        <!-- Portfolio item 9 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Building the Model</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine18.jpg')}}" alt="..." />
                                    <p>Here we have the sequential code for building the neural network model.</p>
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
       <!-- Portfolio item 10 modal popup-->
       <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Training the Model</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine19.jpg')}}" alt="..." />
                                    <p>Here we have the code for compiling the model with categorical cross-entropy
                                        loss and Adam optimizer, and train model on training data.</p>
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
        <!-- Portfolio item 11 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Possible Probabilities</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine20.jpg')}}" alt="..." />
                                    <p>Here we have the code for getting the predicted probabilities from neural network model.</p>
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
         <!-- Portfolio item 12 modal popup-->
         <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Predicted Labels</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{url_for('static', filename='assets/image_docs/img_migraine/migraine21.jpg')}}" alt="..." />
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
