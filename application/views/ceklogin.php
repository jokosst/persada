<?php
if (!isset($_SESSION['password']) || empty($_SESSION['password'])) {
    //redirect ke halaman login
   redirect('welcome/login');
}
?>