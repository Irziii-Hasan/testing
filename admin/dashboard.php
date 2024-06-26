<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JUW - FYP Progress Recorder | Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="navbar header sticky-top">
  <div class="toggle-btn" onclick="toggleSidebar()">
    <i class="fas fa-bars fa-2x"></i>
  </div>
  <div class="header-title">FYP Progress Recorder</div>
  <div class="user-name">John Doe <i class="fas fa-caret-down user-dropdown-icon"></i></div>
</div>
<div class="wrapper">
<div class="sidebar" id="sidebar">
  <a href="#">Dashboard</a>
  <a href="">Faculty</a>
  <a href="showStudent.php">Student</a>
  <a href="#">Project</a>
  <a href="#">Result and Progress</a>
  
</div>

<div class="container-fluid" id="content">
  <div class="row">
    <div class="col-md-12">

      <!-- BREADCRUMBS -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb"> 
          <li class="breadcrumb-item"><a href="#">JUW - FYP Progress Recorder</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>

      <!-- Pages Heading -->
      <h2 style="text-align: center;">Dashboard</h2>
      <div class="container-fluid mt-4 ">
        <div class="row">
          <div class="col-md-9">
            <h3>Recent Activity</h3>
            <div class="container-fluid recent">
              <div><i><img src="Icons/progressBlue.png" alt="Icon 1"></i><span class="recent-content">Progress & Report Overview</span></div>
            </div>

            <div><h3>More Activities</h3></div>

            <div class="row dashbtnparent row-cols-2 row-cols-sm-3 row-cols-md-4">
              <button class="dashbtn"><div class="col"><a href="#"><img src="Icons/announcement.png" alt="Icon 1"><br>Faculty</a></div></button>
              
              <button class="dashbtn"><div class="col"><a href="showuser.php"><img src="Icons/progress.png" alt="Icon 2"><br>Student</a></div></button>
              <button class="dashbtn"><div class="col"><a href="#"><img src="Icons/status board.png" alt="Icon 2"><br>Project</a></div></button>
              <button class="dashbtn"><div class="col"><a href="#"><img src="Icons/chat.png" alt="Icon 2"><br>Result and Progress</a></div></button>

            </div>
            
            
          </div>
          <div class="col-md-3">
            <!-- col2 content here (you can add whatever you want) -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script>
  function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    var content = document.getElementById('content');
    sidebar.classList.toggle('show');
    if (sidebar.classList.contains('show')) {
      content.style.marginLeft = '250px';
    } else {
      content.style.marginLeft = '0';
    }
  }
</script>

</body>
</html>
