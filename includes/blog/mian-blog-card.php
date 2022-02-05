
<?php
  $getLastPost = "SELECT * FROM `blog` ORDER BY `b_id` DESC LIMIT 1";
    $getPost = $conn->prepare($getLastPost);
    $getPost->execute();
    $postrow = $getPost->rowCount();
    
    if ($postrow>0) {
         while ($postfetch = $getPost->fetch()) {
                

        ?>

<img src="<?php echo $postfetch['b_img'] ?>" alt="" width="100%" height="330px">
            <div class="m-2 main-post">
            <a href="http://localhost/blood/blog/<?php echo $postfetch['b_slug'] ?>"><h3><?php echo $postfetch['b_title'] ?></h3></a>
            <p class="lines">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-3">
                     <p>2021-02-12</p> 
                    </div>
                    <div class="col-md-1">
                    <p><a href=""><i class="fas fa-share"></i></a></p>
                    </div>
                </div>
             </div>

        <?php
           }
        }
        ?>


<!-- Slug URL -->

<!-- https://www.youtube.com/watch?v=1zK14nhwoes -->