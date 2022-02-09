 
<?php
  $getLastPost = "SELECT * FROM `blog`  WHERE `b_status`='1' ORDER BY `b_id` DESC LIMIT 4";
    $getPost = $conn->prepare($getLastPost);
    $getPost->execute();
    $postrow = $getPost->rowCount();
    
    if ($postrow>0) {
         while ($postfetch = $getPost->fetch()) {
                

        ?>      



       <div class="row shadow mb-4 mt-2 ">
                <div class="col-md-3" style="margin-left: 0; padding-left: 0; padding-right: 0; margin-right: 0;">
                    <img class="recent-post-img" src="<?php echo $postfetch['b_img'] ?>" width="100%" height="120px" alt="">
                </div>
                <div class="col-md-9 blog-title">
                <a href="http://localhost/blood<?php echo $postfetch['b_slug'] ?>" target="_blank"><h5 class="m-0"><?php echo $postfetch['b_title'] ?></h5></a>
                    <p class="lines-2 m-0"><?php echo $postfetch['b_metadesc'] ?></p>
                     <p style="text-align: right; margin-bottom: 0;"><a href=""><i class="fas fa-share"></i></a></p>
            </div>
         </div>


         <?php
           }
        }
        ?>

         <!-- <div class="row shadow mb-4 ">
                <div class="col-md-3" style="margin-left: 0; padding-left: 0; padding-right: 0; margin-right: 0;">
                    <img class="recent-post-img" src="img/blog-grid.jpg" width="100%" height="120px" alt="">
                </div>
                <div class="col-md-9 blog-title">
                <a href=""><h5 class="m-0">Subjects to ecstatic children up as built match gravida</h5></a>
                    <p class="lines-2 m-0">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                     <p style="text-align: right; margin-bottom: 0;"><a href=""><i class="fas fa-share"></i></a></p>
            </div>
         </div>


         <div class="row shadow mb-4 ">
                <div class="col-md-3" style="margin-left: 0; padding-left: 0; padding-right: 0; margin-right: 0;">
                    <img class="recent-post-img" src="img/blog-grid.jpg" width="100%" height="120px" alt="">
                </div>
                <div class="col-md-9 blog-title">
                <a href=""><h5 class="m-0">Subjects to ecstatic children up as built match gravida</h5></a>
                    <p class="lines-2 m-0">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                     <p style="text-align: right; margin-bottom: 0;"><a href=""><i class="fas fa-share"></i></a></p>
            </div>
         </div>
         <div class="row shadow">
                <div class="col-md-3" style="margin-left: 0; padding-left: 0; padding-right: 0; margin-right: 0;">
                    <img class="recent-post-img" src="img/blog-grid.jpg" width="100%" height="120px" alt="">
                </div>
                <div class="col-md-9 blog-title">
                <a href=""><h5 class="m-0">Subjects to ecstatic children up as built match gravida</h5></a>
                    <p class="lines-2 m-0">Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus.</p>
                     <p style="text-align: right; margin-bottom: 0;"><a href=""><i class="fas fa-share"></i></a></p>
            </div>
         </div>
 -->
