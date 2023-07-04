<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'resume_builder');
if (!$conn) {
    echo "Error";
}
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['next'])) {
    $name = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $job = $_POST['jobtitle'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pincode'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $story = $_POST['story'];
    $insta = $_POST['insta'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    // $story = $_POST['story'];

    $_SESSION['Fname'] = $name;

    $sql = "INSERT INTO `personal_info`(`Full_Name`, `Last_Name`, `Job_Title`, `Address`, `City`, `State`, `Pin_code`, `Email`, `Number`, `Story`, `insta_link`, `linkdin_link`, `GitHub_link`) VALUES  ('{$name}','{$Lname}', '{$job}' ,'{$address}','{$city}','{$state}','{$pin}','{$email}','{$number}', '{$story}','{$insta}','{$linkedin}','{$github}')";

    $q1 = mysqli_query($conn, $sql);
    if ($q1) {
        header("location: education.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
        <form method="post" action="create_resume.php" id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Information</li>
                <li>Education</li>
                <li>Experience</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Information</h2>
                <h3 class="fs-subtitle">Include at minimum your email and phone number.</h3>
                <input type="text" name="Fname" placeholder=" First Name" required />
                <input type="text" name="Lname" placeholder=" Last Name" required />
                <input type="text" name="jobtitle" placeholder="Job Title" required />
                <input type="text" name="address" placeholder="Address" required />
                <input type="text" name="city" placeholder="City" required />
                <input type="text" name="state" placeholder="State" required />
                <input type="number" name="pincode" placeholder="Pin Code" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="number" name="number" placeholder="Phone Number" required />
                <textarea id="story" name="story" rows="5" cols="33" placeholder="Describe Yourself in 250 words : "></textarea>

                <!-- <br> -->
                <!-- <button id="storybtn">Write with Chat-GPT</button> -->
                <input type="text" name="insta" placeholder="Instagram Link" />
                <input type="text" name="linkedin" placeholder="linkedin Link" />
                <input type="text" name="github" placeholder="Github Link" />
                <!-- <div style="position: relative;">
                    <textarea></textarea>
                    <button style="position: absolute; top: 5px; right: 5px;">Button</button>
                </div> -->

                <!-- <label for="w3review">Describe Yourself in 250 words :</label> -->

                <button class="next action-button" name="next">Next</button>
            </fieldset>
            <!-- Personal Information PHP -->
        </form>
        <div class="floating" id="storybtn">
        <a href="#" class="float">
        <i class="fa fa-robot my-float"></i>
    </a>
    <div class="label-container">
        <div class="label-text">Write Description with Chat-GPT</div>
        <i class="fa fa-play label-arrow"></i>
    </div>
    </div>
        <br>
        <br>
        <div id="gpt" class="chatbox">
            <div class="header">
                <p>Chat-GPT</p>
            </div>
            <div class="body">
                <div class="gpt">
                    <p>chat GPT</p>
                </div>
                <br>

            </div>
            <div class="button-bar">
                <button>Regenerate <i class="fa fa-refresh"></i></button>
            </div>
        </div>
</body>
<script src="create_resume.js"></script>

</html>