<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="style.css"
        />
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    </head>

    <body style="background-color: #F9F7F7;" data-aos="fade-up" class="home">
        <!-- NavBar -->
        <div class="container-fluid home" id="nav_bar">
            <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom shadow">
                <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="./_temps/logo2-removebg.png" alt="MenteE Logo" height="40vh"/>
                    <img src="./_temps/logo2-name-removebg.png" alt="MenteE" height="20vh" style="margin-left: 1.5vh;"/>
                </div>
            
                <!-- Regular Navbar (Visible on Large Screens) -->
                <ul class="nav nav-pills d-none d-lg-flex">
                    <div id="navCenter">
                    <li class="nav-item"><a href="#" class="nav-link shake-button">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link shake-button">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link shake-button">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link shake-button">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link shake-button">Reviews</a></li>
                    </div>
                    <li class="nav-item" id="navC"><a href="./login.php" class="nav-link">Login</a></li>
                </ul>
            
                <!-- Three Dotted Menu (Visible on Small Screens) -->
                <div class="dropdown d-lg-none">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        &#x22EE; <!-- Vertical three dots icon -->
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item shake-button" href="#">Home</a></li>
                        <li><a class="dropdown-item shake-button" href="#">Features</a></li>
                        <li><a class="dropdown-item shake-button" href="#">FAQs</a></li>
                        <li><a class="dropdown-item shake-button" href="#">About</a></li>
                        <li><a class="dropdown-item shake-button" href="#">Reviews</a></li>
                        <li><a class="dropdown-item shake-button" href="./login.php">Login</a></li>
                    </ul>
                </div>
            </header>
            
        </div>

        <div id="carousels">
            <h2  id="typing-text" class="container"></h2>
            <!-- Carousels -->
            <div class="container">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2500">
                        <img src="./_temps/Mentorship-1.jpeg" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="./_temps/Mentorship-2.jpeg" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="./_temps/Mentorship-3.jpg" class="d-block w-100">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="container-fluid px-4 py-5 features" id="featured-3">            
            <h2 class="pb-2 border-bottom">Features</h2>
            <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
                <div class="feature col reveal">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
                        <img src="./_temps/person-lines-fill.svg" alt="person-lines-fill" height="35"/>
                    </div>

                    <h3 class="fs-2">Mentor-Mentee Matching</h3>
                    <p>Finding the right mentor has never been easier! Our platform connects students with experienced mentors from top colleges based on their interests, career goals, and field of study. Mentees can browse mentor profiles, check their expertise, and select the best match. For a more personalized experience, our system also suggests mentors based on shared interests and availability. Once matched, students can book sessions, ask questions, and receive expert guidance to achieve their academic and career goals. Start your journey with the perfect mentor today!</p>
                </div>

                <div class="feature col reveal">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
                        <img src="./_temps/calendar-week.svg" alt="calendar-week" height="35"/>
                    </div>

                    <h3 class="fs-2">Simple Booking & Scheduling</h3>
                    <p>Our platform makes it easy for students to book mentorship sessions with just a few clicks. Mentors set their available time slots, and students can select a convenient time based on their schedule. Once booked, both mentor and mentee receive instant confirmations and reminders to ensure a smooth session. Need to reschedule? No problem! Our flexible system allows easy rescheduling and cancellations. Stay organized, never miss a session, and get the guidance you need, when you need it!</p>
                </div>

                <div class="feature col reveal">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
                        <img src="./_temps/bookmarks.svg" alt="bookmarks" height="35"/>
                    </div>

                    <h3 class="fs-2">Simple Dashboard for Users</h3>
                    <p>Our easy-to-use dashboard helps you stay organized and track your mentorship journey effortlessly. Mentees can view upcoming sessions, check mentor details, and track progress, while mentors can manage bookings, update availability, and respond to mentee requests—all in one place! With a clean and simple design, you get a smooth experience without any confusion. Stay on top of your mentorship journey with just a few clicks! </p>
                </div>
            </div>
        </div>

        <!-- FAQ's -->
        <div class="container-fluid px-4 py-5 FAQs" id="icon-grid">
            <h2 class="pb-2 border-bottom">FAQ's</h2>
        
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-3 FAQs">
                <div class="col d-flex align-items-start">
                    <div class="reveal">
                        <h3 class="fw-bold mb-0 fs-4">How do I choose the right mentor for me?</h3>
                        <p>You can browse through our directory of mentors and filter by areas of expertise, availability, and experience. Each mentor has a profile with their qualifications, areas of specialization, and reviews from previous mentees. You can also use our matching tool, which will suggest mentors based on your goals.</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start FAQ">
                    <div class="reveal">
                        <h3 class="fw-bold mb-0 fs-4">Is there a fee for the mentorship?</h3>
                        <p>Yes, some mentorship programs on our platform are paid, while others may offer free sessions. The cost varies depending on the mentor and the type of mentorship you select. Pricing details are available on each mentor’s profile.</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start">
                    <div class="reveal">
                        <h3 class="fw-bold mb-0 fs-4">How are mentors selected?</h3>
                        <p>All mentors on MenteE are carefully vetted to ensure they have the necessary qualifications, experience, and expertise. They undergo a thorough application process and are required to meet specific standards before being approved.</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start FAQ">
                    <div class="reveal">
                        <h3 class="fw-bold mb-0 fs-4">How does the mentorship work?</h3>
                        <p>Mentorship can happen through video calls, phone calls, or messaging, depending on your agreement with your mentor. Sessions are typically scheduled based on mutual availability, and you can choose the frequency and duration of meetings that best suit your goals.</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start FAQ">
                    <div class="reveal">
                        <h3 class="fw-bold mb-0 fs-4">Can I change my mentor if I’m not satisfied?</h3>
                        <p>Yes! If you feel that your current mentor is not the right fit, you can switch to another mentor. We encourage open communication with your mentor to ensure a positive and productive relationship.
                        </p>
                    </div>
                </div>

                <div class="col d-flex align-items-start">
                    <div class="reveal">
                        <h3 class="fw-bold mb-0 fs-4">What if I miss a session?</h3>
                        <p>If you miss a session, please inform your mentor ahead of time to reschedule. We recommend setting reminders for your meetings to ensure you don’t forget. Cancellation policies may vary, so check with your mentor or the platform’s terms for more details.</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start FAQ">
                    <div class="reveal">
                        <h3 class="fw-bold mb-0 fs-4">Can I be a mentor on MenteE?</h3>
                        <p>Yes! If you have the relevant experience and a passion for helping others, you can apply to become a mentor on our platform. Simply fill out the application form, and our team will review your credentials and experience to determine if you're a good fit.</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start">
                    <div class="reveal">
                        <h3 class="fw-bold mb-0 fs-4">Can I leave a review for my mentor?</h3>
                        <p>Yes, after each session, you can leave feedback about your mentor. Reviews help other mentees make informed decisions and provide valuable insights into the mentor’s strengths and areas of expertise.</p>
                    </div>
                </div>
            </div>
        </div>
        
         
        <!-- About -->
        <div class="about py-5" id="about_">
            <h2 class="pb-2 border-bottom reveal" style="text-align: justify;">About Us</h2>
            <div class="py-3 reveal">
                <p>
                    Many students face challenges in securing admission to top colleges and often lack the guidance needed to navigate their 
                    educational and career paths effectively. Without access to proper mentorship, they struggle to stay updated with advancements in 
                    technology and emerging career opportunities, leaving them at a  disadvantage.
                    To address this, we are building a platform that connects 
                    students with mentors from top colleges.
                    These mentors provide personalized guidance, career advice, and industry insights, helping students bridge the knowledge gap and 
                    achieve their goals. This platform not only empowers students with the mentorship 
                    they need but also provides mentors with a meaningful opportunity to 
                    earn by sharing their expertise and supporting the next generation. It’s 
                    a win-win solution designed to create a stronger, more connected educational community.
                </p>
            </div>
            
        </div>
    
        <!-- Reviews -->
        <div class="row review" id="reviews">
            <h2 class="pb-2 border-bottom" style="text-align: justify; margin-left: 1.5rem;">Review</h2>
            <div class="col-lg-4">
                <img src="./_temps/Oliver L.crop.jpg" alt="Oliver"/>
                <h3 class="fs-2 reveal">Oliver L.</h3>
                <p class="reveal">"Navigating college and career decisions is never easy, but this mentorship platform has been an amazing resource. My mentor helped me make informed choices about my degree and career path. Their experience gave me the clarity and confidence to move forward."</p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="./_temps/Sophia C.crop.jpg" alt="Sophia"/>
                <h3 class="fs-2 reveal">Sophia C.</h3>
                <p class="reveal">"I joined this platform after completing a coding bootcamp to get advice from someone who had already gone through the traditional college route. My mentor gave me detailed guidance on how to apply for graduate programs and the best steps to take in the industry. It was a great experience"</p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
                <img src="./_temps/Max P.crop.jpg" alt="Max"/>
                <h3 class="fs-2 reveal">Max P.</h3>
                <p class="reveal">"The guidance I received on industry trends, new technologies, and networking opportunities from my mentor was incredibly insightful. It’s reassuring to know that I can always rely on this platform for continuous support as I navigate my academic and professional journey."</p>
            </div><!-- /.col-lg-4 -->
        </div>

        <!-- Footer -->
        <div class="container-fluid" style="background-color: #0d0550;">
            <div class="col-12" style="text-align: center;">
                <h3 style="color: white;">Reach out us at : lamentee.work@gmail.com</h3>
            </div>
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 border-top border-bottom">              
              <div class="col mb-3">
                <u><h5>About Us</h5></u>
                <p style="color: white;">
                    We four Developers of these Site are currently First Year Undergrad at National Institute of Technology, Prayagraj(MNNIT).
                </p>
              </div>
          
              <div class="col mb-3" style="text-align: center;">
                <u><h5>Bhargav Miyani</h5></u>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/bhargav-miyani-3a6243313?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app
                    " class="nav-link p-0"><img src="./_temps/linkedin.svg"/> LinkedIn</a></li>
                  <li class="nav-item mb-2"><a href="https://github.com/Lucifer-08" class="nav-link p-0"><img src="./_temps/github.svg"/> Git-Hub</a></li>
                  <li class="nav-item mb-2"><a href="https://discord.gg/TnMxT8kF" class="nav-link p-0"><img src="./_temps/discord.svg"/> Discord</a></li>
                  <li class="nav-item mb-2"><a href="https://www.instagram.com/the_bhargavv?igsh=aWZnYXZ6aGtpMW1o" class="nav-link p-0"><img src="./_temps/instagram.svg"/> Instragram</a></li>
                </ul>
              </div>
          
              <div class="col mb-3" style="text-align: center;">
                <u><h5>Yug R. Shah</h5></u>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/yugshah7777/" class="nav-link p-0"><img src="./_temps/linkedin.svg"/> LinkedIn</a></li>
                  <li class="nav-item mb-2"><a href="https://github.com/yugshah7777" class="nav-link p-0"><img src="./_temps/github.svg"/> Git-Hub</a></li>
                  <li class="nav-item mb-2"><a href="https://discord.gg/8ENYEXer" class="nav-link p-0"><img src="./_temps/discord.svg"/> Discord</a></li>
                  <li class="nav-item mb-2"><a href="https://www.instagram.com/yugshah7777/" class="nav-link p-0"><img src="./_temps/instagram.svg"/> Instragram</a></li>
                </ul>
              </div>
          
              <div class="col mb-3" style="text-align: center;">
                <u><h5>Neel Mendapara</h5></u>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="www.linkedin.com/in/neel-mendapara-08244b324" class="nav-link p-0"><img src="./_temps/linkedin.svg"/> LinkedIn</a></li>
                  <li class="nav-item mb-2"><a href="https://github.com/Neel100606" class="nav-link p-0"><img src="./_temps/github.svg"/> Git-Hub</a></li>
                  <li class="nav-item mb-2"><a href="https://discord.gg/tEMJMFKn" class="nav-link p-0"><img src="./_temps/discord.svg"/> Discord</a></li>
                  <li class="nav-item mb-2"><a href="https://www.instagram.com/neel.mendapara/" class="nav-link p-0"><img src="./_temps/instagram.svg"/> Instragram</a></li>
                </ul>
              </div>
          
              <div class="col mb-3" style="text-align: center;">
                <u><h5>Yagnik Chavda</h5></u>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0"><img src="./linkedin.svg"/> LinkedIn</a></li>
                  <li class="nav-item mb-2"><a href="https://github.com/Yagnik01" class="nav-link p-0"><img src="./_temps/github.svg"/> Git-Hub</a></li>
                  <li class="nav-item mb-2"><a href="https://discord.gg/aDdFnkj7" class="nav-link p-0"><img src="./_temps/discord.svg"/> Discord</a></li>
                  <li class="nav-item mb-2"><a href="https://www.instagram.com/yagnik_chavda_07/#" class="nav-link p-0"><img src="./_temps/instagram.svg"/> Instragram</a></li>
                </ul>
              </div>
            </footer>
            <div class="mt-2 pb-2" style="text-align: end;">
                <img src="./_temps/logo1-removebg-final.png" style="height: 2.5rem;"/>
                <p style="color: white; display: inline;">© MenteE</p>
            </div>
          </div>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const textElement = document.getElementById("typing-text");
                const textArray = ["Welcome to the Mentorship Platform!", "Find the best mentors!", "Shape your future with us!"];
                let textIndex = 0;
                let charIndex = 0;
                let isDeleting = false;
            
                function typeEffect() {
                    let currentText = textArray[textIndex];
                    let displayedText = currentText.substring(0, charIndex);
            
                    textElement.textContent = displayedText;
            
                    if (!isDeleting && charIndex < currentText.length) {
                        charIndex++;
                        setTimeout(typeEffect, 100); // Typing speed
                    } else if (isDeleting && charIndex > 0) {
                        charIndex--;
                        setTimeout(typeEffect, 50); // Deleting speed
                    } else {
                        isDeleting = !isDeleting;
                        if (!isDeleting) {
                            textIndex = (textIndex + 1) % textArray.length; // Move to the next text
                        }
                        setTimeout(typeEffect, 1000); // Pause before retyping
                    }
                }
            
                typeEffect(); // Start the animation
            });
        </script>
        
        <script src="reveal.js"></script>
        <script src="script.js"></script>
    </body>
</html>
