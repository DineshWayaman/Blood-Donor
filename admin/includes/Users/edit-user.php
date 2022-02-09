<?php
    include('../../../config/dbconfig.php');
  $getLastPost = "SELECT MAX(b_id) as last_id FROM `blog`";
  $getPost = $conn->prepare($getLastPost);
  $getPost->execute();
  $postrow = $getPost->rowCount();
  while ($postfetch = $getPost->fetch()) {
   echo $postfetch['last_id'];
  }

// danger color code = #dc3545