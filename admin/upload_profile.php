<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['alogin']) == 0){
    header('location:index.php');
    exit();
}

if(isset($_FILES['profile_image'])){

    $errors = [];

    $file_name = $_FILES['profile_image']['name'];
    $file_size = $_FILES['profile_image']['size'];
    $file_tmp  = $_FILES['profile_image']['tmp_name'];

    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed  = ['jpg','jpeg','png'];

    if(!in_array($file_ext, $allowed)){
        $errors[] = "نوع الملف غير مسموح";
    }

    if($file_size > 2097152){
        $errors[] = "حجم الصورة يجب أن يكون أقل من 2MB";
    }

    if(empty($errors)){
        $new_name = 'admin_' . time() . '.' . $file_ext;
        $path = '../uploads/' . $new_name;

        move_uploaded_file($file_tmp, $path);

        $_SESSION['admin_image'] = $new_name;

        header("Location: dashboard.php");
        exit();
    }
}
