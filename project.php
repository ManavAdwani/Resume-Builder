<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'resume_builder');
if (!$conn) {
    echo "Error";
}
$fname = $_SESSION['Fname'];
// $fname = "Manav Adwani";
echo $fname;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder - Create Resume in seconds</title>
    <link rel="stylesheet" href="create_resume.css">
    <!-- <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
        <form method="post" action="#" id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Information</li>
                <li class="active">Education</li>
                <li class="active">Experience</li>
                <!-- <li class="active">Project</li> -->
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Projects</h2>
                <h3 class="fs-subtitle">Tell us about your most recent Project.</h3>
                <div id="readroot">
                    <div class="roots">
                        <div id="showalert"></div>
                        <input type="text" name="project_name[]" placeholder="Project Name" />
                        <textarea name="desc[]" id="" cols="30" rows="5" placeholder="Enter Project Description"></textarea>
                        <input type="text" name="project_link[]" placeholder="Link of Project" />
                        <!-- <label>Currently Working Here</label>
                    <input type="checkbox" name="" id="checkk" placeholder="Currently Working"> -->
                        <button id="demo" class="add action-button" name="add_item_btn">+Add More</button>
                        <br>
                        <br>
                        <br>
                        <span id="writeroot"></span>
                        <button id="submit" class="next action" name="next">Submit</button>
                    </div>
                </div>

            </fieldset>


        </form>
        <br>
        <br>
        <script>
            $(document).ready(function() {
                $(".action-button").click(function(e) {
                    e.preventDefault();
                    let time = 1;
                    $("#writeroot").prepend(`<div id="readroot">
                    <input type="text" name="project_name[]" placeholder="Project Name" />
                        <textarea name="desc[]" id="" cols="30" rows="5" placeholder="Enter Project Description"></textarea>
                        <input type="text" name="project_link[]" placeholder="Link of Project" />
            <br>
            <button class="remove remove_item_btn" name="remove_item_btn">Remove</button>
        </div>`);
                });

                $(document).on('click', '.remove_item_btn', function(e) {
                    e.preventDefault();
                    $(this).parent().remove();
                });
            });
            // Ajax to send the data to the server
            $("#msform").submit(function(e) {
                e.preventDefault();
                $("#submit").val('Adding...');
                $.ajax({
                    url: 'project_action.php',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        $(".add").val('Add');
                        $('#msform')[0].reset();
                        $('#roots').remove();
                        $('#showalert').html(`<div><h2>Ho Gaya Bhai Shabahas</h2></div>`);
                        $(document).ready(function() {
                            window.location.href = "loading.php";
                        });

                    }
                })
            });
        </script>
</body>
<!-- <script src="create_resume.js"></script> -->
<!-- <script src="extra.js"></script> -->
<!-- <script src="experience.js"></script> -->

</html>