<?php

require_once 'db.php';
require_once 'functions.php';

$posts = getAllPosts($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="topbar">
        <div class="container">
            <div class="topbar-content">
                <div class="topbar-contact">
                    <ul>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <li>+256784366132 / +256704412136</li>
                        <span class="socialmedia-icon"><i class="fa-solid fa-envelope"></i></span>
                        <li> info@csc.ug</li>
                        <span class="socialmedia-icon"><i class="fa-regular fa-clock"></i></span>
                        <li>Open 24 Hours. Mon - Sun</li>
                        <ul class="social-media">
                            <span><i class="fa-brands fa-instagram"></i></span>
                            <span class="socialmedia-icon"><i class="fa-brands fa-facebook"></i></span>
                            <span class="socialmedia-icon"><i class="fa-brands fa-youtube"></i></span>
                            <span class="socialmedia-icon"><i class="fa-brands fa-twitter"></i></span>
                            <span class="socialmedia-icon"><i class="fa-brands fa-linkedin"></i></span>
                        </ul>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="navbar">

                <a class="main-logo" href="home.html">
                    <img src="images/csc-logo.png" alt="" class="main">
                </a>

                <ul class="navbar-link">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#service-list">Services</a></li>
                    <li><a href="#">Departments</a></li>
                    <li><a href="#">Patient Resources</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Account <i class="fa-solid fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="/blog_post/admin/login.php">Login</a>
                            <a href="/blog_post/admin/register.php">Register</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--=================================================Navbar End============================================================-->
    <div class="banner">
        <div class="container">
            <div class="hero-banner">
                <div class="banner-heading">
                    <h4>Welcome to Cleveland</h4>
                    <h3>Specialized Clinic Wampeewo</h3>
                    <div class="banner-button">
                        <button class="appointment-button">Book Appointment</button>
                        <button class="contact-button"><a href="contact.php">Contact Us</a></button>
                    </div>
                </div>
                <div class="banner-content"></div>
            </div>
        </div>
    </div>
    <!-- =============================hero section end============================================================= -->
    <div class="content-container">
        <div class="container">
            <div class="icon-list">
                <div class="icon-item">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="images/advice.png" class="image" alt="Medical advices and checkups">
                        </div>
                        <h5>Medical Advices & Check Ups</h5>
                    </div>
                </div>
                <div class="icon-item">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="images/advice.png" class="image" alt="Medical advices and checkups">
                        </div>
                        <h5>Medical Advices & Check Ups</h5>
                    </div>
                </div>
                <div class="icon-item">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="images/advice.png" class="image" alt="Medical advices and checkups">
                        </div>
                        <h5>Medical Advices & Check Ups</h5>
                    </div>
                </div>
                <div class="icon-item">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="images/advice.png" class="image" alt="Medical advices and checkups">
                        </div>
                        <h5>Medical Advices & Check Ups</h5>
                    </div>
                </div>
                <div class="icon-item">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="images/advice.png" class="image" alt="Medical advices and checkups">
                        </div>
                        <h5>Medical Advices & Check Ups</h5>
                    </div>
                </div>
                <div class="icon-item">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="images/advice.png" class="image" alt="Medical advices and checkups">
                        </div>
                        <h5>Medical Advices & Check Ups</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================================== box section end============================== -->
    <div class="container">    
        <div class="flex-container">
            
                <div class="about-image">
                    <img src="images/about-img.png" class="image2" alt="about image">
                </div>
                <div class="intro">
                    <h1 class="heading">
                        Cleveland Specialized Clinic
                    </h1>
                    <p class="para">
                        CSC is a health facility that is home to highly skilled and experienced specialists and professional medical staff.
                        Over the years, we have been among the best private hospitals in the area because of our excellent standards and the high quality of services and personal care we provide.
                        We are pacesetters in our field, inspired by our core value of care. We care about the dignity of our patients and strive to become a one-stop healthcare provider in the country.
                        We operate under the umbrella of the social service league which is a non-racial, non-religious, non-political charitable institution.
                    </p>
                </div>
            
        </div>
    </div>
    <!-- =======================About Section End======================================================== -->
    <!-- <div class="container" id="service-list">
        <h2>Services</h2>
        <div class="service-list" >
            <div class="service-item">
                <div class="service-layout">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/cardiogram.png" class="card" alt="heartbeat">
                        </div>
                        <div class="service-content">
                            <h3>Women Clinic</h3>
                            <p>The maternity department provides top-quality maternity care, with a fully equipped delivery rooms, maternity ward, neonatal care unit,</p>
                        </div>
                    </div>
                    <button class="button">Read More</button>
                </div>
            </div>
            <div class="service-item">
                <div class="service-layout">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/cardiogram.png" class="card" alt="heartbeat">
                        </div>
                        <div class="service-content">
                            <h3>Women Clinic</h3>
                            <p>The maternity department provides top-quality maternity care, with a fully equipped delivery rooms, maternity ward, neonatal care unit,</p>
                        </div>
                    </div>
                    <button class="button">Read More</button>
                </div>
            </div>
            <div class="service-item">
                <div class="service-layout">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/cardiogram.png" class="card"  alt="heartbeat">
                        </div>
                        <div class="service-content">
                            <h3>Women Clinic</h3>
                            <p>The maternity department provides top-quality maternity care, with a fully equipped delivery rooms, maternity ward, neonatal care unit,</p>
                        </div>
                    </div>
                    <button class="button">Read More</button>
                </div>
            </div>
            <div class="service-item">
                <div class="service-layout">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/cardiogram.png" class="card"  alt="heartbeat">
                        </div>
                        <div class="service-content">
                            <h3>Women Clinic</h3>
                            <p>The maternity department provides top-quality maternity care, with a fully equipped delivery rooms, maternity ward, neonatal care unit,</p>
                        </div>
                    </div>
                    <button class="button">Read More</button>
                </div>
            </div>
            <div class="service-item">
                <div class="service-layout">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/cardiogram.png" class="card"  alt="heartbeat">
                        </div>
                        <div class="service-content">
                            <h3>Women Clinic</h3>
                            <p>The maternity department provides top-quality maternity care, with a fully equipped delivery rooms, maternity ward, neonatal care unit,</p>
                        </div>
                    </div>
                    <button class="button">Read More</button>
                </div>
            </div>
            <div class="service-item">
                <div class="service-layout">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/cardiogram.png" class="card"  alt="heartbeat">
                        </div>
                        <div class="service-content">
                            <h3>Women Clinic</h3>
                            <p>The maternity department provides top-quality maternity care, with a fully equipped delivery rooms, maternity ward, neonatal care unit,</p>
                        </div>
                    </div>
                    <button class="button">Read More</button>
                </div>
            </div>
            
        </div>    
    </div>
    ============================services container end================================ -->
    <div class="container">
        <div class="benefit-content">
            <div class="info">
                <h2>Specialized medical checkup tailored to the patient</h2>
                <div class="benefit-list">
                    <div class="benefit-item">
                        <div class="benefit-box">
                            <div class="benefit-icon">
                                <img src="images/hospital-facility.png" class="benefit-card"  alt="heartbeat">
                            </div>
                            <h3>All medical facility</h3>
                            <p>We provide a wide range of medical facilities under one roof, ensuring comprehensive care for our patients.</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-box">
                            <div class="benefit-icon">
                                <img src="images/hospital-facility.png" class="benefit-card"  alt="heartbeat">
                            </div>
                            <h3>All medical facility</h3>
                            <p>We provide a wide range of medical facilities under one roof, ensuring comprehensive care for our patients.</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-box">
                            <div class="benefit-icon">
                                <img src="images/hospital-facility.png" class="benefit-card"  alt="heartbeat">
                            </div>
                            <h3>All medical facility</h3>
                            <p>We provide a wide range of medical facilities under one roof, ensuring comprehensive care for our patients.</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-box">
                            <div class="benefit-icon">
                                <img src="images/hospital-facility.png" class="benefit-card"  alt="heartbeat">
                            </div>
                            <h3>All medical facility</h3>
                            <p>We provide a wide range of medical facilities under one roof, ensuring comprehensive care for our patients.</p>
                        </div>
                    </div>
                </div>
                
            </div>
                <img src="images/imge1.png" class="benefit-images" alt="">
            </div>
        </div>    
    </div>
    <div class="stretch-section">
            <div class="container">
                <div class="appointment">
                    <div class="appointment-header">
                        <h3>Online Appointments And Prescriptions</h3>
                        <button type="button" class="appointmemt-button"><a href="contact.php" class="appointment-link">Book Appointment</a></button>
                    </div>
                </div>
            </div>    
    </div>
    <!-- ==========blog-start================ -->
    <div class="container">
        <div class="news-heading">
            <h2>News</h2>
        </div>
        <div class="news-subheading">
            <h3> Specialist's Research Information & Articles</h3>
        </div>
        <div class="blog-container">
            <?php foreach ($posts as $post): ?>
                <div class="blog-box">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="http://localhost/blog_post/admin/blogs/<?php echo htmlspecialchars($post['image']); ?>" alt="" class="blog-image">
                        </div>
                        <div class="blog-date">
                            <?php echo date('d F Y', strtotime($post['created_at'])); ?>
                        </div>
                        <div class="blog-heading">
                            <a href="" class="blog-link"><?php echo htmlspecialchars($post['title']); ?></a>
                        </div>
                        <div class="blog-content">
                            <?php echo htmlspecialchars($post['short_description']); ?>
                        </div>
                        <div class="full-content">
                            <?php echo htmlspecialchars($post['content']); ?>
                        </div>
                        <button class="blog-button" onclick="toggleContent(this)">Read More</button>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <!-- ==========blog-End================ -->

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="aboutus">
                    <div class="logo">
                        <img src="images/csc-logo.png" alt="logo" class="csc-logo">
                    </div>
                    <div class="about-content">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam similique esse, recusandae ipsa ullam cum id! Dolores culpa deleniti, quam officia ab distinctio. Cumque veniam consectetur, doloremque porro deserunt dolores!</p>
                    </div>
                    <div class="location">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>Lorem ipsum dolor sit amet .</p>
                    </div>
                    <div class="contact">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <p>+91 ********</p>
                    </div>
                    <div class="email">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <p>abc@gmail.com</p>
                    </div>
                </div>
                <div class="useful-container">
                    <div>
                        <h3 class="footer-heading">Useful links</h3>
                        <div class="useful-links">
                            <a href="#" class="Useful">Home</a>
                        </div>
                        <div class="useful-links">
                            <a href="#" class="Useful">About Us</a>
                        </div>
                        <div class="useful-links">
                            <a href="#" class="Useful">Conatct</a>
                        </div>
                        <div class="useful-links">
                            <a href="#" class="Useful">Privacy Policy</a>
                        </div>

                    </div>
                </div>
                <div class="services-container">
                    <div>
                        <h3 class="footer-heading">Services</h3>
                        <div class="services-links">
                            <a href="#" class="services">Women Clinic</a>
                        </div>
                        <div class="services-links">
                            <a href="#" class="services">Children Clinic</a>
                        </div>
                        <div class="services-links">
                            <a href="#" class="services">Theatre Services</a>
                        </div>
                        <div class="services-links">
                            <a href="#" class="services">Dental Clinic</a>
                        </div>
                        <div class="services-links">
                            <a href="#" class="services">Ultra sound Scan</a>
                        </div>
                        <div class="services-links">
                            <a href="#" class="services">Laboratory</a>
                        </div>
                        <div class="services-links">
                            <a href="#" class="services">Palliative Care</a>
                        </div>
                        <div class="services-links">
                            <a href="#" class="services">Home care nurse</a>
                        </div>
                        <div class="services-links">
                            <a href="#" class="services">Ambulance Services</a>
                        </div>
                    </div>
                </div>
                <div class="Opening-container">
                    <div>
                        <h3 class="footer-heading">Opening Hours</h3>
                        <div class="useful-links">
                            <p class="Useful1">Monday - Friday ------ 09:00-17:00 </p>
                        </div>
                        <div class="useful-links">
                            <p class="Useful1">Monday - Friday ------ 09:00-17:00 </p>
                        </div>
                        <div class="useful-links">
                            <p class="Useful1">Monday - Friday ------ 09:00-17:00 </p>
                        </div>
                        <div class="useful-links">
                            <p class="Useful1">Monday - Friday ------ 09:00-17:00 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="Copyright">Copyright © 2024 - Design by Mohammad Usman.</p>
            </div>
        </div>
    </footer>
    <script>
        function toggleContent(button) {
            var blogItem = button.closest('.blog-item');
            var fullContent = blogItem.querySelector('.full-content');

            if (fullContent.style.display === 'none' || fullContent.style.display === '') {
                fullContent.style.display = 'block';
                button.textContent = 'Read Less';
            } else {
                fullContent.style.display = 'none';
                button.textContent = 'Read More';
            }
        }
    </script>
</body>

</html>