<?php
session_start();
include('includes/config.php');

if (isset($_POST['signin'])) {

    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT UserName, Password 
            FROM admin 
            WHERE UserName = :uname 
              AND Password = :password";

    $query = $dbh->prepare($sql);
    $query->bindParam(':uname', $uname, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_OBJ);

    if ($user) {
        $_SESSION['alogin'] = $user->UserName;

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


    <link rel="stylesheet" href="../assets/css/main.css" />
    <title>Leave System</title>
  </head>
  <body>
         
   
    <div
      class="loginPage  col-md-12 d-flex flex-wrap flex-column justify-content-center align-items-center" style="background-image: url('../assets/img/Network.jpeg');"
    >
      <div>
        <h3 style="color: #4c4b4cff">Employee Leave Management System </h3>
        <h3 style="color: #4c4b4cff">Admin Login</h3>
      </div>
      <div class="login d-flex flex-wrap flex-column gap-4 p-4">
        <h4 style="color: #8b868b">SIGN IN</h4>

          <form action="" method="POST">
            <input type="text" placeholder="Username" name="username" />
            <input type="password" placeholder="Password" name="password" />
            <input type="submit" value="SIGN IN" name="signin" class="waves-effect waves-light btn teal text-white" />
          </form>

      </div>
    </div>
        <!-- bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
        <!-- JS -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>