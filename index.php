<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>AdoptiPaws</title>
</head>

<body>
  <!-- Start Navigation -->

  <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
  <!-- Logo and Brand Name -->
  <a href="index.php" class="navbar-brand">
    <img src="images/logo.png" alt="AdoptiPaws Logo" style="height: 40px; margin-right: 10px;">
    AdoptiPaws
  </a>

  <!-- <span class="navbar-text">Animal's Care is our Aim</span> -->

  <!-- Navbar Toggler for mobile view -->
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar Links -->
  <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
      <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
      <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
      <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
    </ul>
  </div>
</nav>

   <!-- End Navigation -->

  <header class="jumbotron back-image" style="background-image: url('images/Banner3.jpeg');">
  <div class="myclass mainHeading text-center">
    <h1 class="text-uppercase text-dark font-weight-bold">Welcome to AdoptiPaws</h1>
    <p class="font-italic text-secondary">Connecting Pets with Loving Homes</p>
    <a href="Requester/RequesterLogin.php" class="btn btn-info mr-4">Login</a>
    <a href="#registration" class="btn btn-secondary mr-4">Sign Up</a>
  </div>
</header>

  <!-- End Header Jumbotron -->
<div class="container text-center mt-4">
  <h2>Meet Our Pets Ready for Adoption</h2>

  <!-- Filter Section -->
  <div class="filter-section mb-4">
    <form id="filterForm">
      <label for="animalCategory">Animal Category:</label>
      <select id="animalCategory" name="category" class="form-control d-inline w-auto">
        <option value="all">All</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="cow">Cow</option>
        <option value="goat">Goat</option>
      </select>

      <label for="location">Location:</label>
      <select id="location" name="location" class="form-control d-inline w-auto">
        <option value="all">All</option>
        <option value="Jalandhar">Jalandhar</option>
        <option value="Delhi">Delhi</option>
        <option value="patna">Patna</option>
        <option value="mumbai">Mumbai</option>
      </select>

      <button type="button" class="btn btn-warning" onclick="filterAnimals()">Filter</button>
    </form>
  </div>

  <!-- Animal Cards -->
  <div class="row" id="animalCards">
    <!-- Animal 1 -->
    <div class="col-md-3 mb-4 animal-card" data-category="dog" data-location="Jalandhar">
      <div class="card">
        <img src="images/dog.jpg" class="card-img-top fixed-image" alt="Dog">
        <div class="card-body">
          <h5 class="card-title">Buddy</h5>
          <p><strong>Location:</strong>Jalandhar Shelter</p>
          <p><strong>Age:</strong> 2 years</p>
          <p class="card-text">Friendly and energetic. Great with kids and loves to play!</p>
          <a href="Requester/RequesterLogin.php" class="btn btn-info">Adopt Buddy</a>
        </div>
      </div>
    </div>

    <!-- Animal 2 -->
    <div class="col-md-3 mb-4 animal-card" data-category="cat" data-location="Delhi">
      <div class="card">
        <img src="images/cat.jpg" class="card-img-top fixed-image" alt="Cat">
        <div class="card-body">
          <h5 class="card-title">Whiskers</h5>
          <p><strong>Location:</strong> Delhi Shelter</p>
          <p><strong>Age:</strong> 1.5 years</p>
          <p class="card-text">Loves to cuddle and is very calm.</p>
          <a href="Requester/RequesterLogin.php" class="btn btn-info">Adopt Whiskers</a>
        </div>
      </div>
    </div>

     <div class="col-md-3 mb-4 animal-card" data-category="cow" data-location="patna">
      <div class="card">
        <img src="images/cow.jpg" class="card-img-top fixed-image" alt="Cat">
        <div class="card-body">
          <h5 class="card-title">Gauri</h5>
          <p><strong>Location:</strong> Patna Shelter</p>
          <p><strong>Age:</strong> 5 years</p>
          <p class="card-text">Gentle and affectionate, loves to be petted.</p>
          <a href="Requester/RequesterLogin.php" class="btn btn-info">Adopt Gauri</a>
        </div>
      </div>
    </div>

     <div class="col-md-3 mb-4 animal-card" data-category="goat" data-location="mumbai">
      <div class="card">
        <img src="images/goat.jpg" class="card-img-top fixed-image" alt="Cat">
        <div class="card-body">
          <h5 class="card-title">Bro</h5>
          <p><strong>Location:</strong> Mumabi Shelter</p>
          <p><strong>Age:</strong> 2 years</p>
          <p class="card-text">Curious and playful, enjoys exploring and interactive.</p>
          <a href="Requester/RequesterLogin.php" class="btn btn-info">Adopt Bro</a>
        </div>
      </div>
    </div>

    <!-- More animal cards... -->
  </div>
