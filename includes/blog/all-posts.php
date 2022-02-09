
<?php
  $getLastPost = "SELECT * FROM `blog` WHERE `b_status`='1' ORDER BY `b_id` DESC";
    $getPost = $conn->prepare($getLastPost);
    $getPost->execute();
    $postrow = $getPost->rowCount();
    
    if ($postrow>0) {
         while ($postfetch = $getPost->fetch()) {
                

        ?>

<div class="col-md-3  p-3" >
                <div class="main-blog-card shadow">
                    <img src="<?php echo $postfetch['b_img'] ?>" width="100%" alt="">
                    <p class="m-0"><i class="fas fa-calendar" aria-hidden="true"></i> <?php echo $postfetch['b_date'] ?></p>
                    <a href="http://localhost/blood<?php echo $postfetch['b_slug'] ?>" ><h6 class="lines-2"><?php echo $postfetch['b_title'] ?></h6></a>
                    <p class="lines-2 mb-1"><?php echo $postfetch['b_metadesc'] ?></p>
                    <a href="http://localhost/blood<?php echo $postfetch['b_slug'] ?>"><p class="text-center read-hover m-0" style="font-size: 18px;">Read more</p></a>
                </div>
            </div>


            <?php
           }
        }
        ?>
