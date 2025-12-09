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

    <div class="wrapper d-flex">

      <!-- Sidebar -->
      <?php include('includes/sidebar.php'); ?>

      <!-- Main Content -->
      <div class="content flex-grow-1">

        <div class="row g-3">

          <!-- Total Registered Employees -->
          <div class="col-lg-4 col-md-6">
            <div class="card card-box p-3 shadow-sm">
              <h6>TOTAL REGD EMPLOYEE</h6>
              <h3>
                <?php
                $sql = "SELECT id FROM tblemployees";
                $query = $dbh->prepare($sql);
                $query->execute();
                echo htmlentities($query->rowCount());
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
                echo htmlentities($query->rowCount());
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
                echo htmlentities($query->rowCount());
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
                echo htmlentities($query->rowCount());
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
                echo htmlentities($query->rowCount());
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
                echo htmlentities($query->rowCount());
                ?>
              </h3>
            </div>
          </div>

        </div> <!-- row -->

        <!-- Latest Leaves Table -->
        <div class="table-box mt-4">
          <h4 class="table-title">LATEST LEAVE APPLICATIONS</h4>

          <div class="table-responsive">
            <table class="custom-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Employee Name</th>
                  <th>Leave Type</th>
                  <th>Posting Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $sql = "SELECT tblleaves.id as lid, tblemployees.FirstName,
                        tblemployees.LastName, tblemployees.EmpId, tblemployees.id,
                        tblleaves.LeaveType, tblleaves.PostingDate, tblleaves.Status
                        FROM tblleaves
                        JOIN tblemployees ON tblleaves.empid=tblemployees.id
                        ORDER BY lid DESC LIMIT 6";

                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;

                if($query->rowCount() > 0){
                  foreach($results as $result){
                ?>
                <tr>
                  <td><?php echo htmlentities($cnt); ?></td>

                  <td>
                    <?php echo htmlentities($result->FirstName . " " . $result->LastName); ?>
                    (<?php echo htmlentities($result->EmpId); ?>)
                  </td>

                  <td><?php echo htmlentities($result->LeaveType); ?></td>
                  <td><?php echo htmlentities($result->PostingDate); ?></td>

                  <td>
                    <?php 
                    if($result->Status==1){
                      echo '<span class="approved">Approved</span>';
                    } elseif($result->Status==2){
                      echo '<span class="rejected">Not Approved</span>';
                    } else {
                      echo '<span class="pending">Waiting</span>';
                    }
                    ?>
                  </td>

                  <td>
                    <a class="btn-view" 
                       href="leave-details.php?leaveid=<?php echo htmlentities($result->lid); ?>">
                      VIEW DETAILS
                    </a>
                  </td>
                </tr>
                <?php $cnt++; }} ?>
              </tbody>
            </table>
          </div>
        </div>

      </div> <!-- end content -->

    </div> <!-- end wrapper -->

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


