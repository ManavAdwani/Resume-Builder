<?php
session_start();
$conn = new PDO('mysql:host=localhost;dbname=resume_builder','root','');
if (!$conn) {
    echo "Error";
}
// $fname = $_SESSION['Fname'];
$fname = "Manav Adwani";
echo $fname;
// $fname = "MANAV";
// echo $fname;

foreach($_POST['project_name'] as $key=>$value){
    $sql = 'INSERT INTO `projects`(`Project_Name`, `Description`, `Link`, `Name`) VALUES (:Pname, :Descp, :Link,:fname)';
    $stmt = $conn->prepare($sql);
    $stmt -> execute([
        'Pname'=>$_POST['project_name'][$key],
        'Descp'=>$_POST['desc'][$key],
        'Link'=>$_POST['project_link'][$key],
        'fname'=>$fname,
        // 'ends'=>$_POST['ends'][$key]

    ]);
}
echo 'Items inserted Done';