</div>



  


  <div class="container text-center border-bottom" id="Services">
  <h2>Our Services</h2>
  <div class="row mt-4">
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-paw fa-8x text-primary"></i></a>
      <h4 class="mt-4">Adoption</h4>
      <p>Find your perfect companion by browsing through animals ready for adoption.</p>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-exclamation-circle fa-8x text-warning"></i></a>
      <h4 class="mt-4">Post an Animal in Need</h4>
      <p>Report stray or injured animals in need of help so nearby NGOs can respond.</p>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-hands-helping fa-8x text-success"></i></a>
      <h4 class="mt-4">Rescue</h4>
      <p>Support NGOs in their rescue efforts to provide care and shelter for animals.</p>
    </div>
  </div>
</div>

  <!-- End Services -->

  <!-- Start Registration  -->
   <div id="registration">

   <?php include('UserRegistration.php') ?>
   </div>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-secondary" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Thanks to AdoptiPaws, our NGO has received more leads and support for our rescues. It’s a game-changer for us.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">Posting about a stray kitten I found was simple. Within hours, an NGO reached out and took her in. She's now thriving!</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">I never knew adopting could be this seamless. The site’s tools and updates kept me informed and reassured.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">AdoptiPaws connects compassionate people and animals in need. It’s a vital platform for anyone wanting to make a difference.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->



  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">About Us</h3>
      <p>
        AdoptiPaws is a compassionate platform dedicated to connecting rescued animals with loving homes.
Our mission is to make pet adoption easy, accessible, and rewarding by partnering with animal welfare NGOs and rescue groups. We provide a seamless experience for adopters and rescuers alike, helping animals in need find a second chance at life.

With a network of registered NGOs and rescue organizations, we ensure that every animal gets the care it deserves, from rescue to rehabilitation and finally adoption. Our platform is designed with features that offer peace of mind, transparency, and community support for everyone involved in the adoption process.

Whether you’re looking to adopt a pet or report an animal in need, AdoptiPaws makes it simple. Just register and get started on making a difference today.
      </p>

    </div>
  </div>

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        AdoptiPaws Pvt Ltd, <br>
        Jalandhar <br>
        Punjab - 834005 <br>
        Phone: +00000000 <br>
        <a href="http://adoptipaws.freesite.online/" target="_blank">www.AdoptiPaws.com</a> <br>

        <br><br>
        <strong>Delhi Branch:</strong> <br>
        AdoptiPaws Pvt Ltd, <br>
        Ashok Nagar, Delhi <br>
        Delhi - 804002 <br>
        Phone: +00000000 <br>
        <a href="http://adoptipaws.freesite.online/" target="_blank">www.Adoptipaws.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
<!-- LinkedIn -->
<a href="https://www.linkedin.com/in/ali1609/" target="_blank" class="pr-2 fi-color">
    <i class="fab fa-linkedin"></i>
</a>

<!-- GitHub -->
<a href="https://github.com/asadali2004" target="_blank" class="pr-2 fi-color">
    <i class="fab fa-github"></i>
</a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>

        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Someone &copy; 2018.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>






<script>
// JavaScript code for filtering animals based on category and location
function filterAnimals() {
  const category = document.getElementById("animalCategory").value;
  const location = document.getElementById("location").value;
  const animalCards = document.querySelectorAll(".animal-card");

  animalCards.forEach(card => {
    const animalCategory = card.getAttribute("data-category");
    const animalLocation = card.getAttribute("data-location");

    if ((category === "all" || animalCategory === category) && 
        (location === "all" || animalLocation === location)) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}
</script>


</html>