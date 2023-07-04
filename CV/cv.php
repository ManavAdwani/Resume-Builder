<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'resume_builder');
if (!$conn) {
    echo "Error";
}

// $fname = $_SESSION['Fname'];
$fname = "demo";

$sql = "SELECT * FROM `personal_info` WHERE Full_Name='$fname'";
$sq2 = "SELECT * FROM `education` WHERE education.Name='$fname'";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sq2);
$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="cv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="colors">
        <button class="red" id="red"></button>
        <button class="green" id="green"></button>
        <button class="blue" id="blue"></button>
        <button class="yellow" id="yellow"></button>
        <button class="black" id="black"></button>
    </div>
    <div id="header">
        <h1 id="name"><?php echo $row['Full_Name']; ?> <?php echo $row['Last_Name']; ?></h1>

        <div class="title">
            <p><?php echo $row['Job_Title']; ?></p>
            <b> || </b>
            <p><?php echo $row['Address']; ?> , <?php echo $row['City']; ?></p>
        </div>

        <div class="links">
            <button id="btn"><i class="fa fa-instagram"></i> Instagram</button>
            <button id="btn"><i class="fa fa-dribbble"></i> Dribbble</button>
            <button id="btn"><i class="fa fa-github"></i> GitHub</button>
            <button id="btn"><i class="fa fa-linkedin"></i> Linkedin</button>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="budy">
        <div id="left">
            <div id="profile">
                <h4 id="profille" class="profile-primary">Profile</h4>
                <p class="descp"><?php echo $row['Story']; ?></p>
            </div>
            <div id="contacts">
                <h4 id="contact" class="contact-primary">Contact</h4>
                <p class="site"><i class="fa fa-link"></i> <?php echo $row['linkdin_link']; ?></p>
                <hr class="after-skills">
                <p class="site"><i class="fa fa-envelope"></i> <?php echo $row['Email']; ?></p>
                <hr class="after-skills">
                <p class="site"><i class="fa fa-phone"></i><?php echo $row['Number']; ?></p>
                <hr class="after-skills">
            </div>
            <div id="skillss">
                <h4 class="skills-primary" id="skills">Skills</h4>
                <h4 class="skills-secondary">Title</h4>
                <p class="skill"><i class="fa fa-code"></i><?php echo $row['Job_Title']; ?></p>
                <hr class="after-skills">
                <h4 class="skills-secondary">Technical</h4>
                <p class="skill"><i class="fa fa-code"></i> HTML, CSS, JS, PHP, MYSQL, PYTHON</p>
                <hr class="after-skills">
                <h4 class="skills-secondary">Language</h4>
                <p class="skill"><i class="fa fa-language"></i> <?php echo $row2['Language']; ?></p>
                <hr class="after-skills">
            </div>
            <div id="Education">
                <h4 class="Education-primary" id="edu">Education</h4>
                <h4 class="clg-name"><?php echo $row2['Clg_Name']; ?></h4>
                <p class="course"><i class="fa fa-book"></i><?php echo $row2['Clg_Stream']; ?></p>
                <p class="date"><i class="fa fa-calendar"></i><?php echo $row2['Clg_Year']; ?></p>
                <p class="place"><i class="fa fa-location-arrow"></i><?php echo $row2['Clg_Location']; ?></p>
                <hr class="after-edu">
                <h4 class="clg-name"><?php echo $row2['HSC_Name']; ?></h4>
                <p class="course"><i class="fa fa-book"></i><?php echo $row2['HSC_Stream']; ?></p>
                <p class="date"><i class="fa fa-calendar"></i><?php echo $row2['HSC_Year']; ?></p>
                <p class="place"><i class="fa fa-location-arrow"></i><?php echo $row2['HSC_Location']; ?></p>
                <hr class="after-edu">
            </div>
        </div>

        <div id="right">
            <div id="experiences">
                <h4 class="Experience-primary" id="experience">Experience</h4>
                <?php
                $sq3 = "SELECT * FROM `experience` WHERE Name='$fname'";
                $result3 = mysqli_query($conn, $sq3);
                // $row3 = mysqli_fetch_assoc($resul3);
                $cmp = 1;
                while ($isExperience = mysqli_fetch_array($result3)) {
                echo "<p class='cmp-name'><b> Company " . $cmp . "</b> - " . $isExperience['Company'] . "</p>
                <div class='location'>
                    <p>".$isExperience['Title']."</p>
                    <p>||</p>
                    <p>".$isExperience['Start_date']."</p>
                </div>
                <div class='desc'>
                    <p>".$isExperience['Description']."</p>
                </div>
                <br>
                <hr>
                ";
                $cmp = $cmp+1;
                }

                ?>

            </div>
            <br>
            <!-- <br> -->
            <div id="projects">
                <h4 class="Experience-primary" id="project">Project</h4>
                <?php
                $sq4 = "SELECT * FROM `projects` WHERE Name='$fname'";
                $result4 = mysqli_query($conn, $sq4);
                // $row3 = mysqli_fetch_assoc($resul3);
                $cmp = 1;
                while ($isExperience = mysqli_fetch_array($result4)) {
                echo "<p class='cmp-name'><b> Project " . $cmp . "</b> - " . $isExperience['Project_Name'] . "</p>
                <div class='location'>
                    <p>".$row['City']."</p>
                    <p>||</p>
                    <p>".$isExperience['Link']."</p>
                </div>
                <div class='desc'>
                    <p>".$isExperience['Description']."</p>
                </div>
                <br>
                <hr>
                ";
                $cmp = $cmp+1;
                }

                ?>
            </div>
        </div>
    </div>
    <script src="cv.js"></script>
    <script>
        alert("Press Ctrl + p to download/print. \nNote : Use A3 Page only");
    </script>
</body>

</html>