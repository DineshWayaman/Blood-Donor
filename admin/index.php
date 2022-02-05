<?php
ob_start();
session_start();
// include('../config/dbconfig.php');
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

    <title>Home</title>
</head>
<body id="body-pd">

    <?php include('includes/Home/admin_sidebar.php') ?>
        
        <div class="container-fluid">
        <div class="row d-flex justify-content-center pt-4">
                <div class="col-md-3 paddingbot" >
                 <div class="btn btn-success w-100 h-100 shadow">
                     <p class="m-auto"><i class="fas fa-users"></i> Donors</p>                    
                    <p class="m-auto">No.OF Donors : 1349</p>
                </div>
                </div>
                <div class="col-md-3 paddingbot">
                <div class="btn btn-primary w-100 h-100 shadow">
                <p class="m-auto"><i class="fas fa-users"></i> Students</p>                    
                    <p class="m-auto">No.OF Students : 1349</p>
                </div>
                </div>
                <div class="col-md-3 paddingbot">
                <div class="btn btn-danger w-100 h-100 shadow">
                <p class="m-auto"><i class="fas fa-users"></i> Students</p>                    
                    <p class="m-auto">No.OF Students : 1349</p>
                </div>
                </div>
                <div class="col-md-3 paddingbot">
                <div class="btn btn-warning w-100 h-100 shadow">
                <p class="m-auto text-white"><i class="fas fa-users"></i> Students</p>                    
                    <p class="m-auto text-white">No.OF Students : 1349</p>
                </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-3">
            <div class="row">
        <?php include('includes/Home/users_table.php') ?>
        <?php include('includes/Home/blood_request_table.php') ?>
        </div>
        </div>

</body>
</html>

<?php 
}
}
?>