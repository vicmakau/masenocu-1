<?php
if(!session_id()) session_start();
include 'serverconnection.php';
//
if(isset($_POST['activity'])){
  $actiTitle=$_POST['activityTitle'];
  $actiDate=$_POST['activityDate'];
  $category=$_POST['cate'];
  $actiVenue=$_POST['activityVenue'];
  $actiSummary=$_POST['activitySummary'];
  $actiTime=$_POST['activityTime'];
  $image = $_FILES['image']['name'];
  $target = "../images/".basename($image);
  $imagename=basename($image);
   $file_size =$_FILES['image']['size'];
   $file_tmp =$_FILES['image']['tmp_name'];
   $file_type=$_FILES['image']['type'];
   $file_ext=strtolower(end(explode('.',$image)));
   $extensions= array("jpeg","jpg","png");
   if(in_array($file_ext,$extensions)=== false){
      echo '<script type="text/javascript">alert("extension not allowed, please choose a JPEG or PNG file.");
      window.location.replace("../superAdmin.php?tab=Activities");
      </script>';
   }else{
     if($file_size > 2097152){
       echo '<script type="text/javascript">alert("File size must be excately 2 MB");
       window.location.replace("../superAdmin.php?tab=Activities");
       </script>';
     }else{
       move_uploaded_file($file_tmp,$target);
       $sql = "INSERT INTO `activities`(`title`, `description`, `date`, `venue`, `category`, `image`)
       VALUES ('$actiTitle','$actiSummary','$actiDate $actiTime','$actiVenue','$category','$imagename')";
         if ($conn->query($sql) === TRUE) {
           echo '<script type="text/javascript">alert("Activity Added successfully");
                      window.location.replace("../superAdmin.php?tab=Activities");
                </script>';
             exit;
         } else {
           echo '<script type="text/javascript">alert("An error occured");
           window.location.replace("../superAdmin.php?tab=Activities");
           </script>';
         }
     }
   }
}
// Edit sermon php
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
  $sermonsql = "INSERT INTO `sermons`(`title`, `summary`, `date`, `video`, `audio`, `document`, `venue`, `speaker`)
  VALUES ('$sermonTitle','$sermonSummary','$sermonDate $sermonTime','$sermonVideo','$sermonAudio','$sermonDocument','$sermonVenue','$sermonSpeaker')";

  if ($conn->query($sermonsql) === TRUE) {
    echo '<script type="text/javascript">alert("Uploaded Succesfully");
    window.location.replace("../superAdmin.php?tab=sermon);
    </script>';
  } else {
      // echo "Error: " . $sermonsql . "<br>" . $conn->error;
      echo '<script type="text/javascript">alert("An error occured");
      window.location.replace("../superAdmin.php?tab=sermon");
      </script>';
  }
  // $conn->close();
}

        //Add and alter union Leadership
  if(isset($_POST['Leaders'])){
    $leaderGid=$_POST['leaderGid'];
    $leaderMId=(int)$_POST['leaderMId'];
    $leaderDocket=$_POST['leaderDocket'];
    $leadersql = "INSERT INTO `leaders`( `docket`, `user_data`, `group_id`)
    VALUES ('$leaderDocket','$leaderMId',$leaderGid)";

    if ($conn->query($leadersql) === TRUE) {
      echo '<script type="text/javascript">alert("Added Succesfully");
             window.location.replace("../superAdmin.php?tab=Leadership");
           </script>';
          exit;
    } else {
        // echo "Error: " . $leadersql . "<br>" . $conn->error;
        echo '<script type="text/javascript">alert("An error occured");
        window.location.replace("../superAdmin.php?tab=Leadership");
        </script>';
    }
  // $conn->close();
  }

  // add ministry leaders
  if(isset($_POST['minLeaders'])){
    $minGid=$_POST['minGid'];
    $minMId=$_POST['minMId'];
    $minDocket=$_POST['minDocket'];
    $minsql = "INSERT INTO `leaders`( `docket`, `user_data`, `group_id`)
    VALUES ('$minDocket','$minMId',$minGid)";

    if ($conn->query($minsql) === TRUE) {
      echo '<script type="text/javascript">alert("Added Succesfully");
             window.location.replace("../superAdmin.php?tab=Leadership");
           </script>';
          exit;
    } else {
        // echo "Error: " . $leadersql . "<br>" . $conn->error;
        echo '<script type="text/javascript">alert("An error occured");
        window.location.replace("../superAdmin.php?tab=Leadership");
        </script>';
    }
  // $conn->close();
  }
       // Add and alter semester theme

  if(isset($_POST['theme'])){
     $theme=$_POST['semTheme'];
     $verse=$_POST['verse'];
     $semester=$_POST['semester'];
     $themesql = "INSERT INTO `semester_theme`(`theme`, `bible_verse`, `semester`) VALUES ('$theme','$verse','$semester')";

     if ($conn->query($themesql) === TRUE) {
       $success ='<div class="alert alert-success" role="alert">Theme</div>';
       echo '<script type="text/javascript">alert("Theme Succesfully uploaded");
       window.location.replace("../superAdmin.php?tab=semTheme");
       </script>';
     } else {
         echo "Error: " . $themesql . "<br>" . $conn->error;
         echo '<script type="text/javascript">alert("An error occured");
              window.location.replace("../superAdmin.php?tab=semTheme");
         </script>';
     }
     // $conn->close();
   }

      //Members signup
  if(isset($_POST['signup'])){
    $memberfirstname=$_POST['memberfirstname'];
    $memberlastname=$_POST['memberlastname'];
    $memberemail=$_POST['memberemail'];
    $memberyos=$_POST['memberyos'];
    $eveteam=$_POST['eveteam'];
    $memberphone=$_POST['memberphone'];
    $memberpassword=md5($_POST['memberpassword']);
    $memberCpassword=md5($_POST['memberCpassword']);
    if($memberpassword == $memberCpassword){
  	$sql_e = "SELECT * FROM `members` WHERE email='$memberemail'";
  	$res_e = mysqli_query($conn, $sql_e);

  	if (mysqli_num_rows($res_e) > 0) {
      $error ='<div class="alert alert-danger" role="alert">Email already exists !!!!!</div>';
  	}else{
      $membersql="INSERT INTO `members`(`first_name`, `last_name`, `email`, `phone`, `study_year`,`password`,`eve_team_id`)
       VALUES ('$memberfirstname','$memberlastname','$memberemail','$memberphone','$memberyos','$memberpassword','$eveteam')";
     }
      if ($conn->query($membersql) === TRUE) {
        echo '<script type="text/javascript">alert("Weldone .");
         window.location.replace("../login.php");
        </script>';
      } else {
      // echo "Error: " . $membersql . "<br>" . $conn->error;
      echo '<script type="text/javascript">alert("Something went wrong");
       window.location.replace("../sign-up.php");
      </script>';
      }
    }else{
      echo '<script type="text/javascript">alert("PASSWORD MISMATCH");
       window.location.replace("../sign-up.php");
      </script>';

    }
  }
