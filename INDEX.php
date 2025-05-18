<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Portal</title>

    <!-- Bootstrap CSS -->
    <link rel="website icon" type="png" href="img/graduate.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    
    <style>
 * {
  font-family: sans;
}
html {
  scroll-padding-top: 110px; /* Adjust to match your navbar height */
}


/* General Styles */
.container {
  margin-top: 50px;
  padding: 20px;
  color: white;
}


section:not(.home-section) {
  background: linear-gradient(to right, rgb(150, 53, 189) 0%, rgb(231, 24, 100) 100%);
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  color: white;
}
.home-section {
  background-color: transparent; /* or any other style */
  /* padding: px; */
}

h1 {
  font-size: 36px;
  margin-bottom: 20px;
  color: white;
}

.container-p {
  font-size: 18px;
  line-height: 1.8;
  color: red;
}

.col-md-6 {
  border-radius: 10px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

/* Footer */
footer {
  border-radius: 5px;
  height: 60px;
  background: linear-gradient(to right, rgb(150, 53, 189) 0%, rgb(231, 24, 100) 100%);
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 2px 0 10px 0;
  padding: 10px;
}

.footer-p {
  color: white;
}

/* Navbar */
.custom-navbar {

  background: linear-gradient(to right, rgba(150, 53, 189, 0.95), rgba(231, 24, 100, 0.95));
  backdrop-filter: blur(8px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.custom-navbar .nav-link {
  transition: all 0.3s ease;
}

.custom-navbar .nav-link:hover {
  text-decoration: underline;

  background: linear-gradient(to right, rgba(150, 53, 189, 0.95), rgba(231, 24, 100, 0.95));
  border-radius: 10px;
  padding: 6px 12px;
}

.custom-navbar .btn:hover {
  background-color: #ffffff !important;
  color: #000 !important;
  transition: 0.3s;
}

/* Buttons */
.custom-hover:hover,
.gradient-hover:hover {
 
  background: linear-gradient(to right, rgba(150, 53, 189, 0.95), rgba(231, 24, 100, 0.95));
  color: white !important;
  border: none !important;
  transition: all 0.3s ease-in-out;
  transform: scale(1.05);
}

.gradient-btn {
  background: linear-gradient(to right, rgb(150, 53, 189), rgb(231, 24, 100));
  border: none;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
  font-weight: 600;
}

.nav-gradient {
  background: linear-gradient(to right, rgb(150, 53, 189), rgb(231, 24, 100));
}

.nav-gradient:hover {
  filter: brightness(1.1);
  transition: all 0.3s ease;
}

/* Responsive */
@media (min-width: 992px) {
  .navbar {
    background-color: white !important;
  }
}

@media (max-width: 991px) {
  .offcanvas.offcanvas-end {
    background-color: rgba(0, 0, 0, 0.8) !important;
  }

  .offcanvas .nav-link {
    color: white !important;
  }

  .offcanvas .btn {
    background-color: white !important;
    color: red !important;
    border: 1px solid red !important;
  }

  .offcanvas .btn:hover {
    background-color: red !important;
    color: white !important;
  }
}

</style>
<script>
    // Prevent back button from navigating to authenticated pages
    if (window.history && window.history.pushState) {
        window.history.pushState('', null, './');
        window.onpopstate = function () {
            window.history.pushState('', null, './');
        };
    }
</script>



</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logofinal.jfif" alt="Logo" width="55" height="55" class="d-inline-block align-text-center">
             <strong>Alumni Portal</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item nav-gradient rounded">
                    <a class="nav-link text-white" href="#home"><i class="bi bi-house-door-fill me-2"></i>Home</a>
                </li>
                <li class="nav-item nav-gradient rounded">
                    <a class="nav-link text-white" href="#about"><i class="bi bi-info-circle-fill me-2"></i>About</a>
                </li>
                <li class="nav-item nav-gradient rounded">
                    <a class="nav-link text-white" href="#Services"><i class="bi bi-gear-fill me-2"></i>Services</a>
                </li>
                <li class="nav-item nav-gradient rounded">
                    <a class="nav-link text-white" href="#Gallery"><i class="bi bi-images me-2"></i>Gallery</a>
                </li>
                <li class="nav-item nav-gradient rounded">
                    <a class="nav-link text-white" href="#team"><i class="bi bi-people-fill me-2"></i>Team</a>
                </li>
                <li class="nav-item nav-gradient rounded">
                    <a class="nav-link text-white" href="#Contect"><i class="bi bi-envelope-fill me-2"></i>Contact</a>
                </li>
            </ul>

            <form class="d-flex gap-3">
  <a class="btn btn-outline-danger gradient-hover" href="login.html">
    <i class="bi bi-person-circle me-2 fs-5"></i>Student Login
  </a>
  <a class="btn btn-outline-danger gradient-hover" href="loginadmin.html">
    <i class="bi bi-person-badge-fill me-2 fs-5"></i> Admin Login
  </a>
  <a class="btn btn-outline-danger gradient-hover" href="sign.html">
    <i class="bi bi-person-plus-fill me-2 fs-5"></i>Sign In
  </a>
</form>
        </div>
    </div>

    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white"><i class="bi bi-menu-button-wide"></i> Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                <li class="nav-item"><a class="nav-link text-white" href="#Home"><i class="bi bi-house-door-fill me-2"></i>Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#about"><i class="bi bi-info-circle-fill me-2"></i>About</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#Services"><i class="bi bi-gear-fill me-2"></i>Services</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#Gallery"><i class="bi bi-images me-2"></i>Gallery</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#team"><i class="bi bi-people-fill me-2"></i>Faculty</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#Contect"><i class="bi bi-envelope-fill me-2"></i>Contact</a></li>
            </ul>

            <div class="d-flex flex-column gap-3">
            <a class="btn btn-outline-danger gradient-hover" href="login.html">
    <i class="bi bi-person-circle me-2 fs-5"></i> Student Login
</a>

<a class="btn btn-outline-danger gradient-hover" href="loginadmin.html">
    <i class="bi bi-person-badge-fill me-2 fs-5"></i> Admin Login
</a>

<a class="btn btn-outline-danger gradient-hover" href="sign.html">
    <i class="bi bi-person-plus-fill me-2 fs-5"></i> Sign In
</a>

</div>

        </div>
    </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle (for carousel functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




<!-- home secssion  -->
<section class="home-section" id="home">
<div class="container-fluid" style="margin-top: 5px; padding-top: 85px;">
  <div class="row">
    <div class="col-12">
      <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner" style="border-radius: 10px; overflow: hidden;">
            <!-- Slide 1 -->
            <div class="carousel-item active ">
              <div class="d-flex justify-content-center align-items-center text-center text-white"
              style="background: 
  linear-gradient(to right, rgba(150, 53, 189, 0.55), rgba(231, 24, 100, 0.55)),
  url('img/clg123.jpg') center center / cover no-repeat;
  height: 87vh;">
                <div class="px-4">
                   <!-- <img src="img/logofinal.jfif" alt="Logo" width="100" height="100" > -->
                  <h1 class="fw-bold display-5" style="font-family: sans;">DR. D. Y. PATIL INSTITUTE OF MANAGEMENT & ENTREPRENEUR DEVELOPMENT</h1>
                  <h4 class="mt-3" style="font-family: sans;">VARALE, TALEGAON DABHADE</h4>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="d-flex justify-content-center align-items-center text-center text-white"
                 style="background: 
  linear-gradient(to right, rgba(150, 53, 189, 0.55), rgba(231, 24, 100, 0.55)),
                            url('img/unnamed.webp') center center / cover no-repeat;
                          height: 87vh;">
                <div class="px-4">
                  <h1 class="fw-bold display-5" style="font-family: sans;">Empowering Innovation & Leadership</h1>
                  <h4 class="mt-3" style="font-family: sans;">Where Ideas Meet Execution</h4>
                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
              <div class="d-flex justify-content-center align-items-center text-center text-white"
                 style="background: 
  linear-gradient(to right, rgba(150, 53, 189, 0.55), rgba(231, 24, 100, 0.55)),
                            url('img/clg.webp') center center / cover no-repeat;
                          height: 87vh;">
                <div class="px-4">
                  <h1 class="fw-bold display-5" style="font-family: sans;">Connecting Alumni to Opportunities</h1>
                  <h4 class="mt-3" style="font-family:  sans;">Join the Journey of Growth</h4>
                </div>
              </div>
            </div>

          </div>

          <!-- Optional Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About page Start -->

      <div class="container mt-2">
        <!-- container-fluid mt-2 -->
          <section id="about">
              <img src="img/alumani.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="image" height="450">
              <h1>About This Website</h1>
              <p>This Application Project is called Web Based Alumni Portal. It is our mini project during the first year of the MCA program.</p>
              <p>It is originally simple alumni portal web app is built for <b>Dr. D Y Patil Institute of Management & Entrepreneur Development, Varale Talegaon Dabhade</b>. This system has an online form for the graduated students of the said university to track their employee status.</p>
              <blockquote>
                  "Our alumni share, learn, and collaborate with one another in the belief that we are ‘stronger together’ in realizing the University’s vision."
              </blockquote>
              <p>The Alumni Office at the University helps alumni stay connected to campus happenings, fellow alumni, and the University community. We hope this will provide a professional network of support.</p>
              <p>The main use of this portal is:</p>
            
       
              <ul>
                  <li>Connecting and networking with different alumni.</li>
                  <li>Follow current jobs and events.</li>
                  <li>View internship opportunities provided by the alumni.</li>
                  <li>View the latest job notifications provided by alumni, admin, or automatic alert APIs.</li>
              </ul>
              <!-- <p>This is my first-year project for MCA in D Y Patil College.</p> -->
          </section>
      </div>

<!-- about page over -->


    <!-- Services -->
    <div class=" D-flex container mt-1">
      <section id="Services" >
          <h1> Services</h1>
     <div class="row row-cols-1 row-cols-md-5 g-3">
      <div class="col">
        <div class="card h-100">
          <img src="img/15.jpg" class="card-img-top mt-5" alt="..." height="250">
          <div class="card-body">
            <h4 class="card-title"><center>College Event</center></h4>
            <h5 class="card-text mt-4"><center>You can get the Latest Upadate Of College's Event</h5>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card h-100">
          <img src="img/16.jpg" class="card-img-top" alt="..." height="300">
          <div class="card-body">
            <h4 class="card-title"><center>Connect with Friends</center></h4>
            <h5 class="card-text mt-4"><center>You are Able connect with Your Collage Friends Over Here.</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="img/100.jpg" class="card-img-top" alt="..." height="300">
          <div class="card-body">
            <h4 class="card-title"><center>Only Verified Alumni</center></h4>
            <h5 class="card-text mt-4"><center>In this Website only Verified Users Are Allowed.Verification Is done By Admin</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="img/17.png" class="card-img-top" alt="..." height="300">
          <div class="card-body">
            <h4 class="card-title"><center>Job Notification</center></h4>
            <h5 class="card-text mt-4"><center>You can Find The Job Notification.</h5>
          </div>
        </div> 
      </div>

      <div class="col">
        <div class="card h-100 ">
          <img src="img/19.png" class="card-img-top mt-5" alt="..." height="250">
          <div class="card-body">
            <h4 class="card-title"><center>Ideas</center></h4>
            <h5 class="card-text mt-4"><center>Alumni can share own views about new technology to Others.</h5>
          </div>
        </div> 
      </div>
      </div>
    </div>
    <!-- servies end  -->
<!-- Gallery Section -->
<?php
// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "test1"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch only 12 images from the database
$sql = "SELECT * FROM images ORDER BY upload_date DESC LIMIT 12";
$result = $conn->query($sql);

// Store images in an array
$images = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = "uploads/" . $row['filename'];
    }
}
?>


    <style>
        body {
            background-color: #f8f9fa;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-item:hover {
            transform: scale(1.08);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .gallery-item img {
            object-fit: cover;
            width: 100%;
            height: 180px;
            border-radius: 12px;
            transition: 0.3s;
        }
        .gallery-item:hover img {
            filter: brightness(0.8);
        }
        .modal-content {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            backdrop-filter: blur(8px);
        }
    </style>
</head>


<!-- Gallery Section -->
<div class="container mt-2">
  <section id="Gallery">
    <h1 class="mb-3">Gallery</h1>
<!-- <section id="Gallery" > -->
<!-- <div class="container mt-4"> -->
<!-- <h1 class="mb-3">Gallery</h1> -->
    <div class="row g-3">
        <?php
        if (!empty($images)) {
            foreach ($images as $index => $imagePath) {
                echo '<div class="col-md-3 col-6">
                        <div class="gallery-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="' . $imagePath . '" data-bs-index="' . $index . '">
                                <img src="' . $imagePath . '" class="img-fluid rounded shadow-sm" alt="Image">
                            </a>
                        </div>
                      </div>';
            }
        } else {
            echo '<p class="text-center text-muted">No images found.</p>';
        }
        ?>
    </div>
</div>

<!-- Modal with Carousel -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        foreach ($images as $index => $image) {
                            echo '<div class="carousel-item ' . ($index === 0 ? 'active' : '') . '">
                                    <img src="' . $image . '" class="d-block w-100 rounded" style="max-height: 80vh; object-fit: contain;">
                                  </div>';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
    <button type="button" class="nav-item nav-gradient rounded " data-bs-dismiss="modal">Close</button>
</div>


        </div>
    </div>
</div>

<script>
    var imageLinks = document.querySelectorAll('[data-bs-toggle="modal"]');
    var imagesArray = <?php echo json_encode($images); ?>;
    var currentIndex = -1;
    
    imageLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            currentIndex = parseInt(link.getAttribute('data-bs-index'));
            var carousel = document.getElementById('carouselGallery');
            var carouselInstance = new bootstrap.Carousel(carousel);
            carouselInstance.to(currentIndex);
        });
    });
