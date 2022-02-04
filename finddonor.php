<?php
include('config/dbconfig.php');
if (isset($_POST['searchDonor'])) {
    $searchTown = $_POST['city'];
    $searchBgroup = $_POST['bgroup'];

    if ($searchTown==null) {
        $_SESSION['bloodme_error_msg'] = "Please Enter City";
        header('location: index.php');
    }elseif ($searchBgroup=="no-blood") {
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        header('location: index.php');
    }else{

    $searchDonors = "SELECT * FROM `users` WHERE `u_town` LIKE '%".$searchTown."%' AND `u_blood_group`='$searchBgroup'";
    $searchUser = $conn->prepare($searchDonors);
    $searchUser->execute();
    $searchuserrow = $searchUser->rowCount();

  
        
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
    <script type="text/javascript" src="js/custom.js?v=<?php echo time() ?>"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <title>Find Donor</title>
</head>
<body>

<?php include('includes/main-navbar.php') ?>


    <div class="container">
        <div class="row">
    
        <?php
          if ($searchuserrow>0) {
        while($searchuserfetch = $searchUser->fetch()){
            ?>

            <!-- <p><?php echo $searchuserfetch['u_name']; ?></p> -->
            
            <div class="col-md-3  p-3" >
                <div class="main-donor-card shadow">
                    <img src="img/avatar-2.png" class="rounded-circle p-4" width="100%" alt="">
                    <p class="m-0 text-center" style="font-weight: bold;"><?php echo $searchuserfetch['u_name']; ?></p>
                    <p class="text-center"><?php
                            if ($searchuserfetch['u_email']==null) {
                                echo 'Email : '.'Email Not Found';
                            }else{
                                echo $searchuserfetch['u_email']; 
                            }
                    ?><br>
                    <?php
                            if ($searchuserfetch['u_telephone']==null) {
                                echo 'Phone : '.'Number Not Found';
                            }else{
                                echo $searchuserfetch['u_telephone']; 
                            }
                    ?>
                    <br>
                    <?php
                        $bloodgroup = $searchuserfetch['u_blood_group'];
                            echo '<span style="font-weight: bold; color: rgb(219, 51, 51);">'.$bloodgroup.'</span>';
                    ?><br>
                      <?php 
                                echo  $searchuserfetch['u_town']; 
                    ?>
                    </p>
                    <?php 
                        if ($searchuserfetch['u_facebook_link']==null) {
                           
                        }else{
                            ?>
                    <a href=""><p class="text-center read-hover m-0" style="font-size: 18px;">Facebook</p></a>
                            <?php
                        }
                            ?>
                   
                </div>
            </div>
            

            <?php
        }
        ?>
        </div>
    </div>


        <?php
    }else{
        ?>

<p>Sorry. No donors Fond Your Aria..</p> 
<img src="img/logoproject.png" alt="">
        <?php
    }


    ?>
       

 <?php include('includes/models.php') ?>

<?php include('includes/footer.php') ?>

    
</body>
</html>

<?php 
    }
}
?>