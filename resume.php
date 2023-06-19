<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'resume_builder');
if (!$conn) {
    echo "Error";
}
// $fname = $_SESSION['Fname'];
$fname = "Manav Adwani";
// echo $fname;
?>
<?php
$sql = "SELECT * FROM `personal_info` WHERE Full_Name='$fname'";
$sql2 = "SELECT * FROM `experience` WHERE Name='$fname'";
$sql3 = "SELECT * FROM `education` WHERE Name='$fname'";
$sql4 = "SELECT * FROM `projects` WHERE Name='$fname'";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$row = mysqli_fetch_assoc($result); 
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_assoc($result3);
$row4 = mysqli_fetch_assoc($result4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="resume.css">
</head>
<body>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="first-name"><?php echo $row['Full_Name'];?></span> 
      <span class="last-name"><?php echo $row['Last_Name'];?></span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val"><?php echo $row['Email'];?></span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val"><?php echo $row['Number'];?></span>
    </div>
    
    <div class="about">
      <span class="position"><?php echo $row['Job_Title']?> </span>
      <span class="desc">
      <?php echo $row['Story'];?>. 
      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $row2['Title']?></div>
            <div class="addr"><?php echo $row2['Company']?></div>
            <div class="duration"><?php echo $row2['Start_date']?> - <?php echo $row2['End_Date']?></div>
          </div>
          <div class="right">
            <div class="name">Fr developer</div>
            <div class="desc"><?php echo $row2['Description']?></div>
          </div>
        </div>
                <div class="section__list-item">
          <div class="left">
            <div class="name">Akount</div>
            <div class="addr">San Monica, CA</div>
            <div class="duration">Jan 2011 - Feb 2015</div>
          </div>
          <div class="right">
            <div class="name">Fr developer</div>
            <div class="desc">did This and that</div>
          </div>
        </div>

      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <h4>Secondary School Certificate</h4>
          </div>
          <div class="right">
            <div class="name"><?php echo $row3['SSC_Name']; ?></div>
            <div class="addr"><?php echo $row3['SSC_Location']; ?></div>
            <div class="duration"><?php echo $row3['SSC_Year']; ?></div>
          </div>
        </div>
        <div class="section__list-item">
        <div class="left">
            <h4>Higher School Certificate</h4>
          </div>
          <div class="right">
            <div class="name"><?php echo $row3['HSC_Name']; ?></div>
            <div class="addr"><?php echo $row3['HSC_Location']; ?></div>
            <div class="addr"><?php echo $row3['HSC_Stream']; ?></div>
            <div class="duration"><?php echo $row3['HSC_Year']; ?></div>
          </div>
        </div>
        <div class="section__list-item">
        <div class="left">
            <h4>College</h4>
          </div>
          <div class="right">
            <div class="name"><?php echo $row3['Clg_Name']; ?></div>
            <div class="addr"><?php echo $row3['Clg_Location']; ?></div>
            <div class="addr"><?php echo $row3['Clg_Stream']; ?></div>
            <div class="duration"><?php echo $row3['Clg_Year']; ?></div>
          </div>
        </div>

      </div>
      
  </div>
     <div class="section">
      <div class="section__title">Projects</div> 
       <div class="section__list">
         <div class="section__list-item">
           <div class="name"><?php echo $row4['Project_Name']; ?></div>
           <div class="text"><?php echo $row4['Description'] ?></div>
           <div class="link"><?php echo $row4['Link']; ?></div>
         </div>
         
         <div class="section__list-item">
                    <div class="name">DSP</div>
           <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow. <a href="/login">link</a>
           </div>
         </div>
       </div>
    </div>
     <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
         <div class="skills__item">
           <div class="left"><div class="name">
             Javascript
             </div></div>
           <div class="right">
                          <input  id="ck1" type="checkbox" checked/>

             <label for="ck1"></label>
                          <input id="ck2" type="checkbox" checked/>

              <label for="ck2"></label>
                         <input id="ck3" type="checkbox" />

              <label for="ck3"></label>
                           <input id="ck4" type="checkbox" />
            <label for="ck4"></label>
                          <input id="ck5" type="checkbox" />
              <label for="ck5"></label>

           </div>
         </div>
         
       </div>
       <div class="skills__item">
           <div class="left"><div class="name">
             CSS</div></div>
           <div class="right">
                          <input  id="ck1" type="checkbox" checked/>

             <label for="ck1"></label>
                          <input id="ck2" type="checkbox" checked/>

              <label for="ck2"></label>
                         <input id="ck3" type="checkbox" />

              <label for="ck3"></label>
                           <input id="ck4" type="checkbox" />
            <label for="ck4"></label>
                          <input id="ck5" type="checkbox" />
              <label for="ck5"></label>

           </div>
         </div>
         
       </div>
     <div class="section">
     <div class="section__title">
       Language
       </div>
       <div class="section__list">
         <div class="section__list-item">
               HINDI, ENGLISH, SINDHI, GUJARATI
          </div>
       </div>
     </div>
     </div>
  </div>
</div>
</body>
</html>