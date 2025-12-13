<div class="sidebar p-3">

<div class="img text-center">

    <label for="profileImage" class="profile-upload">
        <img src="../uploads/<?php echo $_SESSION['admin_image'] ?? '../assets/img/image.png'; ?>"
             class="rounded-circle"
             width="120" height="120">
        <div class="upload-overlay">
            <i class="bi bi-camera-fill"></i>
        </div>
    </label>

    <form action="./upload_profile.php" method="post" enctype="multipart/form-data">
        <input type="file"
               name="profile_image"
               id="profileImage"
               hidden
               accept=".jpg,.jpeg,.png"
               onchange="this.form.submit()">
    </form>

</div>




    <div class="mb-3">
        <h5 class=" mt-2 ">Admin</h5>
    </div>

    <div class="menu-item">
        <a href="dashboard.php" class="text-black">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>
    </div>

    <div class="menu-item">
        <a data-bs-toggle="collapse" data-bs-target="#departmentCollapse" role="button"
           aria-expanded="false" aria-controls="departmentCollapse" class="text-black">
            <i class="bi bi-diagram-3 me-2"></i> Department
        </a>

        <div class="collapse" id="departmentCollapse">
            <ul class="list-unstyled ms-3">
                <li><a href="addepartment.php" class="text-black">Add Department</a></li>
                <li><a href="ManageDepartment.php" class="text-black">Manage Department</a></li>
            </ul>
        </div>
    </div>
     <div class="menu-item">
        <a data-bs-toggle="collapse" data-bs-target="#EmployeesCollapse" role="button"
           aria-expanded="false" aria-controls="EmployeesCollapse" class="text-black">
            <i class="bi bi-people me-2"></i> Employees
        </a>

        <div class="collapse" id="EmployeesCollapse">
            <ul class="list-unstyled ms-3">
                <li><a href="AddEmployee.php" class="text-black">Add Employee</a></li>
                <li><a href="ManageEmployee.php" class="text-black">Manage Employee</a></li>
            </ul>
        </div>
    </div>

    <div class="menu-item">
        <a data-bs-toggle="collapse" data-bs-target="#LeaveTypeCollapse" role="button"
           aria-expanded="false" aria-controls="LeaveTypeCollapse" class="text-black">
            <i class="bi bi-tag me-2"></i> Leave Type
        </a>

        <div class="collapse" id="LeaveTypeCollapse">
            <ul class="list-unstyled ms-3">
                <li><a href="AddLeaveType.php" class="text-black">Add Leave Type</a></li>
                <li><a href="#" class="text-black">Manage Leave Type</a></li>
            </ul>
        </div>
    </div>

   

    <div class="menu-item">
        <a data-bs-toggle="collapse" data-bs-target="#LeaveManagementCollapse" role="button"
           aria-expanded="false" aria-controls="LeaveManagementCollapse" class="text-black">
            <i class="bi bi-calendar-check me-2"></i> Leave Management
        </a>

        <div class="collapse" id="LeaveManagementCollapse">
            <ul class="list-unstyled ms-3">
                <li><a href="#" class="text-black">All Leaves</a></li>
                <li><a href="#" class="text-black">Pending Leaves</a></li>
                <li><a href="#" class="text-black">Approved Leaves</a></li>
                <li><a href="#" class="text-black">Not Approved Leaves</a></li>
            </ul>
        </div>
    </div>

    <div class="menu-item">
        <a href="ChangePassword.php" class="text-black">
            <i class="bi bi-key me-2"></i> Change Password
        </a>
    </div>

    <div class="menu-item text-danger mb-2 p-5">
        <a href="../index.php" class="text-black  ">
            <i class="bi bi-box-arrow-right me-2"></i> Sign Out
        </a>
    </div>
</div>
