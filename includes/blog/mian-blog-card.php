
<?php
  $getLastPost = "SELECT * FROM `blog` WHERE `b_status`='1' ORDER BY `b_id` DESC LIMIT 3";
    $getPost = $conn->prepare($getLastPost);
    $getPost->execute();
    $postrow = $getPost->rowCount();
    
    if ($postrow>0) {
         while ($postfetch = $getPost->fetch()) {
                

        ?>
  
<div class="col-md-4 main-blog-post m-0 p-0" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">

<img src="<?php echo $postfetch['b_img'] ?>" alt="" width="100%" height="330px">
            <div class="m-2 main-post">
            <a href="http://localhost/blood<?php echo $postfetch['b_slug'] ?>"><h4 class="p-1"><?php echo $postfetch['b_title'] ?></h4></a>
            <p class="lines p-1"><?php echo $postfetch['b_metadesc'] ?></p>
                <!-- <div class="row d-flex justify-content-between">
                    <div class="col-md-4">
                     <p><?php echo $postfetch['b_date'] ?></p> 
                    </div>
                    <div class="col-md-1">
                    <p><a href=""><i class="fas fa-share"></i></a></p>
                    </div>
                </div> -->
             </div>
</div>
        <?php
           }
        }
        ?>


<!-- Slug URL -->

<!-- https://www.youtube.com/watch?v=1zK14nhwoes -->