<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart IoT Solutions Landing Page</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <!-- Optional JavaScript -->
    <!-- jQuery and Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            margin: 0;
            padding: 0;
        }
        .hero-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
}


#heroVideo {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    z-index: -1;
}
.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.hero-content {
    position: relative;
    z-index: 1;
    color: white;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
}

        .sector-box {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .sector-box img {
            max-width: 100%;
            height: auto;
        }
        .sector-content {
            flex-grow: 1;
        }
        .explore-more {
            margin-top: auto;
        }
        .sector-details {
            display: none;
            text-align: left;
            margin-top: 20px;
        }
        .feature-item {
    cursor: pointer;
    transition: transform 0.2s;
    margin: 0 auto;
    text-align: center;
}

.feature-item:hover {
    transform: scale(1.05);
}

.feature-item i {
    margin-bottom: 10px;
}

.feature-item p {
    font-weight: bold;
    word-wrap: break-word;
    hyphens: auto;
}


        .modal-body p {
            font-size: 1rem;
            line-height: 1.5;
        }
        .cta-section {
            background-color: #f8f9fa;
        }

        
        /* Equal height columns */
        @media (min-width: 768px) {
            .sector-row {
                display: flex;
            }
            .sector-row .col-md-4 {
                display: flex;
            }
        }

        /* Testimonials Section */
.carousel-item p {
    font-size: 1rem;
    line-height: 1.5;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #000;
    border-radius: 50%;
}

.carousel-indicators li {
    background-color: #000;
}

/* Case Study Section */
.case-study img {
    border: 1px solid #ddd;
    border-radius: 5px;
}

.carousel-indicators.position-static {
    position: static;
    margin-top: 15px;
    display: flex;
    justify-content: center;
}

.carousel-item img:not([src]) {
    display: none;
}

.carousel-item img[src=""] {
    display: none;
}

/* CTA Section Styling */
.cta-section {
    color: #fff;
    background: linear-gradient(to right, #0062E6, #33AEFF);
}

.cta-section h2,
.cta-section p {
    z-index: 1;
    position: relative;
}

.cta-section .btn {
    padding: 12px 24px;
    font-size: 1.1rem;
    border-radius: 4px;
    display: flex;
    align-items: center;
}

.cta-section .btn i {
    font-size: 1.2rem;
}

.btn-primary {
    background-color: #28a745;
    border-color: #28a745;
}

.btn-secondary {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn:hover {
    opacity: 0.9;
}

@media (max-width: 576px) {
    .cta-section h2 {
        font-size: 1.5rem;
    }
    .cta-section p {
        font-size: 1rem;
    }
    .cta-section .btn {
        font-size: 1rem;
        padding: 10px 20px;
    }
}





    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <video autoplay muted loop id="heroVideo">
        <source src="hero-background.mp4" type="video/mp4">
        <!-- Add WebM format for better browser support -->
        <source src="hero-background.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Empowering Agriculture, Construction, and Smart Homes with Smart IoT Solutions.</h1>
        <p>Streamline your operations, increase efficiency, and monitor in real-time with our cutting-edge sensor technologies.</p>
        <div class="mt-4">
            <a href="#sectors" class="btn btn-primary">Explore Solutions</a>
            <a href="#contact" class="btn btn-secondary">Schedule a Free Consultation</a>
        </div>
    </div>
</section>

<!-- Sector Sections -->
<section id="sectors" class="container my-5">
    <div class="row sector-row">
        <!-- Agriculture Box -->
        <div class="col-md-4 d-flex">
            <div class="sector-box w-100" id="agriculture-box">
                <img src="placeholder-agriculture.jpg" alt="Agriculture Image">
                <div class="sector-content">
                    <h3>Boost Yields with Precision Farming</h3>
                    <p>Maximize crop health, save water, and enhance soil quality.</p>
                </div>
                <button class="btn btn-link explore-more" data-target="#agriculture-details">Explore More</button>
                <div class="sector-details" id="agriculture-details">
                    <h4>Pain Points and Solutions</h4>
                    <ul>
                        <li><strong>Water Efficiency:</strong> Struggling with water shortages? Our IoT sensors reduce water usage by 30% through precise irrigation.</li>
                        <li><strong>Pest Control:</strong> Worried about crop damage? Our sensors detect pests early, preventing losses.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Construction Box -->
        <div class="col-md-4 d-flex">
            <div class="sector-box w-100" id="construction-box">
                <img src="placeholder-construction.jpg" alt="Construction Image">
                <div class="sector-content">
                    <h3>Build Safely and Efficiently with Real-Time Monitoring</h3>
                    <p>Increase safety, track resources, and monitor structural health.</p>
                </div>
                <button class="btn btn-link explore-more" data-target="#construction-details">Explore More</button>
                <div class="sector-details" id="construction-details">
                    <h4>Pain Points and Solutions</h4>
                    <ul>
                        <li><strong>Safety:</strong> Want fewer accidents? Wearable sensors improve site safety by 40%.</li>
                        <li><strong>Resource Tracking:</strong> Facing delays? Our data-driven tracking optimizes material and labor use.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Smart Homes Box -->
        <div class="col-md-4 d-flex">
            <div class="sector-box w-100" id="smart-homes-box">
                <img src="placeholder-smart-home.jpg" alt="Smart Home Image">
                <div class="sector-content">
                    <h3>Smarter Living for a More Secure and Efficient Home</h3>
                    <p>Reduce energy use, improve air quality, and enhance security.</p>
                </div>
                <button class="btn btn-link explore-more" data-target="#smart-homes-details">Explore More</button>
                <div class="sector-details" id="smart-homes-details">
                    <h4>Pain Points and Solutions</h4>
                    <ul>
                        <li><strong>Energy Costs:</strong> Tired of high bills? Smart thermostats lower energy use by 25%.</li>
                        <li><strong>Security:</strong> Concerned about security? Real-time monitoring keeps your home safe, automatically.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Highlight Section -->
<section class="feature-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Our Key Benefits</h2>
        <div class="row">
            <!-- Feature 1 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="feature-item" data-toggle="modal" data-target="#feature1Modal">
                    <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                    <p><strong>Real-time Data Monitoring</strong></p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="feature-item" data-toggle="modal" data-target="#feature2Modal">
                    <i class="fas fa-money-bill-1-wave fa-3x text-success mb-3"></i>
                    <p><strong>Enhanced Efficiency and Cost Savings</strong></p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="feature-item" data-toggle="modal" data-target="#feature3Modal">
                    <i class="fas fa-puzzle-piece fa-3x text-info mb-3"></i>
                    <p><strong>Seamless Integration with Existing Systems</strong></p>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="feature-item" data-toggle="modal" data-target="#feature4Modal">
                    <i class="fas fa-layer-group fa-3x text-warning mb-3"></i>
                    <p><strong>Scalable Solutions for Businesses of All Sizes</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modals -->
<!-- Feature 1 Modal -->
<div class="modal fade" id="feature1Modal" tabindex="-1" role="dialog" aria-labelledby="feature1ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="feature1ModalLabel">Real-time Data Monitoring</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <p>Experience immediate insights into your operations with our real-time data monitoring solutions. Make informed decisions quickly and stay ahead of potential issues by accessing live data from your devices and sensors.</p>
        <!-- just stuff I wrote, should be changed later -->
      </div>
    </div>
  </div>
</div>

<!-- Feature 2 Modal -->
<div class="modal fade" id="feature2Modal" tabindex="-1" role="dialog" aria-labelledby="feature2ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feature2ModalLabel">Enhanced Efficiency and Cost Savings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Optimize your resource utilization and reduce operational costs with our efficient IoT solutions. Automate processes, minimize waste, and maximize productivity to enhance your bottom line.</p>
      </div>
    </div>
  </div>
</div>

<!-- Feature 3 Modal -->
<div class="modal fade" id="feature3Modal" tabindex="-1" role="dialog" aria-labelledby="feature3ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feature3ModalLabel">Seamless Integration with Existing Systems</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Our solutions are designed to integrate effortlessly with your current infrastructure. Enjoy a smooth transition and immediate benefits without the need for extensive overhauls or replacements.</p>
      </div>
    </div>
  </div>
</div>

<!-- Feature 4 Modal -->
<div class="modal fade" id="feature4Modal" tabindex="-1" role="dialog" aria-labelledby="feature4ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feature4ModalLabel">Scalable Solutions for Businesses of All Sizes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Whether you're a small enterprise or a large corporation, our scalable IoT solutions grow with your business. Easily add new devices and functionalities as your needs evolve.</p>
      </div>
    </div>
  </div>
</div>



<!-- Case Studies and Testimonials Section -->
<section class="container my-5">
    <div class="row">
        <!-- Testimonials Carousel -->
        <div class="col-md-6">
            <h2>What Our Clients Say</h2>
            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel Indicators -->
    <!-- <ol class="carousel-indicators position-static mb-0">
                    <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                    <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                </ol> -->
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active text-center">
                        <img src="/testim1.jpg" alt="" class="rounded-circle mb-3" style="width:80px;">
                        <p>"Implementing the IoT solutions transformed our farming operations. We've increased crop yield by 20%."</p>
                        <p><strong>— Someone, Somewhere</strong></p>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="carousel-item text-center">
                        <img src="/testim2.jpg" alt="" class="rounded-circle mb-3" style="width:80px;">
                        <p>"With real-time monitoring, our construction projects are now more efficient and safer. Delays have been reduced by 35%."</p>
                        <p><strong>— Someone, Somewhere</strong></p>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="carousel-item text-center">
                        <img src="/testim3.jpg" alt="" class="rounded-circle mb-3" style="width:80px;">
                        <p>"Our energy bills have decreased by 25% since installing smart home sensors. The system is seamless and user-friendly."</p>
                        <p><strong>— Someone, Somewherer</strong></p>
                    </div>
                </div>
                <!-- Carousel Controls -->
<a class="carousel-control-prev" href="#" role="button" data-slide="prev" data-target="#testimonialCarousel">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#" role="button" data-slide="next" data-target="#testimonialCarousel">
    <span class="carousel-control-next-icon"></span>
</a>

            </div>
        </div>
        <!-- Case Study -->
        <div class="col-md-6">
            <h2>Case Study: Something big that was solved!</h2>
            <img src="/casestudy alt="" class="img-fluid mb-3">
            <p><strong>Background:</strong> Some text should be written here I think</p>
            <p><strong>Challenges:</strong> Some text should be written here I think</p>
            <p><strong>Solution:</strong> Some text should be written here I think</p>
            <p><strong>Results:</strong> Some text should be written here I think</p>
            <a href="#contact" class="btn btn-primary mt-3">Learn How We Can Help You</a>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section text-center py-5" style="background: linear-gradient(to right, #1468d6, #33AEFF); color: #fff;">
    <div class="container">
        <h2 class="mb-4">Elevate Your Operations with Smart IoT Solutions</h2>
        <p class="mb-4">Join the forefront of technology. Enhance productivity, reduce costs, and stay ahead of the competition with our tailored IoT solutions.</p>
        <div class="d-flex flex-wrap justify-content-center">
            <a href="#contact" class="btn btn-primary m-2">
                <i class="fas fa-play-circle mr-2" aria-hidden="true"></i>
                <span>Schedule a Free Demo</span>
            </a>
            <a href="#contact" class="btn btn-secondary m-2">
                <i class="fas fa-calendar-alt mr-2" aria-hidden="true"></i>
                <span>Book a Consultation</span>
            </a>
        </div>
    </div>
</section>


</section>

<!-- Footer Section -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <!-- Quick Links -->
        <div class="row">
            <div class="col-md-4">
                <h5>Solutions</h5>
                <ul class="list-unstyled">
                    <li><a href="#agriculture-box" class="text-white">Agriculture Solutions</a></li>
                    <li><a href="#construction-box" class="text-white">Construction Solutions</a></li>
                    <li><a href="#smart-homes-box" class="text-white">Smart Homes Solutions</a></li>
                </ul>
            </div>
            <!-- Contact Info -->
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Phone: (555) 123-4567</p>
                <p>Email: info@fauiotlab.com</p>
                <p>123 IoT Lab Drive, Tech City, ST 12345</p>
            </div>
            <!-- Social Media and Map -->
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <a href="https://facebook.com/" class="text-white mr-2"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://linkedin.com/ class="text-white mr-2"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="https://twitter.com/" class="text-white mr-2"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="https://instagram.com/" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>

                <div class="mt-3">
                    <!-- Placeholder for Map -->
                    <div id="map" style="width:100%;height:200px;background-color:gray;">Interactive Map Placeholder</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Get in Touch</h2>

        <?php
        // Start the session at the beginning of the file
        session_start();

        // Display success message
        if (isset($_SESSION['successMessage'])) {
            echo "<div class='alert alert-success'>" . $_SESSION['successMessage'] . "</div>";
            unset($_SESSION['successMessage']); // Clear the message after displaying
        }

        // Display error messages
        if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
            echo "<div class='alert alert-danger'><ul>";
            foreach ($_SESSION['errors'] as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul></div>";
            unset($_SESSION['errors']); // Clear errors after displaying
        }
        ?>

        <form action="contact-process.php" method="post" novalidate>
            <div class="form-row">
                <!-- Name -->
                <div class="form-group col-md-6">
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        placeholder="Your Name"
                        value="<?php echo isset($_SESSION['formData']['name']) ? htmlspecialchars($_SESSION['formData']['name']) : ''; ?>"
                        required
                    >
                </div>
                <!-- Email -->
                <div class="form-group col-md-6">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="Your Email"
                        value="<?php echo isset($_SESSION['formData']['email']) ? htmlspecialchars($_SESSION['formData']['email']) : ''; ?>"
                        required
                    >
                </div>
            </div>
            <div class="form-row">
                <!-- Phone -->
                <div class="form-group col-md-6">
                    <label for="phone">Phone Number</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        class="form-control"
                        placeholder="Your Phone Number"
                        value="<?php echo isset($_SESSION['formData']['phone']) ? htmlspecialchars($_SESSION['formData']['phone']) : ''; ?>"
                    >
                </div>
                <!-- Sector of Interest -->
                <div class="form-group col-md-6">
                    <label for="sector">Sector of Interest</label>
                    <select id="sector" name="sector" class="form-control">
                        <option value="" <?php if (isset($_SESSION['formData']['sector']) && $_SESSION['formData']['sector'] == '') echo 'selected'; ?>>Select a Sector</option>
                        <option value="agriculture" <?php if (isset($_SESSION['formData']['sector']) && $_SESSION['formData']['sector'] == 'agriculture') echo 'selected'; ?>>Agriculture</option>
                        <option value="construction" <?php if (isset($_SESSION['formData']['sector']) && $_SESSION['formData']['sector'] == 'construction') echo 'selected'; ?>>Construction</option>
                        <option value="smart-homes" <?php if (isset($_SESSION['formData']['sector']) && $_SESSION['formData']['sector'] == 'smart-homes') echo 'selected'; ?>>Smart Homes</option>
                    </select>
                </div>
            </div>
            <!-- Message -->
            <div class="form-group">
                <label for="message">Message<span class="text-danger">*</span></label>
                <textarea
                    id="message"
                    name="message"
                    class="form-control"
                    rows="5"
                    placeholder="Your Message"
                    required
                ><?php echo isset($_SESSION['formData']['message']) ? htmlspecialchars($_SESSION['formData']['message']) : ''; ?></textarea>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        // Clear form data after displaying
        if (isset($_SESSION['formData'])) {
            unset($_SESSION['formData']);
        }
        ?>
    </div>
</section>




<!-- Custom JavaScript -->
<script>
    $(document).ready(function(){
        // Explore More functionality
        $('.explore-more').click(function(){
            var target = $(this).data('target');
            $(target).slideToggle();
            $(this).text(function(i, text){
                return text === "Explore More" ? "Show Less" : "Explore More";
            });
        });

        // Tooltip initialization
        $('[data-toggle="tooltip"]').tooltip();

        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 70
                }, 1000);
            }
        });
    });

    $(document).ready(function(){
            // Tooltip initialization
            $('[data-toggle="tooltip"]').tooltip();
        });
</script>

<script>
    $(document).ready(function(){
        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 70
                }, 800);
            }
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('form').on('submit', function(event){
            // Basic validation
            var isValid = true;
    
            // Check required fields
            $('input[required], textarea[required]').each(function(){
                if($(this).val().trim() === ''){
                    isValid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });
    
            if(!isValid){
                event.preventDefault();
                // Optionally, display an error message
                alert('Please fill in all required fields.');
            }
        });
    });
    </script>
    
    <script>
        $(document).ready(function(){
            $('form').on('submit', function(event){
                var isValid = true;
        
                // Validate required fields
                $('input[required], textarea[required]').each(function(){
                    if ($(this).val().trim() === '') {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });
        
                if (!isValid) {
                    event.preventDefault();
                    alert('Please fill in all required fields.');
                }
            });
        });
        </script>
        

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> 
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
