<?php

include('../../config/dbconfig.php');

$postID = $_GET['bid'];
$deactive = 0;

    $deactivePost = "UPDATE blog SET b_status=? WHERE b_id='$postID'";
    $deactivatePostQuery = $conn->prepare($deactivePost);
    $deactivatePostQuery->execute(array($deactive));

    if ($deactivatePostQuery) {
        $_SESSION['success_msg'] = "Blog Deactivate Successfully Completed.";
         header('location: ../blogs.php');
    }else{
        $_SESSION['error_msg'] = "Error while proccessing. Please try again.";
         header('location: ../blogs.php');
    }