</script>

</section>


<!-- Team Section -->
<div class="container mt-2">
  <section id="team">
    <h1 class="mb-3">MEET OUR FACULTY</h1>

    <!-- Bootstrap Carousel with auto-slide -->
    <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">

        <?php
        // Database connection
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "test1"; 

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from `professors` table (sorted by `id` ascending)
        $sql = "SELECT id, name, title, degree, experience_years, teaching_years, industry_years, profile_description, image_url 
                FROM professors 
                ORDER BY id ASC";
        $result = $conn->query($sql);

        $count = 0; // Counter for active class

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Start a new row every 4 members
                if ($count % 4 == 0) {
                    echo $count == 0 ? '<div class="carousel-item active"><div class="row row-cols-1 row-cols-md-4 g-3">' : '<div class="carousel-item"><div class="row row-cols-1 row-cols-md-4 g-3">';
                }

                // Team member card
                echo '<div class="col">
                        <div class="card h-100">
                          <img src="' . $row["image_url"] . '" class="card-img-top" alt="' . $row["name"] . '" height="300">
                          <div class="card-body">
                            <h4 class="card-title text-center">' . $row["name"] . '</h4>
                            <h5 class="card-text text-secondary text-center">' . $row["title"] . '</h5>
                            <div class="profile-details">
                              <ul>
                                <li><strong>Degree:</strong> ' . $row["degree"] . '</li>
                                <li><strong>Experience:</strong> ' . $row["experience_years"] . ' Years</li>';
                                
                if ($row["teaching_years"] || $row["industry_years"]) {
                    echo '<li><strong>Teaching:</strong> ' . $row["teaching_years"] . ' Years, <strong>Industry:</strong> ' . $row["industry_years"] . ' Years</li>';
                }

                echo '</ul></div></div></div></div>';

                $count++;

                // Close the row div after 4 members
                if ($count % 4 == 0) {
                    echo '</div></div>';
                }
            }

            // Close the last row if it's not complete
            if ($count % 4 != 0) {
                echo '</div></div>';
            }
        } else {
            echo "<p>No team members found.</p>";
        }

        // Close connection
        $conn->close();
        ?>

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
</div>

