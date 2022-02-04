<?php
session_start();
unset($_SESSION['bloodme_uid']);
unset($_SESSION['bloodme_uname']);
header('location: ../index.php');