//  Members login backend
  if (isset($_POST['login'])) {
    $loginemail = $_POST['loginemail'];
    $loginpassword = md5($_POST['loginpassword']);
    $loginquery = "SELECT * FROM `members` WHERE `email` = '$loginemail' AND `password` = '$loginpassword' LIMIT 1";
    $login_result = $conn->query($loginquery);

    if ($login_result->num_rows > 0) {
      $row = $login_result->fetch_assoc();
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user']=$loginemail;
      header('location:./index.php');
      exit;
    }else {
      echo '<script type="text/javascript">alert("Login failed.Try again");
       window.location.replace("../login.php");
      </script>';
    }
  }


  // Admin login backend
  if (isset($_POST['adminlogin'])) {
    $adminemail = $_POST['adminemail'];
    $adminpassword =  md5($_POST['adminpassword']);
    $adminquery = "SELECT * FROM `members` WHERE `email` = '$adminemail' AND `password` = '$adminpassword' AND  `role`='admin'";
    $admin_result = $conn->query($adminquery);
    if ($admin_result->num_rows > 0) {
      while ($row = $admin_result->fetch_assoc()) {
        $_SESSION['admin']= $adminemail;
        header('location:../superAdmin.php');
        }
    }else {
      echo '<script type="text/javascript">alert("Something went wrong");
       window.location.replace("../superAdmin.php");
      </script>';
    }


  }
  // edit profile
  if (isset($_POST['edit'])){
    $user_id = $_SESSION['user_id'];
    $email=$_SESSION['user'];

    // Image
    if (isset($_FILES['userimage']['name'])) {
      $image = $_FILES['userimage']['name'];
      $target = "../images/".basename($image);
      $imagename=basename($image);
      $file_size =$_FILES['userimage']['size'];
      $file_tmp =$_FILES['userimage']['tmp_name'];
      $file_type=$_FILES['userimage']['type'];
      $file_ext=strtolower(end(explode('.',$image)));
      $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
        echo '<script type="text/javascript">alert("extension not allowed, please choose a JPEG or PNG file.");
                window.location.replace("../profile.php");
              </script>';
      }else{
        if($file_size > 2097152){
          echo '<script type="text/javascript">alert("File size must be exactly 2 MB");
                      window.location.replace("../profile.php");
                  </script>';
        }else{
          move_uploaded_file($file_tmp,$target);
          $sql = "UPDATE `members` SET `picture`='$imagename' WHERE `email`='$email'";

          if ($conn->query($sql) === TRUE) {
            header('location:../profile.php');
            // echo "<script type='text/javascript'>alert('Record updated successfully');</script>";
          } else {
            echo '<script type="text/javascript">alert("An error occured");
            window.location.replace("../profile.php");
            </script>';
          }
        }
      }
    }

    // Course
    if (isset($_POST['course'])){
      $course = mysqli_real_escape_string($conn,$_POST['course']);
      $sql = "UPDATE `members` SET `course`='$course' WHERE `email`='$email'";
      if ($conn->query($sql) === TRUE) {
        header('location:../profile.php');
        // echo "<script type='text/javascript'>alert('Record updated successfully');</script>";
      } else {
        echo '<script type="text/javascript">alert("An error occured");
        window.location.replace("../profile.php");
        </script>';
      }
    }

    // Eve Team
    if (isset($_POST['eveteam'])){
      $eveteam = mysqli_real_escape_string($conn,$_POST['eveteam']);
      $sql = "UPDATE `members` SET `eve_team_id`=$eveteam WHERE `email`='$email'";
      if ($conn->query($sql) === TRUE) {
        header('location:../profile.php');
        // echo "<script type='text/javascript'>alert('Record updated successfully');</script>";
      } else {
        echo '<script type="text/javascript">alert("An error occured");
        window.location.replace("../profile.php");
        </script>';
      }
    }



    // Ministries
    $sql = "DELETE FROM `member_ministries` WHERE `member_id` = $user_id";
    if ($conn->query($sql) === TRUE) {
      header('location:../profile.php');
      // echo "<script type='text/javascript'>alert('Record updated successfully');</script>";
    } else {
      echo '<script type="text/javascript">alert("An error occured");
      window.location.replace("../profile.php");
      </script>';
    }

    if (isset($_POST['minGid'])) {
      foreach($_POST['minGid'] as $ministry) {
        $sql = "INSERT INTO  `member_ministries` VALUES (NULL, $user_id, $ministry)";
        if ($conn->query($sql) === TRUE) {
          header('location:../profile.php');
          // echo "<script type='text/javascript'>alert('Record updated successfully');</script>";
        } else {
          echo '<script type="text/javascript">alert("An error occured");
          window.location.replace("../profile.php");
          </script>';
          break;
        }
      }
    }
  }


