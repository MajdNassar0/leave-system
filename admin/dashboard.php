<?php
session_start();
include('includes/config.php');

// لو مش عامل لوج إن
if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"/>
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
    <!-- css  -->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <title>Dashboard</title>
  </head>

  <body>
    <!-- header -->
    <?php include('includes/header.php'); ?>

    <main>
  <section>


      <!-- Sidebar -->
      <?php include('includes/sidebar.php'); ?>

      <!-- Main Content -->
      <div class="content flex-grow-1">

        <div class="da row g-3">

          <!-- Total Registered Employees -->
          <div class="col-lg-4 col-md-6">
            <div class="card card-box p-3 shadow-sm">
              <h6>TOTAL REGD EMPLOYEE</h6>
              <h3>
                <?php
                $sql = "SELECT id FROM tblemployees";
                $query = $dbh->prepare($sql);
                $query->execute();
                echo $query->rowCount();
                ?>
              </h3>
            </div>
          </div>

          <!-- Listed Departments -->
          <div class="col-lg-4 col-md-6">
            <div class="card card-box p-3 shadow-sm">
              <h6>LISTED DEPARTMENTS</h6>
              <h3>
                <?php
                $sql = "SELECT id FROM tbldepartments";
                $query = $dbh->prepare($sql);
                $query->execute();
                echo $query->rowCount();
                ?>
              </h3>
            </div>
          </div>

          <!-- Listed Leave Type -->
          <div class="col-lg-4 col-md-6">
            <div class="card card-box p-3 shadow-sm">
              <h6>LISTED LEAVE TYPE</h6>
              <h3>
                <?php
                $sql = "SELECT id FROM tblleavetype";
                $query = $dbh->prepare($sql);
                $query->execute();
                echo $query->rowCount();
                ?>
              </h3>
            </div>
          </div>

          <!-- Total Leaves -->
          <div class="col-lg-4 col-md-6">
            <div class="card card-box p-3 shadow-sm">
              <h6>TOTAL LEAVES</h6>
              <h3>
                <?php
                $sql = "SELECT id FROM tblleaves";
                $query = $dbh->prepare($sql);
                $query->execute();
                echo $query->rowCount();
                ?>
              </h3>
            </div>
          </div>

          <!-- Approved Leaves -->
          <div class="col-lg-4 col-md-6">
            <div class="card card-box p-3 shadow-sm">
              <h6>APPROVED LEAVES</h6>
              <h3>
                <?php
                $sql = "SELECT id FROM tblleaves WHERE Status=1";
                $query = $dbh->prepare($sql);
                $query->execute();
                echo $query->rowCount();
                ?>
              </h3>
            </div>
          </div>

          <!-- New Leave Applications -->
          <div class="col-lg-4 col-md-6">
            <div class="card card-box p-3 shadow-sm">
              <h6>NEW LEAVE APPLICATIONS</h6>
              <h3>
                <?php
                $sql = "SELECT id FROM tblleaves WHERE Status=0";
                $query = $dbh->prepare($sql);
                $query->execute();
                echo $query->rowCount();
                ?>
              </h3>
            </div>
          </div>

        </div> 

      </div> 


  </section>
</main>

    
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


