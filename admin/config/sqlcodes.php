<?php 
session_start();
include('../../config/dbconfig.php');


   if (isset($_POST['login'])) {
       $userName = $_POST['username'];
       $userPassword = $_POST['password'];

       if ($userName==null || $userPassword==null) {
         $_SESSION['error_msg'] = "Username and password are mandetory.";
         header('location: ../login.php');
       }else{

       $checkUser = "SELECT * FROM `admin` WHERE `a_name`=? AND `a_password`=?";
       $getUser = $conn->prepare($checkUser);
       $getUser->execute(array($userName,$userPassword));
       $userrow = $getUser->rowCount();
       $userfetch = $getUser->fetch();
       if ($userrow>0) {
           $_SESSION['bloodme_aid'] = $userfetch['a_id'];
           $_SESSION['bloodme_aname'] = $userfetch['a_name'];
           $_SESSION['bloodme_astatus'] = $userfetch['a_status'];
           header('location: ../index.php');
       }else{
           $_SESSION['error_msg'] = "Sorry, that user name or password is incorrect. Please try again.";
           header('location: ../login.php');
       }
    }

   }


   if (isset($_POST['adminregister'])) {
      $adminName = $_POST['name'];
      $adminPassword = $_POST['password'];
      $adminEmail = $_POST['email'];
      $adminNIC = $_POST['nic'];
      $adminPhone = $_POST['phone'];
      $adminType = $_POST['adtype'];

      if ($adminName==null || $adminPassword==null || $adminEmail==null || $adminNIC==null || $adminPhone==null || $adminType==null) {
        $_SESSION['error_msg'] = "All Fields are mandotory.";
        header('location: ../registrationform.php');
      }else{ 

        $insertAdmin = "INSERT INTO admin(a_name , a_email, a_NIC, a_password, a_type, a_phone)  
        VALUES (?,?,?,?,?,?)";
        $insertAdminQuery = $conn->prepare($insertAdmin);
        $insertAdminQuery->execute(array($adminName, $adminEmail, $adminNIC, $adminPassword, $adminType, $adminPhone));
    
        if ($insertAdminQuery) {
            $_SESSION['success_msg'] = "Registration Successfully Completed. You can log in now.";
             header('location: ../registrationform.php');
        }else{
            $_SESSION['error_msg'] = "Error while proccessing. Please try again.";
             header('location: ../registrationform.php');
        }

      }

   }

if(isset($_FILES['upload']['name']))
{
 $file = $_FILES['upload']['tmp_name'];
 $file_name = $_FILES['upload']['name'];
 $file_name_array = explode(".", $file_name);
 $extension = end($file_name_array);
 $new_image_name = rand() . '.' . $extension;
 chmod('upload', 0777);
 $allowed_extension = array("jpg", "gif", "png");
 if(in_array($extension, $allowed_extension))
 {
  move_uploaded_file($file, '../img/uploads/' . $new_image_name);
  $function_number = $_GET['CKEditorFuncNum'];
  $url = 'http://localhost/blood/admin/img/uploads/' . $new_image_name;
  $message = '';
  echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
 }
}

if (isset($_POST['save-blog'])) {

    $title = $_POST['title'];
    $metadesc = $_POST['meta'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $slug = '/'.preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST['title'])));
    $logedAdminID = $_SESSION['bloodme_aid'];

    if ($title==null || $metadesc==null || $content==null || $date==null || $time==null) {
        $_SESSION['bloome_error_msg'] = "You Should enter all field and add Feature Image.";
        header('location: ../add-new-blog.php');
      

    }else{


$target_dir = "../img/featured/";
$target_file = $target_dir . basename($_FILES["fimg"]["name"]);
$url = 'http://localhost/blood/admin/img/featured/'. basename($_FILES["fimg"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fimg"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    // echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fimg"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fimg"]["tmp_name"], $target_file)) {


    $insertPost = "INSERT INTO blog(a_id, b_img, b_title, b_slug, b_metadesc, b_content, b_date, b_time)  
    VALUES (?,?,?,?,?,?,?,?)";
    $insertPostQuery = $conn->prepare($insertPost);
    $insertPostQuery->execute(array($logedAdminID, $url, $title, $slug, $metadesc, $content, $date, $time));

    if ($insertPostQuery) {
        $_SESSION['success_msg'] = "Blog Addedd Successfully Completed.";
         header('location: ../add-new-blog.php');
    }else{
        $_SESSION['error_msg'] = "Error while proccessing. Please try again.";
         header('location: ../add-new-blog.php');
    }
    
  } else {
    $_SESSION['bloome_error_msg'] = "Sorry, there was an error Entering your file.";
    header('location: ../add-new-blog.php');
  }
}
}

}

if (isset($_POST['update-blog'])) {
  $bid = $_POST['bid'];
  $title = $_POST['title'];
  $metadesc = $_POST['meta'];
  $content = $_POST['content'];
  $slug = $_POST['slug'];


  $updatePost = "UPDATE blog SET b_title=?, b_slug=?, b_metadesc=?, b_content=? WHERE b_id='$bid'";
    $updatePostQuery = $conn->prepare($updatePost);
    $updatePostQuery->execute(array($title,$slug,$metadesc,$content));

    if ($updatePostQuery) {
        $_SESSION['success_msg'] = "Blog Update Successfully Completed.";
         header('location: ../blogs.php');
    }else{
        $_SESSION['error_msg'] = "Error while proccessing. Please try again.";
         header('location: ../blogs.php');
    }
    

}