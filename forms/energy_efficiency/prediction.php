<?php
// Get the inputs from the form
$relative_compactness = $_POST['relative_compactness'];
$surface_area = $_POST['surface_area'];
$wall_area = $_POST['wall_area'];
$roof_area = $_POST['roof_area'];
$overall_height = $_POST['overall_height'];
$orientation = $_POST['orientation'];
$glazing_area = $_POST['glazing_area'];
$glazing_area_distribution = $_POST['glazing_area_distribution'];


// Send a POST request to the Flask server
$url = 'http://localhost:5000/predict';
$data = array('relative_compactness' => $relative_compactness,
            'surface_area' => $surface_area,
            'wall_area' => $wall_area,
            'roof_area' => $roof_area,
            'overall_height' => $overall_height,
            'orientation' => $orientation,
            'glazing_area' => $glazing_area,
            'glazing_area_distribution' => $glazing_area_distribution,
            );

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$result = json_decode($response);

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Title Page-->
     <title>Machine Learning</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Energy Efficiency Prediction</h2>
                    <h1><?php echo "Cooling Prediction: " . $result->prediction1 ?></h1><br>
                    <h1><?php echo "Heating Prediction: " . $result->prediction2 ?></h1><br>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
        
</body>
</html>
