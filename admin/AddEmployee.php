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

      <div class="content">
        <p class="form-label text-uppercase">Add employee</p>
        <div class="cart bg-white w-100">
          <h2>Employee Info</h2>
          <form action="#" method="POST">
            <div class="row">
              <div class="form-group w-50">
                <label for="employeeCode">Employee Code (Must be unique)</label>
                <input type="text" id="employeeCode" name="employeeCode" required>
              </div>

              <div class="form-group w-25">
                <select id="gender" name="gender" class="p-1 pe-5 m-4" >
                  <option value="" disabled selected>Gender..</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="form-group w-25">
                <input type="date" id="birthdate" name="birthdate "  placeholder="Birthdate.." class="p-1 pe-5 m-4">
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
                <select id="department" class="p-1 pe-5 m-4" >
                  <option disabled selected>Department..</option>
                  <option value="IT">IT </option>
                  <option value="accounts">accounts</option>
                  <option value="admin">admin</option>
                </select>
              </div>


              <div class="form-group w-25">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
              </div>

              <div class="form-group w-50 d-flex flex-column">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="border-top-0 border-start-0 border-end-0 " required style="border-bottom-color: #ccc;">

              </div>


              <div class="form-group w-25">
                <label for="city ">City/Town</label>
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
            <button type="submit" class="btn w-auto px-5 btn-view">ADD</button>
          </form>
        </div>

      </div>

    </section>
  </main>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>