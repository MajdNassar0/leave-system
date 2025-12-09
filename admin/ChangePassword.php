<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
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
        <p class="form-label text-uppercase">Change Password</p>
        <div class="cart">
          <label class="input-label">Current Password</label>
          <input type="text" minlength="0" maxlength="40">

          <label class="input-label">New Password</label>
          <input type="text" minlength="0" maxlength="500">

          <label class="input-label">Confirm Password</label>
          <input type="text" minlength="0" maxlength="500">

          <button class="btn-view w-25">CHANGE</button>
        </div>

      </div>
    </section>
    </main>
     <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script> 
</body>
</html>