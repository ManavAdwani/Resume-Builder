<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'resume_builder');
if (!$conn) {
    echo "Error";
}
$fname = $_SESSION['Fname'];
echo $fname;
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['next'])) {
    $fname = $_SESSION['Fname'];
// echo $fname;
    $ssc_name = $_POST['ssc_name'];
    $ssc_location = $_POST['ssc_location'];
    $ssc_year = $_POST['ssc_year'];
    $hsc_name = $_POST['hsc_name'];
    $hsc_location = $_POST['hsc_location'];
    $hsc_year = $_POST['hsc_year'];
    $hsc_stream = $_POST['hsc_stream'];
    $clg_name = $_POST['clg_name'];
    $clg_location = $_POST['clg_location'];
    $clg_year = $_POST['clg_year'];
    $clg_course = $_POST['clg_course'];

    $sql = "INSERT INTO `education`(`Name`,`SSC_Name`, `SSC_Location`, `SSC_Year`, `HSC_Name`, `HSC_Location`, `HSC_Year`, `HSC_Stream`, `Clg_Name`, `Clg_Location`, `Clg_Year`, `Clg_Stream`) VALUES ('{$fname}','{$ssc_name}', '{$ssc_location}' ,'{$ssc_year}','{$hsc_name}','{$hsc_location}','{$hsc_year}','{$hsc_stream}','{$clg_name}', '{$clg_location}','{$clg_year}','{$clg_course}')";

    $q1 = mysqli_query($conn, $sql);
    if ($q1) {
        header("location: experience.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder - Create Resume in seconds</title>
    <link rel="stylesheet" href="create_resume.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
            $("button").click(function() {
                alert("jQuery is working perfectly.");
            });
        });
    </script> -->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'>
    </script>
</head>

<body>
    <div class="page-wrapper">
        <div class="nav-wrapper">
            <div class="grad-bar"></div>
            <nav class="navbar">
                <img src="https://www.resumebuilder.com/wp-content/themes/resumebuilder/assets/images/resumebuilder-logo.svg" alt="Company Logo">
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav no-search">
                    <li class="nav-item"><a href="#">Home</a></li>
                    <li class="nav-item"><a href="#">Resume Builder</a></li>
                    <li class="nav-item"><a href="#">Resume Example</a></li>
                    <li class="nav-item"><a href="#">Cover Letters Examples</a></li>
                    <li class="nav-item"><a href="#">Login</a></li>

                </ul>
            </nav>
        </div>

        <center>
            <br>
            <br>
            <h2>Let's make beautiful resume for you.</h2>
        </center>
        <!-- multistep form -->
        <form method="post" action="education.php" id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li>Personal Information</li>
                <li class="active">Education</li>
                <li>Experience</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Education</h2>
                <h3 class="fs-subtitle">Add your most relevant education, including programs you’re currently enrolled
                    in.</h3>
                <div id="readroot">
                    <input type="text" name="ssc_name" placeholder="SSC School Name" />
                    <input type="text" name="ssc_location" placeholder="SSC School Location" />
                    <input type="text" name="ssc_year" placeholder="Year in Which SSC School Compeleted" />
                    <br>
                    <br>
                    <br>
                    <input type="text" name="hsc_name" placeholder="HSC School Name" />
                    <input type="text" name="hsc_location" placeholder="HSC School Location" />
                    <input type="text" name="hsc_year" placeholder="Year in which HSC School Completed" />
                    <input type="text" name="hsc_stream" placeholder="HSC Stream" />

                    <br>
                    <br>
                    <br>
                    <input type="text" name="clg_name" placeholder="College Name" />
                    <input type="text" name="clg_location" placeholder="College Location" />
                    <input type="text" name="clg_year" placeholder="Year in which College Completed" />
                    <input type="text" name="clg_course" placeholder="College Course" />
                    <br>
                    <br>
                    <input type="text" name="languages" placeholder="Languages you know ( Separate the Languages by comma example -> English, Hindi , etx)" />
                </div>
                <span id="writeroot"></span>
                <!-- <button class="previous action-button" id="moreFields" style="width: 150px;">
                + More Education
            </button> -->
                <!-- <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
                <button class="next action-button" name="next">Next</button>
            </fieldset>


        </form>
        <br>
        <br>
</body>
<!-- <script src="create_resume.js"></script> -->
<!-- <script src="extra.js"></script> -->

</html>