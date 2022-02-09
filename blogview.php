<?php 
include('config/dbconfig.php');

$url =$_SERVER['PATH_INFO'];
// echo $url;
$checkPost = "SELECT * FROM `blog` WHERE `b_slug`=?";
$getPost = $conn->prepare($checkPost);
$getPost->execute(array($url));
$postrow = $getPost->rowCount();
while ($postfetch = $getPost->fetch()) {
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

    <title><?php echo $postfetch['b_title'] ?></title>
</head>
<body>

<?php include('includes/main-navbar.php') ?>

    <div class="container-fluid">

        <div class="container mt-4 blog-container">
            <h1 class="text-center"><?php echo $postfetch['b_title'] ?></h1>
            <img src="<?php echo $postfetch['b_img'] ?>" alt="" width="100%">
            <p class="mt-2 blog-content"><?php echo $postfetch['b_content'] ?></p>
        </div>

    </div>
   
    <?php include('includes/models.php') ?>

<?php include('includes/footer.php') ?>


</body>
</html>

<?php 
}
?>