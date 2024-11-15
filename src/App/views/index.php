<?php include $this->resolve("partials/_header.php"); ?>

<link rel="stylesheet" href="/assets/styles/main.css">


<section class="main">
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Unlock Your Potential with LearnHub</h1>
                <p>Discover a world of knowledge at your fingertips. Start your learning journey today!</p>
                <div class="cta-buttons">
                    <a href="#" class="cta-primary">Get Started</a>
                    <a href="/courses" class="cta-secondary">Explore Courses</a>
                </div>
            </div>
        </section>

        <section id="courses" class="courses">
            <h2>Featured Courses</h2>
            <div class="course-cards">
                <div class="course-card">
                    <img src="/assets/images/intro-to-web.jpg" alt="Course 1">
                    <h3>Introduction to Web Development</h3>
                    <p>Learn the basics of web developing with this comprehensive course.</p>
                    <button>Enroll Now</button>
                </div>
                <div class="course-card">
                    <img src="/assets/images/dataSci.png" alt="Course 2">
                    <h3>Data Science Fundamentals</h3>
                    <p>Dive into the world of data science and analytics.</p>
                    <button>Enroll Now</button>
                </div>
                <div class="course-card">
                    <img src="/assets/images/dm.jpg" alt="Course 3">
                    <h3>Digital Marketing Mastery</h3>
                    <p>Master the art of digital marketing in this hands-on course.</p>
                    <button>Enroll Now</button>
                </div>
            </div>
        </section>

        <section id="tutors" class="tutors">
            <h2>Our Expert Tutors</h2>
            <div class="tutor-cards">
                <div class="tutor-card">
                    <img src="/assets/images/teacher1.png" alt="Tutor 1">
                    <div class="tutor-info">
                        <h3>Dr. Jane Smith</h3>
                        <p>Computer Science</p>

                    </div>
                </div>
                <div class="tutor-card">
                    <img src="/assets/images/teacher2.jpeg" alt="Tutor 2">
                    <div class="tutor-info">
                        <h3>Prof. John Doe</h3>
                        <p>Data Science</p>
                    </div>
                </div>
                <div class="tutor-card">
                    <img src="/assets/images/teacher3.jpg" alt="Tutor 3">
                    <div class="tutor-info">
                        <h3>Sarah Johnson</h3>
                        <p>Digital Marketing</p>
                    </div>
                </div>
                <div class="tutor-card">
                    <img src="/assets/images/teacher4.jpg" alt="Tutor 4">
                    <div class="tutor-info">
                        <h3>Michael Brown</h3>
                        <p>Business Management</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="community-container">
            <section id="community" class="community">
                <h2>Join Our Learning Community</h2>
                <p>Connect with fellow learners, share your goals, and find the perfect course for your needs.</p>
                <a href="/post/create" class="community-btn" id="post-requirement">Post Your Course Requirement</a>
            </section>
        </div>

        <section class="features">
            <h2>Why Learn<span style="color:#FFC400;">Hub</span> ?</h2>
            <div class="feature-content">
                <div class="feature-left">
                    <h1>Join with Us!</h1>
                    <button class="feature-btn">Sign Up now!</button>
                    <img src="/assets/images/Online learning.svg" />
                </div>
                <div class="feature-cards">
                    <div class="feature-card">
                        <h3>Interactive Lessons</h3>
                        <p>Engage with dynamic content and real-time feedback.</p>
                    </div>
                    <div class="feature-card">
                        <h3>Progress Tracking</h3>
                        <p>Monitor your learning journey with detailed analytics.</p>
                    </div>
                    <div class="feature-card">
                        <h3>Personalized Learning Paths</h3>
                        <p>Tailored course recommendations based on your goals.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- <aside class="advertisement">
        <h3>Special Offer!</h3>
        <p>Get 20% off on all courses this week. Use code: LEARN20</p>
        <button>Claim Offer</button>
    </aside> -->




    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            const advertisement = document.querySelector('.advertisement');
            const claimOfferBtn = advertisement.querySelector('button');

            // Function to show the advertisement
            function showAdvertisement() {
                advertisement.style.display = 'block';
            }

            // Function to hide the advertisement
            function hideAdvertisement() {
                advertisement.style.display = 'none';
            }

            // Show the advertisement after 5 seconds
            setTimeout(showAdvertisement, 5000);

            // Hide the advertisement when the "Claim Offer" button is clicked
            claimOfferBtn.addEventListener('click', function() {
                hideAdvertisement();
                alert('Offer claimed! Use code LEARN20 at checkout.');
            });

            // Hide the advertisement when clicked outside
            // document.addEventListener('click', function(event) {
            //     if (!advertisement.contains(event.target) && event.target !== advertisement) {
            //         hideAdvertisement();
            //     }
            // });
        });
    </script>
</section>
<?php include $this->resolve('partials/_footer.php'); ?>