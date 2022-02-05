<?php
ob_start();
session_start();
include('config/dbconfig.php');
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



    <title>BloodMe | Home</title>
</head>
<body>


<?php include('includes/main-navbar.php') ?>


    <div class="container-fluid">

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



       



         <?php include('includes/Home/home-main.php') ?>

         <?php 
        if (isset($_SESSION['bloodme_error_msg'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['bloodme_error_msg']; ?></div>
        
        <?php
          unset($_SESSION['bloodme_error_msg']);
         }

         ?>

         <?php include('includes/Home/search-donor.php') ?>


        <?php include('includes/Home/available-groups.php') ?>


    <div class="container mt-4 shadow">
        <div class="row">
        <div class="col-md-6">
        <img class="main-img" src="img/bloodhome2.png" alt="" srcset="">
        </div>
        <div class="col-md-6">
            <h2 class="mt-2">The Health Benefits of Donating Blood</h2>
            <p>A blood transfusion can be a life saving treatment for patients with cancer, patients undergoing surgery, children with severe anaemia, women who have complications</p>
            <ul class="bullet">
                <li>Reduce harmful iron stores.</li>
                <li>Preserve card ovascular health.</li>
                <li>Reduce the risk cancer.</li>
                <li>Give you a sense of pride.</li>
                <li>Free blood analysis.</li>
            </ul>
        </div>

        </div>
    </div>






    
    <div class="container-fluod mt-5">
        <div class="row">
            <div class="col-md-3 mb-2">
                <div class="count shadow">
                    <div>
                    <p class="text-center"><i class="fas fa-tint fa-2x text-danger"></i></p>
                    <h1 style="font-weight: bold; text-align: center;">
                    <?php 
                        $getUserCount = "SELECT COUNT(*) as totUsers FROM users";
                        $getUserCountquery = $conn->prepare($getUserCount);
                        $getUserCountquery->execute();
                        $fetchUserCountquery = $getUserCountquery->fetch();
                        echo $fetchUserCountquery['totUsers'];
                    ?>
                    </h1>
                    <button class="btn btn-danger">Happy Donors</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="count shadow">
                    <div>
                        <p class="text-center"><i class="fas fa-tint fa-2x text-danger"></i></p>
                    <h1 style="font-weight: bold; text-align: center;">1500</h1>
                    <button class="btn btn-danger">Happy Donors</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="count shadow">
                    <div>
                    <p class="text-center"><i class="fas fa-tint fa-2x text-danger"></i></p>
                    <h1 style="font-weight: bold; text-align: center;">1500</h1>
                    <button class="btn btn-danger">Happy Donors</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="count shadow">
                    <div>
                    <p class="text-center"><i class="fas fa-tint fa-2x text-danger"></i></p>
                    <h1 style="font-weight: bold; text-align: center;">1500</h1>
                    <button class="btn btn-danger">Happy Donors</button>
                    </div>
                </div>
            </div>
    
            </div>
    </div>



    <div class="container shadow mt-5">
        <h2 class="text-center mt-3">Feedbacks</h2>
        <hr  style="margin-left: auto; margin-right: auto;" size="5" width="50%">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <img class="feedback-img" src="img/bloodhome2.png" width="100%" height="auto" alt="" srcset="">
                    </div>
                    <div class="col-md-9">
                        <p style="margin-bottom: 0;">So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves.</p>
                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <img class="feedback-img" src="img/bloodhome2.png" width="100%" height="auto" alt="" srcset="">
                    </div>
                    <div class="col-md-9">
                        <p style="margin-bottom: 0;">So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves.</p>
                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <img class="feedback-img" src="img/bloodhome2.png" width="100%" height="auto" alt="" srcset="">
                    </div>
                    <div class="col-md-9">
                        <p style="margin-bottom: 0;">So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves.</p>
                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </div>
                </div>
            </div>  <div class="col-md-6 mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <img class="feedback-img" src="img/bloodhome2.png" width="100%" height="auto" alt="" srcset="">
                    </div>
                    <div class="col-md-9">
                        <p style="margin-bottom: 0;">So we me unknown as improve hastily sitting forming. Especially favourable compliment but thoroughly unreserved saw she themselves.</p>
                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- 
    <div class="container shadow mt-5">
    <h2 class="text-center mt-3">News Updates</h2>
    <hr  style="margin-left: auto; margin-right: auto;" size="5" width="50%">
    <div class="row">
        <div class="col-md-4 news-shadow p-0">
            <div class="news-card m-2">
                <img src="img/blog-grid.jpg" alt="">
                <p class="mt-2 mb-0">Posted By Dinesh Wayaman</p>
                <p class="mb-2">2022-01-30</p>
               <a href=""><h4 id="title">Subjects to ecstatic children up as built match gravida</h4></a> 
                <p class="lines">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
            </div>
        </div>
        <div class="col-md-4 news-shadow p-0">
            <div class="news-card m-2">
                <img src="img/blog-grid.jpg" alt="">
                <p class="mt-2 mb-0">Posted By Dinesh Wayaman</p>
                <p class="mb-2">2022-01-30</p>
               <a href=""><h4 id="title">Subjects to ecstatic children up as built match gravida</h4></a> 
                <p class="lines">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
            </div>
        </div>
        <div class="col-md-4 news-shadow p-0">
            <div class="news-card m-2">
                <img src="img/blog-grid.jpg" alt="">
                <p class="mt-2 mb-0">Posted By Dinesh Wayaman</p>
                <p class="mb-2">2022-01-30</p>
               <a href=""><h4 id="title">Subjects to ecstatic children up as built match gravida</h4></a> 
                <p class="lines">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
            </div>
        </div>
    </div>
        <div style="width: 100%;" class="text-center mt-2">
            <button class="btn btn-danger mb-2">View More</button>
        </div>
    </div> -->




    <div class="container shadow mt-5">
    <h2 class="text-center mt-3">Our Blog</h2>
    <hr  style="margin-left: auto; margin-right: auto;" size="5" width="50%">
    <div class="row">
        <div class="col-md-4 news-shadow p-0">
            <div class="news-card m-2">
                <img src="img/blog-grid.jpg" alt="">
                <p class="mt-2 mb-0">Posted By Dinesh Wayaman</p>
                <p class="mb-2">2022-01-30</p>
               <a href=""><h4 id="title">Subjects to ecstatic children up as built match gravida</h4></a> 
                <p class="lines">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
            </div>
        </div>
        <div class="col-md-4 news-shadow p-0">
            <div class="news-card m-2">
                <img src="img/blog-grid.jpg" alt="">
                <p class="mt-2 mb-0">Posted By Dinesh Wayaman</p>
                <p class="mb-2">2022-01-30</p>
               <a href=""><h4 id="title">Subjects to ecstatic children up as built match gravida</h4></a> 
                <p class="lines">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
            </div>
        </div>
        <div class="col-md-4 news-shadow p-0">
            <div class="news-card m-2">
                <img src="img/blog-grid.jpg" alt="">
                <p class="mt-2 mb-0">Posted By Dinesh Wayaman</p>
                <p class="mb-2">2022-01-30</p>
               <a href=""><h4 id="title">Subjects to ecstatic children up as built match gravida</h4></a> 
                <p class="lines">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
            </div>
        </div>
    </div>
        <div style="width: 100%;" class="text-center mt-2">
            <button class="btn btn-danger mb-2">View More</button>
        </div>
    </div>




    </div>



    <?php

    if (isset($_SESSION['bloodme_uid'])) {
  
      }else{
        include('includes/forms/donationrules.php');
    }
    
    ?>
    
    <?php include('includes/models.php') ?>

    <?php include('includes/footer.php') ?>


     
   <script>
       const popupModel = document.querySelector('.subModel');
       const closeModel = document.querySelector('.close-model');
        const acceptModel = document.querySelector('.accept-model');
        window.onload = function(){
        setTimeout(function(){
        popupModel.style.display = "block";
        
    }, 3000)

    }

    closeModel.addEventListener('click', () =>{
        popupModel.style.display = "none";
    }); 

    acceptModel.addEventListener('click', () =>{
        popupModel.style.display = "none";
    });



    

   </script>
    
</body>
</html>