
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Employee Dashboard</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/main.css" />



<style>

body {
  background: #f4f7f9;
  font-family: 'Roboto', sans-serif;
}


/* ---------------- DASHBOARD ---------------- */
.dashboard-wrapper {
  padding: 30px;
}

.header-box {
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
}

.header-box img {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  margin-right: 25px;
  border: 3px solid #0d6efd;
}

.header-box h3 {
  font-weight: 600;
  margin-bottom: 5px;
}

.stats-box {
  background: white;
  padding: 22px;
  border-radius: 12px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.07);
  text-align: center;
}

.stats-box i {
  font-size: 32px;
  margin-bottom: 15px;
  color: #0d6efd;
}

.stats-box h4 {
  font-size: 26px;
  font-weight: 600;
}

.section-title {
  font-size: 20px;
  font-weight: 600;
  margin: 25px 0 15px;
}

.card-custom {
  background: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.07);
}

</style>
</head>

<body>

<!-- TOP HEADER -->
    <header>
      <nav class="navbar navbar-custom fixed-top">
        <div class="container-fluid d-flex justify-content-start">
          <div>
            <h5>ELMS | Employee </h5>
          </div>
        </div>
      </nav>
    </header>

  <!-- Profile Box -->
  <div class="header-box m-5 p-5">
    <img src="../assets/img/image.png" alt="">
    <div>
      <h3>Ali Ahmad</h3>
      <p><i class="fa-solid fa-building"></i> IT </p>
      <p><i class="fa-solid fa-envelope"></i> 108077</p>
    </div>
  </div>

  <!-- Stats -->
  <div class="row g-4 mb-4">
    <div class="col-md-3">
      <div class="stats-box">
        <i class="fa-solid fa-calendar-check"></i>
        <h4>12</h4>
        <p>Remaining Leaves</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="stats-box">
        <i class="fa-solid fa-calendar-days"></i>
        <h4>4</h4>
        <p>Used Leaves</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="stats-box">
        <i class="fa-solid fa-check-circle"></i>
        <h4>2</h4>
        <p>Approved</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="stats-box">
        <i class="fa-solid fa-clock"></i>
        <h4>1</h4>
        <p>Pending</p>
      </div>
    </div>
  </div>

  <!-- Notifications -->
  <div class="section-title">Notifications</div>
  <div class="card-custom mb-4">
    <p><i class="fa-solid fa-bell text-warning"></i> Your last leave request was approved.</p>
    <p><i class="fa-solid fa-bell text-info"></i> Your profile was updated successfully.</p>
  </div>

  <!-- Recent Leave Requests -->
  <div class="section-title">Recent Leave Requests</div>
  <div class="card-custom mb-4">
    <table class="table">
      <thead>
        <tr>
          <th>Leave Type</th>
          <th>From</th>
          <th>To</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Annual Leave</td>
          <td>2025-02-10</td>
          <td>2025-02-12</td>
          <td><span class="text-success fw-bold">Approved</span></td>
        </tr>

        <tr>
          <td>Sick Leave</td>
          <td>2025-03-01</td>
          <td>2025-03-02</td>
          <td><span class="text-warning fw-bold">Pending</span></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Apply Leave Button -->
  <div class="text-center">
    <a href="#" class="btn btn-primary btn-lg px-4">
      <i class="fa-solid fa-paper-plane me-2"></i> Apply for Leave
    </a>
  </div>

</div>

</body>
</html>
