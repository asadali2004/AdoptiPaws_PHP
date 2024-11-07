<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
<a href="index.php" class="navbar-brand">
    <img src="includes/logo.png" alt="AdoptiPaws Logo" style="height: 40px; margin-right: 10px;">
    AdoptiPaws
  </a> </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'RequesterProfile') { echo 'active'; } ?>" href="RequesterProfile.php">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'SubmitRequest') { echo 'active'; } ?>" href="SubmitRequest.php">
        <i class="fab fa-accessible-icon"></i>
        Submit Pet Request
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'CheckStatus') { echo 'active'; } ?>" href="CheckStatus.php">
        <i class="fas fa-align-center"></i>
        Application Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'Requesterchangepass') { echo 'active'; } ?>" href="Requesterchangepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>