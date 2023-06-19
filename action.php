<?php
session_start();
$conn = new PDO('mysql:host=localhost;dbname=resume_builder','root','');
if (!$conn) {
    echo "Error";
}
$fname = $_SESSION['Fname'];
echo $fname;
// $fname = "MANAV";
// echo $fname;

foreach($_POST['title'] as $key=>$value){
    $sql = 'INSERT INTO `experience`(`Name`, `Title`, `Company`, `Description` ,`Start_date`, `End_Date`) VALUES (:fname, :title, :company_name, :descriptionn, :starts, :ends)';
    $stmt = $conn->prepare($sql);
    $stmt -> execute([
        'fname'=>$fname,
        'title'=>$value,
        'company_name'=>$_POST['company_name'][$key],
        'descriptionn'=>$_POST['desc'],
        'starts'=>$_POST['starts'][$key],
        'ends'=>$_POST['ends'][$key]

    ]);
}
echo 'Items inserted Done';

?>