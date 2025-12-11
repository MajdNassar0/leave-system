<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0){
    header('location:index.php');
    exit;
}

// =============================
// 1️⃣ جلب بيانات الموظف
// =============================
$empid = intval($_GET['empid']);

$sql  = "SELECT * FROM tblemployees WHERE id = :id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $empid, PDO::PARAM_INT);
$query->execute();
$employee = $query->fetch(PDO::FETCH_OBJ);

if(!$employee){
    echo "<script>alert('Employee not found');window.location='ManageEmployee.php';</script>";
    exit;
}

// =============================
// 2️⃣ تحديث الموظف
// =============================
if(isset($_POST['update'])){

    $EmployeeCode = $_POST['employeeCode'];
    $Gender       = $_POST['gender'];
    $Birthdate    = $_POST['birthdate'];
    $FirstName    = $_POST['firstName'];
    $LastName     = $_POST['lastName'];
    $Department   = $_POST['department'];
    $Address      = $_POST['address'];
    $Email        = $_POST['email'];
    $City         = $_POST['city'];
    $Country      = $_POST['country'];
    $Mobile       = $_POST['mobile'];

    $sql = "UPDATE tblemployees SET
            EmpId       = :emp,
            FirstName   = :fname,
            LastName    = :lname,
            EmailId     = :email,
            Gender      = :gender,
            Dob         = :dob,
            Department  = :dept,
            Address     = :address,
            City        = :city,
            Country     = :country,
            Phonenumber = :mobile
        WHERE id = :id";

    $query = $dbh->prepare($sql);

    $query->bindParam(':emp',      $EmployeeCode);
    $query->bindParam(':fname',    $FirstName);
    $query->bindParam(':lname',    $LastName);
    $query->bindParam(':email',    $Email);
    $query->bindParam(':gender',   $Gender);
    $query->bindParam(':dob',      $Birthdate);
    $query->bindParam(':dept',     $Department);
    $query->bindParam(':address',  $Address);
    $query->bindParam(':city',     $City);
    $query->bindParam(':country',  $Country);
    $query->bindParam(':mobile',   $Mobile);
    $query->bindParam(':id',       $empid);

    if($query->execute()){
        echo "<script>alert('Employee updated successfully');</script>";
        echo "<script>window.location.href='ManageEmployee.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Employee Info</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="../assets/css/main.css"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>

<?php include('includes/header.php'); ?>

<div class="wrapper d-flex">

<?php include('includes/sidebar.php'); ?>

<div class="content flex-grow-1 p-4">

<h3 class="m-5 p-3">Update Employee Info</h3>

<div class="bg-white p-4 rounded shadow">

<form method="POST">

<div class="row">

    <div class="col-md-4 mb-3">
        <label>Employee Code</label>
        <input type="text" name="employeeCode" value="<?= $employee->EmpId ?>" class="form-control" required>
    </div>

    <div class="col-md-4 mb-3">
        <label>Gender</label>
        <select name="gender" class="form-control">
            <option value="Male"   <?= $employee->Gender == "Male" ? "selected" : "" ?>>Male</option>
            <option value="Female" <?= $employee->Gender == "Female" ? "selected" : "" ?>>Female</option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label>Date of Birth</label>
        <input type="date" name="birthdate" value="<?= $employee->Dob ?>" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>First Name</label>
        <input type="text" name="firstName" value="<?= $employee->FirstName ?>" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Last Name</label>
        <input type="text" name="lastName" value="<?= $employee->LastName ?>" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?= $employee->EmailId ?>" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Department</label>
        <select name="department" class="form-control">
            <option <?= $employee->Department == "IT" ? "selected" : "" ?>>IT</option>
            <option <?= $employee->Department == "Accounts" ? "selected" : "" ?>>Accounts</option>
            <option <?= $employee->Department == "Admin" ? "selected" : "" ?>>Admin</option>
        </select>
    </div>

    <div class="col-md-12 mb-3">
        <label>Address</label>
        <input type="text" name="address" value="<?= $employee->Address ?>" class="form-control">
    </div>

    <div class="col-md-4 mb-3">
        <label>City/Town</label>
        <input type="text" name="city" value="<?= $employee->City ?>" class="form-control">
    </div>

    <div class="col-md-4 mb-3">
        <label>Country</label>
        <input type="text" name="country" value="<?= $employee->Country ?>" class="form-control">
    </div>

    <div class="col-md-4 mb-3">
        <label>Mobile</label>
        <input type="text" name="mobile" value="<?= $employee->Phonenumber ?>" class="form-control">
    </div>

</div>

<button type="submit" name="update" class="btn btn-primary px-4">UPDATE</button>

</form>

</div>

</div>

</div>

</body>
</html>
