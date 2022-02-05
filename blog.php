<?php
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

    <title>BloodMe | Blog</title>
</head>
<body>

<?php include('includes/main-navbar.php') ?>

<div class="container-fluid">

    <div class="container mt-4">
    <div class="row">
        <div class="col-md-5 shadow main-blog-post m-0">
           <?php include('includes/blog/mian-blog-card.php') ?>
        </div>

        <div class="col-md-7">
            <?php include('includes/blog/recent-posts.php') ?>
        </div>
    </div>

    </div>


    <div class="container mt-4">
        <div class="row g-1">
            <div class="col-md-3  p-3" >
                <div class="main-blog-card shadow">
                    <img src="img/blog-grid.jpg" width="100%" alt="">
                    <p class="m-0"><i class="fas fa-calendar" aria-hidden="true"></i> 2022-02-04</p>
                    <a href="" ><h6 class="lines-2">Subjects to ecstatic children up as built match gravida</h6></a>
                    <p class="lines-2 mb-1">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                    <a href=""><p class="text-center read-hover m-0" style="font-size: 18px;">Read more</p></a>
                </div>
            </div>
            <div class="col-md-3  p-3">
            <div class="main-blog-card shadow">
                    <img src="img/blog-grid.jpg" width="100%" alt="">
                    <p class="m-0"><i class="fas fa-calendar" aria-hidden="true"></i> 2022-02-04</p>
                    <a href="" ><h6 class="lines-2">Subjects to ecstatic children up as built match gravida</h6></a>
                    <p class="lines-2 mb-1">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                    <a href=""><p class="text-center read-hover m-0" style="font-size: 18px;">Read more</p></a>
               </div>
            </div>
            <div class="col-md-3  p-3">
            <div class="main-blog-card shadow">
                    <img src="img/blog-grid.jpg" width="100%" alt="">
                    <p class="m-0"><i class="fas fa-calendar" aria-hidden="true"></i> 2022-02-04</p>
                    <a href="" ><h6 class="lines-2">Subjects to ecstatic children up as built match gravida</h6></a>
                    <p class="lines-2 mb-1">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                    <a href=""><p class="text-center read-hover m-0" style="font-size: 18px;">Read more</p></a>
               </div>
            </div>
            <div class="col-md-3  p-3">
            <div class="main-blog-card shadow">
                    <img src="img/blog-grid.jpg" width="100%" alt="">
                    <p class="m-0"><i class="fas fa-calendar" aria-hidden="true"></i> 2022-02-04</p>
                    <a href="" ><h6 class="lines-2">Subjects to ecstatic children up as built match gravida</h6></a>
                    <p class="lines-2 mb-1">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                    <a href=""><p class="text-center read-hover m-0" style="font-size: 18px;">Read more</p></a>
               </div>
            </div>
            <div class="col-md-3  p-3">
            <div class="main-blog-card shadow">
                    <img src="img/blog-grid.jpg" width="100%" alt="">
                    <p class="m-0"><i class="fas fa-calendar" aria-hidden="true"></i> 2022-02-04</p>
                    <a href="" ><h6 class="lines-2">Subjects to ecstatic children up as built match gravida</h6></a>
                    <p class="lines-2 mb-1">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                    <a href=""><p class="text-center read-hover m-0" style="font-size: 18px;">Read more</p></a>
               </div>
            </div>
            <div class="col-md-3  p-3">
            <div class="main-blog-card shadow">
                    <img src="img/blog-grid.jpg" width="100%" alt="">
                    <p class="m-0"><i class="fas fa-calendar" aria-hidden="true"></i> 2022-02-04</p>
                    <a href="" ><h6 class="lines-2">Subjects to ecstatic children up as built match gravida</h6></a>
                    <p class="lines-2 mb-1">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                    <a href=""><p class="text-center read-hover m-0" style="font-size: 18px;">Read more</p></a>
               </div>
            </div>
            <div class="col-md-3  p-3">
            <div class="main-blog-card shadow">
                    <img src="img/blog-grid.jpg" width="100%" alt="">
                    <p class="m-0"><i class="fas fa-calendar" aria-hidden="true"></i> 2022-02-04</p>
                    <a href="" ><h6 class="lines-2">Subjects to ecstatic children up as built match gravida</h6></a>
                    <p class="lines-2 mb-1">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                    <a href=""><p class="text-center read-hover m-0" style="font-size: 18px;">Read more</p></a>
               </div>
            </div>
        </div>
    </div>



</div>


    <?php include('includes/models.php') ?>

    <?php include('includes/footer.php') ?>

    

</body>
</html>