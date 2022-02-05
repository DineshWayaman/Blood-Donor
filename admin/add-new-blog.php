<?php 
session_start();
$status = $_SESSION['bloodme_astatus'];
if (isset($_SESSION['bloodme_aid'])==null) {
    $_SESSION['error_msg'] = "Login as an admin to access Home page.";
    header('location: login.php');
}else{
if ($status==0) {
    $_SESSION['error_msg'] = "You Have Blocked By Admin.";
    echo $_SESSION['bloodme_astatus'];
    echo $_SESSION['bloodme_aname'];
    unset($_SESSION['bloodme_aid']);
    unset($_SESSION['bloodme_astatus']);
    header('location: login.php');
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.convform.js"></script>
    <script type="text/javascript" src="js/admin.js?v=<?php echo time() ?>"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Add New Blog</title>
</head>
<body  id="body-pd">
<?php include('includes/Home/admin_sidebar.php') ?>





<div class="container p-2 shadow">
<?php 
        if (isset($_SESSION['bloome_error_msg'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['bloome_error_msg']; ?></div>
        
        <?php
          unset($_SESSION['bloome_error_msg']);
         }

         if (isset($_SESSION['success_msg'])) {
            ?>
         <div class="alert alert-success" role="alert"><?php echo $_SESSION['success_msg']; ?></div>
            <?php  
            unset($_SESSION['success_msg']);
         }

         ?>

    <form action="config/sqlcodes.php" method="post" enctype="multipart/form-data">
    <div class="form-group mt-2">
    <label for="inputAddress">Title</label>
    <input type="text" name="title" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress">Featured Image</label>
    <input type="file" name="fimg" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress2">Meta Description</label>
    <textarea type="text" name="meta" class="form-control" id="inputAddress2" placeholder="" style="max-height: 100px; min-height: 100px;"></textarea>
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress2">Content</label>
    <textarea type="text" name="content" class="form-control" id="content" placeholder=""></textarea>
  </div>
  <div class="row">
    <div class="form-group col-md-6 mt-2">
      <label for="inputEmail4">Date</label>
      <input type="date" name="date" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6 mt-2" >
      <label for="inputPassword4">Time</label>
      <input type="time" name="time" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
    <div style="width: 100%;" class="text-center mt-3">
    <button type="submit" name="save-blog" class="btn btn-success">Save Post</button>
</div>
    </form>
</div>


<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>

    <script>

    CKEDITOR.replace( 'content', {
        height: 300,
        filebrowserUploadUrl: "config/sqlcodes.php"
        });

    </script>

</body>
</html>
<?php 
}
}
?>