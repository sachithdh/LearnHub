<?php include $this->resolve("partials/_header.php"); ?>


<section class="main">
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Unlock Your Potential with LearnHub</h1>
                <p>Discover a world of knowledge at your fingertips. Start your learning journey today!</p>
                <div class="cta-buttons">
                    <button class="cta-primary">Get Started</button>
                    <button class="cta-secondary">Explore Courses</button>
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
                    <h3>Dr. Jane Smith</h3>
                    <p>Computer Science</p>
                    <button>View Profile</button>
                </div>
                <div class="tutor-card">
                    <img src="/assets/images/teacher2.jpeg" alt="Tutor 2">
                    <h3>Prof. John Doe</h3>
                    <p>Data Science</p>
                    <button>View Profile</button>
                </div>
                <div class="tutor-card">
                    <img src="/assets/images/teacher3.jpg" alt="Tutor 3">
                    <h3>Sarah Johnson</h3>
                    <p>Digital Marketing</p>
                    <button>View Profile</button>
                </div>
                <div class="tutor-card">
                    <img src="/assets/images/teacher4.jpg" alt="Tutor 4">
                    <h3>Michael Brown</h3>
                    <p>Business Management</p>
                    <button>View Profile</button>
                </div>
            </div>
        </section>

        <section id="community" class="community">
            <h2>Join Our Learning Community</h2>
            <p>Connect with fellow learners, share your goals, and find the perfect course for your needs.</p>
            <button class="cta-primary" id="post-requirement">Post Your Course Requirement</button>
        </section>

        <section class="features">
            <h2>LearnHub Features</h2>
            <div class="feature-cards">
                <div class="feature-card">
                    <!-- <img src="/api/placeholder/64/64" alt="Interactive Lessons"> -->
                    <h3>Interactive Lessons</h3>
                    <p>Engage with dynamic content and real-time feedback.</p>
                </div>
                <div class="feature-card">
                    <!-- <img src="/api/placeholder/64/64" alt="Progress Tracking"> -->
                    <h3>Progress Tracking</h3>
                    <p>Monitor your learning journey with detailed analytics.</p>
                </div>
                <div class="feature-card">
                    <!-- <img src="/api/placeholder/64/64" alt="Personalized Learning Paths"> -->
                    <h3>Personalized Learning Paths</h3>
                    <p>Tailored course recommendations based on your goals.</p>
                </div>
                <div class="feature-card">
                    <!-- <img src="/api/placeholder/64/64" alt="Certification"> -->
                    <h3>Certification</h3>
                    <p>Earn recognized certificates upon course completion.</p>
                </div>
            </div>
        </section>
    </main>

    <aside class="advertisement">
        <h3>Special Offer!</h3>
        <p>Get 20% off on all courses this week. Use code: LEARN20</p>
        <button>Claim Offer</button>
    </aside>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>About LearnHub</h4>
                <p>LearnHub is your gateway to knowledge, offering a wide range of courses to help you achieve your goals.</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#tutors">Tutors</a></li>
                    <li><a href="#community">Community</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: info@learnhub.com</p>
                <p>Phone: +1 (555) 123-4567</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 LearnHub. All rights reserved.</p>
        </div>
    </footer>

    <div id="requirement-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Post Your Course Requirement</h2>
            <form id="requirement-form">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="">Select a category</option>
                    <option value="programming">Programming</option>
                    <option value="data-science">Data Science</option>
                    <option value="marketing">Marketing</option>
                    <option value="business">Business</option>
                    <option value="other">Other</option>
                </select>
                <button type="submit" class="cta-primary">Submit Requirement</button>
            </form>
        </div>
    </div>

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

</html>