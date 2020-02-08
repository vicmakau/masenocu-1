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
  // $conn->close();
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
  // $conn->close();
}

// Leadership
if(isset($_POST['Leaders'])){
    $leaderGid=$_POST['leaderGid'];
    $leaderMId=(int)$_POST['leaderMId'];
    $leaderDocket=$_POST['leaderDocket'];
  $leadersql = "INSERT INTO `leaders`( `docket`, `member_id`, `group_id`)
  VALUES ('$leaderDocket',$leaderMId,$leaderGid)";

  if ($conn->query($leadersql) === TRUE) {
      header('location:../superAdmin.php');
  } else {
      echo "Error: " . $leadersql . "<br>" . $conn->error;
  }
  // $conn->close();
}

    function testimonial($idn){
      $conne = new mysqli('localhost', 'root', '', 'masenocu_db');
      // Check connection

      if ($conne->connect_error) {
          die("Connection failed: " . $conne->connect_error);
      }
     $approve="allow".$idn;
     $disapprove="discard".$idn;
     // var_dump($conne);
     if(isset($_POST[$approve])){
     $sql = "UPDATE `testimonials` SET `state`='allowed' WHERE `id`='$idn' ";
     if ($conne->query($sql) === TRUE) {
       header('location:../superAdmin.php');
     } else {
         echo "Error updating record: " . $conne->error;
         }
       }else if(isset($_POST[$disapprove])){
         $sql = "DELETE FROM `testimonials` WHERE `id`='$idn' ";
           if ($conne->query($sql) === TRUE) {
             $message = "You have succesfully updated";
               echo "<script type='text/javascript'>alert('$message');</script>";
           }else {
               echo "Error updating record: " . $conne->error;
           }
           }
       }


       // semester theme

   if(isset($_POST['theme'])){
     $theme=$_POST['semTheme'];
     $verse=$_POST['verse'];
     $semester=$_POST['semester'];
     $themesql = "INSERT INTO `semester_theme`(`theme`, `bible_verse`, `semester`) VALUES ('$theme','$verse','$semester')";

     if ($conn->query($themesql) === TRUE) {
       // echo "added succesfully";
         header('location:../superAdmin.php');
         echo "<script type='text/javascript'>alert('successfully posted');</script>";

     } else {
         echo "Error: " . $themesql . "<br>" . $conn->error;
     }
     // $conn->close();
   }

 ?>
