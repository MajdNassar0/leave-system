<!-- مش معدل هاد فقط شغل بهية -->
<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <!-- css  -->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <title>Add Department</title>
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
      <!-- Main content -->
      <div class="content">
        <p>Manage Departments</p>
        <!--  table  -->
        <div class="table-box">
          <!--  table title  -->
          <h4 class="table-title text-uppercase">Departments Info</h4>
            <div class="table-responsive">
             <!-- Show work -->
            <div class="d-flex flex-column">
              <div><span>Show</span></div>
              <div class="d-flex flex-row align-items-center justify-content-between">
                <select>
                  <option value="10" selected>10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="50">100</option>
                </select>
                <input type="text" placeholder="Search records" class="w-25">
              </div>
            </div>
            <table >
            <thead>
              <tr>
                <th  width="100px">Sr no</th>
                <th  width="250px">Dept Name</th>
                <th  width="200px">Dept Short Name</th>
                <th  width="200px">Dept Code</th>
                <th  width="200px">Creation Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Human Resource</td>
                <td>HR</td>
                <td>HR01</td>
                <td>2023-08-31 17:50:20</td>
                <td><button onclick="editRow(this)" class="border-0 text-info bg-white"><i class="fa-solid fa-pen"></i></button> <button onclick="deleteRow(this)"  class="border-0 text-info bg-white"><i class="fa-regular fa-trash-can"></i></button></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Information Technology</td>
                <td>IT</td>
                <td>IT01</td>
                <td>2023-08-31 17:50:56</td>
                <td><button onclick="editRow(this)" class="border-0 text-info bg-white"><i class="fa-solid fa-pen"></i></button> <button onclick="deleteRow(this)"  class="border-0 text-info bg-white"><i class="fa-regular fa-trash-can"></i></button></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Accounts</td>
                <td>Accounts</td>
                <td>ACCNT01</td>
                <td>2023-08-31 17:51:26</td>
                <td><button onclick="editRow(this)" class="border-0 text-info bg-white"><i class="fa-solid fa-pen"></i></button> <button onclick="deleteRow(this)"  class="border-0 text-info bg-white"><i class="fa-regular fa-trash-can"></i></button></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Admin</td>
                <td>Admin</td>
                <td>ADMN01</td>
                <td>2023-09-01 14:35:50</td>
                <td><button onclick="editRow(this)" class="border-0 text-info bg-white"><i class="fa-solid fa-pen"></i></button> <button onclick="deleteRow(this)"  class="border-0 text-info bg-white"><i class="fa-regular fa-trash-can"></i></button></td>
              </tr>
            </tbody>
          </table>
          </div>
          
        </div>
      </div>
    </section>
  </main>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>