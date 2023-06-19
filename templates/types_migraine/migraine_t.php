{% extends 'base.php' %}

{% block content %}
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url_for('static', filename='assets/types_migraine/css/styles1.css')}}" rel="stylesheet" />
        <link href="{{url_for('static', filename='assets/types_migraine/css/main1.css')}}" rel="stylesheet" />
        <link href="{{url_for('static', filename='assets/types_migraine/css/design1.css')}}" rel="stylesheet" />
        

    </head>
    <body id="page-top">
        <div class="container" id="main1">
            {% include 'intro_model.php' %}
            <!-- Masthead-->
            <header class="masthead">
                <div class="wrapper wrapper--w960">
                    <div class="card card-2">
                        <div class="card-heading" style="background-image: url('{{url_for('static', filename='assets/types_migraine/images/bg-m.jpg')}}');"></div>
                        <div class="card-body">
                            <h2 class="title">What's your Migraine?</h2>
                            <form method="POST" action="/typesmigraine">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Name" name="name" required>
                                </div>
                                <div class="input-group">
                                    <input class="input--style-2" type="number" min="1" placeholder="Age" name="age" required>
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
{% endblock %}

