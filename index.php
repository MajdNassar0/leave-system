<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Leave System</title>
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
    <link rel="stylesheet" href="./assets/css/main.css" />
  </head>
  <body>

     <?php
        include 'includes/head.php';
                  
         
        ?>

    <!-- main log-in -->
    <main>
      <div class="container-fluid">
  <div class="row">

    <!-- SIDE NAV -->
    <div class="col-md-2 side-nav">
      <div class="side-nav-wrapper">
        <ul class="sidebar-menu collapsible collapsible-accordion">
          <li class="no-padding" style=" background: #64888d71;">
            <i class="fa-regular fa-user"></i>
            <a href="index.php" style=" color: #000000ff;">Employee Login</a>
          </li>

          <li class="no-padding">
            <i class="fa-solid fa-user-tie"></i>
            <a href="./admin/index.php" style=" color: #000000ff;">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="col-md-10 mainContent">

      <div class="page-title text-center p-2 m-3">
        <h4>Welcome to Employee Leave Management System</h4>
      </div>

      <div class="card white darken-1">
        <div class="card-content">
          <span class="card-title" style="font-size: 20px">Employee Login</span>

          <form class="col" name="signin" method="post">
            <div class="input-field">
              <label for="username">Email Id :</label>
              <input id="username" type="text" name="username" placeholder="Enter your email" required />
            </div>

            <div class="input-field">
              <label for="password">Password :</label>
              <input id="password" type="password" name="password" placeholder="Enter your password" required />
            </div>

            <div class="right-align m-t-sm">
              
              <input type="submit" name="signin" value="Sign in" class="waves-effect waves-light btn teal text-white" />
            </div>
          </form>

        </div>
      </div>

    </div>

  </div>
</div>

    </main>

    <!-- bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <!-- JS -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>
