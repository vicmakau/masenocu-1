<?php
$conn = new mysqli('localhost', 'root', '', 'masenocu_db');
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['activity'])){
  $actiTitle=$_POST['activityTitle'];
  $actiDate=$_POST['activityDate'];
  $actiCategory=$_POST['activityCategory'];
  $actiVenue=$_POST['activityVenue'];
  $actiSummary=$_POST['activitySummary'];
  $sql = "INSERT INTO `activities`(`title`, `description`, `date`, `venue`, `category`)
   VALUES ('$actiTitle','$actiSummary','$actiDate','$actiVenue','$actiCategory')";

  if ($conn->query($sql) === TRUE) {
    // echo "added succesfully";
      header('location:../superAdmin.php');
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
// sermon php


if(isset($_POST['sermon'])){
  $sermonTitle=$_POST['sermonTitle'];
  $sermonDate=$_POST['sermonDate'];
  $sermonAudio=$_POST['sermonAudio'];
  $sermonVideo=$_POST['sermonVideo'];
  $sermonVenue=$_POST['sermonVenue'];
  $sermonDocument=$_POST['sermonDocument'];
  $sermonTime=$_POST['sermonTime'];
  $sermonSpeaker=$_POST['sermonSpeaker'];
  $sermonSummary=$_POST['sermonSummary'];
    $date=$sermonDate. $sermonTime;
  $sermonsql = "INSERT INTO `sermons`(`title`, `summary`, `date`, `video`, `audio`, `document`, `venue`, `speaker`)
 VALUES ('$sermonTitle','$sermonSummary','$date','$sermonVideo','$sermonAudio','$sermonDocument','$sermonVenue','$sermonSpeaker')";

  if ($conn->query($sermonsql) === TRUE) {
    // echo "added succesfully";
      header('location:../superAdmin.php');
  } else {
      echo "Error: " . $sermonsql . "<br>" . $conn->error;
  }
  $conn->close();
}





 ?>
