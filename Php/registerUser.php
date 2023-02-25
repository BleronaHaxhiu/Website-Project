<?php
require_once("UserCrudModel.php");
if (isset($_POST['submit'])) {

    if (empty($errors)) {
        $userModel = new UserCrudModel();
        $userModel->setName($_POST['username']);
        $userModel->setEmail($_POST['email']);
        $userModel->setPassword($_POST['password']);
        $userModel->setRole('user');

        $userModel->insert();
    }else {
        echo "<script>alert('Given data is not valid');</script>";
        echo "<script>window.location.href = '../login.php';</script>";
    }
}