<!-- team sessions end  -->

      

      

<!-- CSS for Image Margin and Padding -->
<style>
  /* Profile details styling */
  .profile-details {
    text-align: left;
    font-size: 14px;
    color: #555;
  }

  .profile-details ul {
    padding-left: 20px;
    margin: 0;
  }

  .profile-details li {
    margin-bottom: 8px;
  }

  .profile-details li strong {
    color: #333;
  }

  /* Profile image styling */
  .profile-img {
    border-radius: 8px;
    height: 250px;
    width: 100%;
    object-fit: cover;
    margin-bottom: 20px;
  }

  /* Card hover effect */
  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  }

  /* General card styling */
  .card-body {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
  }

  .card-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
  }

  .card-text {
    font-size: 16px;
    margin-bottom: 15px;
  }

  .profile-details {
    font-size: 14px;
    color: #555;
  }

  /* Section title animation */
  h1 {
    animation: fadeIn 2s ease-in-out;
    text-transform: uppercase;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
</style>

<!-- contect Info -->
<div class="container mt-2">
  <section id="Contect">
    <h1 class="mb-3">CONTECT US</h1>
<!-- <div class="d-flex D-flex-row container mt-3" > -->
    <!-- <section id="Contect" >
        <h1> Contect Info </h1> -->
        <div class="svg mt-5">
          
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
          </svg><B> LOCATION</B> 
          <h6 class="text mt-2 mb-5 ms-md-5" > Sr.No.27/1/A/2C,Near Talegaon Railway Station,A/P.Varale,Talegaon,Tal.Maval,Dist.Pune-410507</h6>
            
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
             <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
        </svg><b> MAIL US</b>
        <h6 class="text mt-2 mb-5 ms-md-5"> director.dypimed@dypatileef.com </h6>

        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg><b>CALL US</b>
          <h6 class="text mt-2 mb-5 ms-md-5"> 0123 354 2635</h6>

          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
          </svg><B>  WORK HOURS</B>
          <h6 class="text mt-2 mb-5 ms-md-5"> Mon-Sat 09:00 AM - 04:00 PM</h6>
             
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
          </svg><b> COLLEGE WEBSITE</b>
      
          
          <p><a href="https://www.dypcoei.edu.in" class="text-white mt-2 mb-5 ms-md-5 link-underline-white">https://www.dypcoei.edu.in</a></p>
          </div>
          </section>
          </div>
          </section>
          </div>
          </div>
          </div>
          </section>
          </div>

          <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12">
                <footer class="bg-danger text-white" style="font-family: sans;">
                        <p class="mb-0">&copy; 2024 Alumni Portal | All Rights Reserved Web Development by Onkar Randhave</p>
                    </footer>
                </div>
            </div>
          </div>

</body>
</html>