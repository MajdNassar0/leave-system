<?php
session_start();
include('includes/config.php');

// لو مش عامل تسجيل دخول
if(strlen($_SESSION['alogin'])==0){
    header('location:index.php');
    exit;
}

// عند الضغط على زر إضافة الموظف
if(isset($_POST['submit'])){

    $EmployeeCode   = $_POST['employeeCode'];
    $Gender         = $_POST['gender'];
    $Birthdate      = $_POST['birthdate'];
    $FirstName      = $_POST['firstName'];
    $LastName       = $_POST['lastName'];
    $Department     = $_POST['department'];
    $Address        = $_POST['address'];
    $Email          = $_POST['email'];
    $City           = $_POST['city'];
    $Country        = $_POST['country'];
    $Password       = md5($_POST['password']);
    $ConfirmPassword= md5($_POST['confirmPassword']);
    $Mobile         = $_POST['mobile'];

    // تحقق من مطابقة الباسورد
    if($Password != $ConfirmPassword){
        $error = "Passwords do not match!";
    } else {

        // التأكد من عدم تكرار EmpId
        $check = $dbh->prepare("SELECT EmpId FROM tblemployees WHERE EmpId = :emp");
        $check->bindParam(':emp', $EmployeeCode, PDO::PARAM_STR);
        $check->execute();

        if($check->rowCount() > 0){
            $error = "Employee Code already exists!";
        } else {

            // إدخال البيانات في الجدول
            $sql = "INSERT INTO tblemployees
            (EmpId, FirstName, LastName, EmailId, Password, Gender, Dob, Department, Address, City, Country, Phonenumber, Status)
            VALUES
            (:emp, :fname, :lname, :email, :password, :gender, :dob, :dept, :address, :city, :country, :mobile, 1)";

            $query = $dbh->prepare($sql);

            $query->bindParam(':emp', $EmployeeCode, PDO::PARAM_STR);
            $query->bindParam(':fname', $FirstName, PDO::PARAM_STR);
            $query->bindParam(':lname', $LastName, PDO::PARAM_STR);
            $query->bindParam(':email', $Email, PDO::PARAM_STR);
            $query->bindParam(':password', $Password, PDO::PARAM_STR);
            $query->bindParam(':gender', $Gender, PDO::PARAM_STR);
            $query->bindParam(':dob', $Birthdate, PDO::PARAM_STR);
            $query->bindParam(':dept', $Department, PDO::PARAM_STR);
            $query->bindParam(':address', $Address, PDO::PARAM_STR);
            $query->bindParam(':city', $City, PDO::PARAM_STR);
            $query->bindParam(':country', $Country, PDO::PARAM_STR);
            $query->bindParam(':mobile', $Mobile, PDO::PARAM_STR);

            if($query->execute()){
                $msg = "Employee added successfully!";
            } else {
                $error = "Something went wrong!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <!-- css  -->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <title>Add Employee</title>
</head>

<body>
  <!-- header -->
  <?php include('includes/header.php'); ?>
 
  <main>
    <section>
      <!-- Sidebar -->
      <?php include('includes/sidebar.php'); ?>
    </section>

    <section>
      <div class="content">
        <p class="form-label text-uppercase">Add employee</p>

        <div class="cart bg-white w-100">
          <h2>Employee Info</h2>

          <!-- رسائل الخطأ أو النجاح -->
          <?php if(isset($error)){ ?>
              <div class="alert alert-danger"><?php echo htmlentities($error); ?></div>
          <?php } ?>
          <?php if(isset($msg)){ ?>
              <div class="alert alert-success"><?php echo htmlentities($msg); ?></div>
          <?php } ?>

          <form action="" method="POST">
            <div class="row">

              <div class="form-group w-50">
                <label for="employeeCode">Employee Code (Must be unique)</label>
                <input type="text" id="employeeCode" name="employeeCode" required>
              </div>

              <div class="form-group w-25">
                <select id="gender" name="gender" class="p-1 pe-5 m-4" required>
                  <option value="" disabled selected>Gender..</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>

              <div class="form-group w-25">
                <input type="date" id="birthdate" name="birthdate" class="p-1 pe-5 m-4" required>
              </div>

              <div class="form-group w-25">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
              </div>

              <div class="form-group w-25">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>
              </div>

              <div class="form-group w-25">
                <select id="department" name="department" class="p-1 pe-5 m-4" required>
                  <option disabled selected>Department..</option>
                  <option value="Information Technology">IT</option>
                  <option value="Accounts">Accounts</option>
                  <option value="Admin">Admin</option>
                </select>
              </div>

              <div class="form-group w-25">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
              </div>

              <div class="form-group w-50 d-flex flex-column">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="border-top-0 border-start-0 border-end-0" required>
              </div>

              <div class="form-group w-25">
                <label for="city">City/Town</label>
                <input type="text" id="city" name="city">
              </div>

              <div class="form-group w-25">
                <label for="country">Country</label>
                <input type="text" id="country" name="country">
              </div>

              <div class="form-group w-50">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
              </div>

              <div class="form-group w-50">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile">
              </div>

              <div class="form-group w-50">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
              </div>

            </div>

            <button type="submit" name="submit" class="btn w-auto px-5 btn-view">ADD</button>
          </form>
        </div>

      </div>
    </section>
  </main>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
