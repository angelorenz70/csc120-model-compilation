<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Intelligent System Models</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/design.css">
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
                <div class="wrapper wrapper--w960">
                    <div class="card card-2">
                        <div class="card-heading" style="background-image: url('images/bg-m.jpg');"></div>
                        <div class="card-body">
                            <h2 class="title">What's your Migraine?</h2>
                            <form method="POST" action="prediction.php">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Name" name="name">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-2" type="number" min="1" placeholder="Age" name="age">
                                </div> 

                                <!--row 1 -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Duration</label>
                                                <select name="duration">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Frequency</label>
                                                <select name="frequency">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Location</label>
                                                <select name="location">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Character</label>
                                                <select name="character">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--row 2 -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Intensity</label>
                                                <select name="intensity">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Nausea</label>
                                                <select name="nausea">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--row 3 -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Vomit</label>
                                                <select name="vomit">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Phonophobia</label>
                                                <select name="phonophobia">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Photophobia</label>
                                                <select name="photophobia">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Visual</label>
                                                <select name="visual">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--row 4 -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Sensory</label>
                                                <select name="sensory">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Dysphasia</label>
                                                <select name="dysphasia">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--row 5 -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Dysarthria</label>
                                                <select name="dysarthria">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Vertigo</label>
                                                <select name="vertigo">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Tinnitus</label>
                                                <select name="tinnitus">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Hypoacusis</label>
                                                <select name="hypoacusis">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--row 6 -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Diplopia</label>
                                                <select name="diplopia">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Defect</label>
                                                <select name="defect">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--row 7 -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Ataxia</label>
                                                <select name="ataxia">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Conscience</label>
                                                <select name="conscience">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">Paresthesia</label>
                                                <select name="paresthesia">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <label for="">DPF</label>
                                                <select name="dpf">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-30">
                                    <button class="btn btn--radius btn--green" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <form method="POST" action="../../index.php">
                <div class="p-t-20">
                    <button class="btn btn--radius btn--green" type="submit">Home</button>
                </div>
            </form>


        </div>


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


