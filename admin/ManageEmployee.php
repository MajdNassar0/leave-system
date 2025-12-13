<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0){
    header('location:index.php');
}

// DELETE EMPLOYEE
if (isset($_GET['delid'])) {
    $id = intval($_GET['delid']);

    $sql = "DELETE FROM tblemployees WHERE id = :id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();

    echo "<script>alert('تم حذف الموظف بنجاح');</script>";
    echo "<script>window.location.href='ManageEmployee.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

<title>Manage Employees</title>

<style>
    .table-box {
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }
    .table-title {
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 20px;
    }
    .status-active { color: #28a745; font-weight: 600; }
    .status-inactive { color: #dc3545; font-weight: 600; }
    .action-icon {
        font-size: 18px;
        margin-right: 10px;
        cursor: pointer;
    }
    .action-edit { color: #0d6efd; }
    .action-delete { color: #dc3545; }
    .action-activate { color: #198754; }
</style>

</head>

<body>

<!-- Header -->
<?php include('includes/header.php'); ?>

<div class="wrapper d-flex">

    <!-- Sidebar -->
    <?php include('includes/sidebar.php'); ?>

    <!-- Content -->
    <div class="content flex-grow-1 p-4">

        <h4 class="mt-5 p-5">Manage Employees</h4>

        <div class="table-box">

            <h5 class="table-title">Employees Info</h5>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Emp Id</th>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Reg Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $sql = "SELECT * FROM tblemployees ORDER BY id DESC";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;

                    if($query->rowCount() > 0){
                        foreach($results as $row){
                    ?>
                        <tr>
                            <td><?= $cnt ?></td>
                            <td><?= htmlentities($row->EmpId) ?></td>
                            <td><?= htmlentities($row->FirstName . ' ' . $row->LastName) ?></td>
                            <td><?= htmlentities($row->Department) ?></td>

                            <td>
                                <?php if($row->Status == 1){ ?>
                                    <span class="status-active">ACTIVE</span>
                                <?php } else { ?>
                                    <span class="status-inactive">INACTIVE</span>
                                <?php } ?>
                            </td>

                            <td><?= htmlentities($row->RegDate) ?></td>

                            <td>
                                <!-- Edit -->
                                <a href="editemployee.php?empid=<?= $row->id ?>">
                                    <i class="fa-solid fa-pen action-icon action-edit"></i>
                                </a>

                                <!-- DELETE -->
                                <a href="ManageEmployee.php?delid=<?= $row->id ?>"
                                   onclick="return confirm('هل تريد حذف هذا الموظف نهائياً؟');">
                                    <i class="fa-solid fa-xmark action-icon action-delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php $cnt++; }} ?>
                    </tbody>

                </table>
            </div>

        </div>

    </div><!-- END CONTENT -->

</div><!-- WRAPPER -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>
