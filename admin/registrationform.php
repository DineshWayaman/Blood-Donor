<?php
session_start();

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
   
  <title>Add New Admin</title>
</head>
<body>
    <div class="container midle-all">

    <?php 
        if (isset($_SESSION['error_msg'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['error_msg']; ?></div>
        
        <?php
          unset($_SESSION['error_msg']);
         }

         if (isset($_SESSION['success_msg'])) {
            ?>
         <div class="alert alert-success" role="alert"><?php echo $_SESSION['success_msg']; ?></div>
            <?php  
            unset($_SESSION['success_msg']);
         }

         ?>

    <form method="POST" action="config/sqlcodes.php">
  <div class="row">
    <div class="form-group col-md-6 mt-2">
      <label for="inputEmail4">User Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="User Name" required>
    </div>
    <div class="form-group col-md-6 mt-2" >
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress">Email</label>
    <input type="email" name="email" class="form-control" id="inputAddress" placeholder="User Email">
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress2">NIC</label>
    <input type="text" name="nic" class="form-control" id="inputAddress2" placeholder="NIC Number">
  </div>
  <div class="row mt-2">
    <div class="form-group col-md-6">
      <label for="inputCity">Phone Number</label>
      <input type="text" name="phone" class="form-control" id="inputCity" placeholder="Phone Number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Admin Type</label>
      <select id="inputState" class="form-control" name="adtype" required>
      <option value="not">_Select_</option>
      <option value="Manager">Manager</option>
      <option value="Moderator">Moderator</option>
      </select>
    </div>
  </div>
  <div class="row mt-3 text-center">
      <div class="form-group">
      <button type="submit" name="adminregister" class="btn btn-danger">Sign Up</button>
      <button type="reset" class="btn btn-warning">Clear</button>
      </div>
  </div>
</form>
    </div>
</body>
</html>