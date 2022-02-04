<?php 
session_start();
include('dbconfig.php');

if (isset($_POST['userregister'])) {
    $userName = $_POST['name'];
    $userPassword = $_POST['password'];
    $userEmail = $_POST['email'];
    $userBday = $_POST['bday'];
    $userFacebook = $_POST['facebook'];
    $userPhone = $_POST['phone'];
    $userAddress = $_POST['address'];
    $userTown = $_POST['town'];
    $userBgroup = $_POST['group'];
    

    if (isset($_POST['privacy'])) {
        if ($userEmail==null && $userPhone==null && $userFacebook==null) {
            $_SESSION['error_msg'] = "You should enter at least 1 contact methode.(Phone number/Email/Facebook Profile Link)";
            header('location: ../index.php');
        }
        elseif ($userBgroup=='not') {
            $_SESSION['error_msg'] = "You Should select your bloog group.";
            header('location: ../index.php');
        }elseif($userBday==null){
            $_SESSION['error_msg'] = "You Should enter your birthday.";
            header('location: ../index.php');
        }elseif ($userTown==null) {
            $_SESSION['error_msg'] = "You Should enter your town.";
            header('location: ../index.php');
        }  
        else{
            $insertUser = "INSERT INTO users(u_name, u_password, u_town, u_email, u_telephone, u_address, u_blood_group, u_birth_day, u_facebook_link)  
            VALUES (?,?,?,?,?,?,?,?,?)";
            $insertQuery = $conn->prepare($insertUser);
            $insertQuery->execute(array($userName,$userPassword,$userTown,$userEmail,$userPhone,$userAddress,$userBgroup,$userBday,$userFacebook));
        
            if ($insertQuery) {
                $_SESSION['success_msg'] = "Registration Successfully Completed. You can log in now.";
                 header('location: ../index.php');
            }else{
                $_SESSION['error_msg'] = "Error while proccessing. Please try again.";
                 header('location: ../index.php');
            }
        }    
    }else{
        $_SESSION['error_msg'] = "You should check privacy tick.";
        header('location: ../index.php');
    }

}


if (isset($_POST['login'])) {
    $userName = $_POST['username'];
    $userPassword = $_POST['password'];

    $checkUser = "SELECT * FROM `users` WHERE `u_name`=? AND `u_password`=?";
    $getUser = $conn->prepare($checkUser);
    $getUser->execute(array($userName,$userPassword));
    $userrow = $getUser->rowCount();
    $userfetch = $getUser->fetch();
    if ($userrow>0) {
        $_SESSION['bloodme_uid'] = $userfetch['u_id'];
        $_SESSION['bloodme_uname'] = $userfetch['u_name'];
        $_SESSION['success_msg'] = "Login Successfully Completed.";
        header('location: ../index.php');
    }else{
        $_SESSION['error_msg'] = "Sorry, that user name or password is incorrect. Please try again.";
        header('location: ../index.php');
    }
}

if (isset($_POST['searchDonor'])) {
    $searchTown = $_POST['city'];
    $searchBgroup = $_POST['bgroup'];

    $searchDonors = "SELECT * FROM `users` WHERE `u_town` LIKE '%".$searchTown."%' AND `u_blood_group`='$searchBgroup'";
    $searchUser = $conn->prepare($searchDonors);
    $searchUser->execute();
    $searchuserrow = $searchUser->rowCount();

    if ($searchuserrow>0) {
        while($searchuserfetch = $searchUser->fetch()){
            echo $searchuserfetch['u_name'];
            
        }
    }else{
        echo 'No records found';
    }
}