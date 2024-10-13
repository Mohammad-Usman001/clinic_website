<?php

include("../blog_post/admin/contact_form/functions.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="main-logo">
                    <a href="index.html">
                        <img src="images/csc-logo.png" alt="" class="main">
                    </a>
                </div>
                <ul class="navbar-link">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Departments</a></li>
                    <li><a href="#">Patient Resources</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="#" class="user-profile"><span><i class="fa-solid fa-user"></span></i></a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="Contactus">
        <div class="container">
            <div class="Contactus-container">
                <div class="appointment-header">
                    <h3>Contact Us</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form">
        <div class="container">
            <h3 class="contact-heading">Get in Touch with Us</h3>
            <div class="Contact-container">
                <div class="contact-format">
                    <div class="conatctus-form">
                        <h4>Conatct Us</h4>
                        <form action="../blog_post/admin/contact_form/add.php" method="post">
                            <div class="form">
                                <div class="form-flex-container">
                                    <div class="form-group">
                                        <input type="text" class="form-field" placeholder="Your Name*" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-field" placeholder="Your Email*"  name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-field" placeholder="Your Phone Number*" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-field" placeholder="Subject*"  name="subject" required>
                                    </div>
                                    <div class="form-group1">
                                        <textarea class="form-field" cols="100" rows="7" placeholder="Your Message*"  name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="Submit-button">
                                    <button type="submit" name="submit" class="button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="quick-format">
                    <div class="quick-contact">
                        <h4>Quick Contact</h4>
                        <div class="location-contact">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <p>Lorem ipsum dolor sit amet .</p>
                        </div>
                        <div class="contact-quick">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <p>+91 ********</p>
                        </div>
                        <div class="email-contact">
                            <span><i class="
                                fa-solid fa-envelope"></i></span>
                            <p>abc@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ===============footer section================================ -->
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
</body>

</html>