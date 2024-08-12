<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Carattere&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="../css/styles_index.css" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="animal_kingdom_zoo">Safari Haven Zoo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" aria-current="Home_Page" href="#" id="navbarDropdownMenuLink" 
                            data-bs-toggle="dropdown" aria-expanded="false" style="font-weight: 900; border-bottom: 2px solid #d4760a;">Home</a>
                            <ul class="dropdown-menu dropdown-menu-zoo" aria-labelledby="navbarDropdownMenuLink1">
                                <li><a class="dropdown-item" id="navigate-directory" href="">general presentation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbarDropdownMenuLink1" href="conservation-efforts.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">The Zoo</a>
                            <ul class="dropdown-menu dropdown-menu-zoo" aria-labelledby="navbarDropdownMenuLink1">
                                <li><a class="dropdown-item" href="conservation-efforts.html">Conservation Programs</a></li>
                                <li><a class="dropdown-item" href="educational.html">Educational Resources</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbarDropdownMenuLink2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Visitors Info</a>
                            <ul class="dropdown-menu dropdown_visitors" aria-labelledby="navbarDropdownMenuLink2">
                                <li><a class="dropdown-item" href="#">Hours of Operation</a></li>
                                <li><a class="dropdown-item" href="#">Map</a></li>
                                <li><a class="dropdown-item" href="#">Facilities</a></li>
                                <li><a class="dropdown-item" href="#">Accessibility</a></li>
                                <li><a class="dropdown-item" href="#">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbarDropdownMenuLink3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tickets</a>
                            <ul class="dropdown-menu dropdown_tickets" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a class="dropdown-item" href="#">Day Passes</a></li>
                                <li><a class="dropdown-item" href="#">Annual Memberships</a></li>
                                <li><a class="dropdown-item" href="#">Group Bookings</a></li>
                                <li><a class="dropdown-item" href="#">Special Discounts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Gallery_index.php" id="gallery">Gallery</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Events
                            </a>
                            <ul class="dropdown-menu dropdown_events" aria-labelledby="navbarDropdownMenuLink4">
                                <li><a class="dropdown-item" href="" id="visitor-feedback">Visitor Feedback</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" >Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- main -->

    <main class="container">
        <div class="section_1">
            <div class="card mb-3" style="background-color: rgb(255, 226, 186);">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Welcome to Safari Heaven Zoo</h5>
                            <p class="card-text">
                                Discover the wonders of the animal kingdom at Safari Heaven Zoo, where we provide a sanctuary for over 200 species from around the globe. Our mission is to foster a deep connection between our visitors and wildlife, promoting conservation and education.
                            </p>
                            <p class="card-text">
                                Whether you're visiting with family, friends, or school groups, there's something for everyone. Explore our beautifully landscaped habitats, engage in interactive exhibits, and enjoy daily shows and feeding sessions.
                            </p>
                            <p class="card-text">
                                Join us in our commitment to protect endangered species and their habitats. Your visit helps support our ongoing conservation efforts and educational programs.
                            </p>
    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="./images/lion-family.jpg" class="img-fluid rounded-start custom-image" alt="...">
                    </div>
                </div>
            </div>
        </div>
         <!-- main section 2 -->
         <div class="section-2">
            <h3>Meet our animals</h3>
            <div class="card-container row">
                <div class="col-md-2">
                    <div class="card mb-5">
                        <img src="./images/penguin.jpg" class="card-img-top" alt="Penguin">
                        <div class="card-body">
                            <h5 class="card-title">Penguins</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card mb-5">
                        <img src="./images/elephant.jpg" class="card-img-top" alt="Elephant">
                        <div class="card-body">
                            <h5 class="card-title">elephant</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card mb-5">
                        <img src="./images/owl.jpg" class="card-img-top" alt="Owm">
                        <div class="card-body">
                            <h5 class="card-title">owl</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card mb-5">
                        <img src="./images/gorilla.jpg" class="card-img-top" alt="Gorila">
                        <div class="card-body">
                            <h5 class="card-title">gorila</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card mb-5">
                        <img src="./images/turtle.jpg" class="card-img-top" alt="Turtle">
                        <div class="card-body">
                            <h5 class="card-title">turtle</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card mb-5">
                        <img src="./images/button-view-gallery.jpg" class="card-img-top" alt="Gallery">
                        <div class="card-body">
                            <h5 class="card-title">gallery</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main section 3 -->
        <div class="section-3">
            <div class="row">
                <div class="col-md-4 section-3p">
                    <h5>Conservation Efforts</h5>
                    <p>At Safari Heaven Zoo, we are committed to conservation efforts 
                       aimed at protecting endangered species and their habitats. 
                       Through collaborative programs with wildlife organizations 
                       and dedicated research initiatives, we strive to make a positive impact 
                       on biodiversity preservation.</p>
                       <a href="conservation-efforts.html" style="text-transform: uppercase;">Read more</a>
                    </p>
                    <p>Safeguarding endangered species and their habitats. </p>
                    <div class="consrv-images">
                        <img src="./educational_images/consrv_img_1.webp" alt="" title="It's official. Zoos save planet" id="consrv_custom_img_1">
                        <img src="./educational_images/consrv_img_2.webp" alt="" title="" id="consrv_custom_img_2">
                    </div>
                </div>
                
              
                <div class="col-md-4 section-3p">
                    <h5>Educational Programs</h5>
                    <p>Our educational programs at Safari Heaven Zoo 
                       are designed to inspire and educate visitors 
                       of all ages about the wonders of the animal kingdom. 
                       From interactive workshops to guided tours and classroom sessions, 
                       we aim to foster a deeper understanding of wildlife conservation and biodiversity.
                    </p>
                    <a href="educational.html" style=" text-transform: uppercase;">Read more</a>
                   <div class="educ-images">
                        <p>Interactive way for young explorers</p>
                        <img src="./educational_images/educ_prg_1.jfif" alt="Education_img_1" title="Explore our passion-driven programs designed for children!" id="educ_custom_img_1">
                        <img src="./educational_images/educ_prg_2.jpg" alt="Education_img_2" title="Insightful learning for children"    id="educ_custom_img_2">
                   </div>
                   <div class="educ-images-bottom">
                        <img src="./educational_images/educ_prg_3.jpg" alt=""  title="Source of Collective Inspiration for the Young"   id="educ_custom_img_3">
                        <img src="./educational_images/educ_prg_4.webp" alt=""  title="Learning to love animals at early age"  id="educ_custom_img_4">
                   </div>
                </div>
                <div class="col-md-4 section-3p section-community">
                    <h5>Community Engagement</h5>
                    <p>Community engagement is at the heart of Safari Heaven Zoo. 
                       Through outreach events, volunteer opportunities, 
                       and partnerships with local schools and organizations, 
                       we encourage active participation in wildlife conservation. 
                       Together, we can make a difference in protecting our planet's precious wildlife.</p>
                       <h4>join our ecosystem</h4>

                       <form action="./php/community.php" method="post" class="form-container" id="join-form">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" name="first_name" placeholder="First Name" required> <br><br>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required><br><br>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="Email" required><br><br>
                            </div>
                            <button type="submit" id="join-button">join now</button>
                       </form>
                </div>
            </div>
        </div>
        

    </main>
    <!-- footer home page index -->

    <footer>
        <div class="footer_container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-section1">
                        <img src="./images/animal-kingdom.jpg" alt="" class="animal-kingdom">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-section2">
                        <h5 class="mt-5">Contact Us</h5>
                    <p class="mb-1">Email: contact@animalkingdomzoo.com</p>
                    <p class="mb-1">Phone: +1 (555) 123-4567</p>
                    <p class="mb-1">Address: 123 Zoo Lane, Animal City, AC 12345</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-section3">
                        <h5 class="mt-5">Opening Hours</h5>
                        <p class="mb-1">Monday - Friday: 9:00 AM - 5:00 PM</p>
                        <p class="mb-1">Saturday - Sunday: 10:00 AM - 6:00 PM</p>
                        <p class="mb-1">Holidays: 10:00 AM - 4:00 PM</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-section4">
                        <h5 class="mt-5">Follow Us</h5>
                    <a href="https://www.facebook.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.twitter.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.instagram.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-linkedin"></i></a><br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-text-center">
                        <div class="col text-center border-top mt-3 pt-3">
                            <p>&copy; 2024 Animal Kingdom Zoo. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>



    <!-- Your Custom JS hardcoded navigation-->
     <!-- <script src="./js/navigate.js"></script> -->

     <script src="./js/navigate_2.js"></script>
   

     <!-- js for html to reset clean fields -->
      <script>
        window.onload = function (){
            document.getElementById('join-form').reset();
        }
      </script>


      <!-- navigation to visitor feedback js -->
      <script src="./js/visitor-feedback.js"></script>

      

         
</body>
</html>