// testimonials approvals
 if (isset($_GET['item']) && $_GET['item'] === 'testimonial') {
   $id = $_GET['id'];
   if ($_GET['action'] === 'allow') {
     $sql = "UPDATE testimonials SET state = 'allowed' WHERE id = $id";
   } else if ($_GET['action'] === 'decline') {
     $sql = "DELETE FROM testimonials WHERE id = $id";
   }

   if ($conn->query($sql) === TRUE) {
     header('location:superAdmin.php?tab=testimonials');
     exit;
   }
 }


// add testimonials
 if(isset($_POST['sub-testimonial'])){
   $message=$_POST['testimonial'];
   $ide =  $_SESSION['user'] ;
     $testimonialsql="INSERT INTO `testimonials`( `member_id`, `message`) VALUES ('$ide','$message')";
     if ($conn->query($testimonialsql) === TRUE) {
       // $success ='<div class="alert alert-success" role="alert">Something went wrong</div>';
       echo '<script type="text/javascript">alert("Testimonial Added successfully");
       window.location.replace("../profile.php");
       </script>';
         exit;
     } else {
       echo '<script type="text/javascript">alert("Testimonial failed ");
       window.location.replace("../profile.php");
       </script>';

    exit;
     // echo "<script type='text/javascript'>alert('Testimonial failed to upload');</script>";
    }
   }
