<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/profile-styles.css">
    <link rel="stylesheet" href="/assets/styles/Tutor/profile.css">
</head>

<section class="profile">
    <div class="main-container">
        <div class="left-container">
            <div class="avatar">
                <img src="/assets/images/user.jpeg" alt="John Doe">
            </div>
            <div class="user-data">
                <h1 class="name">
                    <?php echo e($userDetails['first_name'] . ' ' . $userDetails['last_name']); ?>
                </h1>
                <p class="username"><?php echo $userDetails['first_name'] ?></p>
            </div>

            <!-- Status badge -->
            <div class="status-badge">
                <span class="badge-active">
                    Active Instructor
                </span>
            </div>

            <!-- Quick stats-->
            <div class="quick-stats">
                <div class="stat-item">
                    <span class="stat-label">Students Taught</span>
                    <span class="stat-value">500+</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Course Rating</span>
                    <span class="stat-value">4.8/5.0</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Member Since</span>
                    <span class="stat-value">2021</span>
                </div>
            </div>

            <!-- Contact button -->
            <a href="mailto:johndoe@email.com" class="contact-button">
                Contact Instructor
            </a>

            <div class="reviews-section">
                <div class="reviews-header">
                    <h3>Student Reviews</h3>
                    <div class="overall-rating">
                        <span class="rating-number">4.8</span>
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="total-reviews">(234 reviews)</span>
                    </div>
                </div>

                <!-- Review Cards -->
                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <img src="/assets/images/user.jpeg" alt="Sarah Johnson" class="reviewer-avatar">
                            <div>
                                <div class="reviewer-name">Sarah Johnson</div>
                                <div class="review-course">
                                    <i class="fas fa-graduation-cap"></i>
                                    Advanced JavaScript Mastery
                                </div>
                            </div>
                        </div>
                        <span class="review-date">2 weeks ago</span>
                    </div>
                    <p class="review-text">This course exceeded my expectations! John's teaching style is clear and engaging. The practical examples really helped me understand complex concepts.</p>
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <img src="/assets/images/user.jpeg" alt="Michael Chen" class="reviewer-avatar">
                            <div>
                                <div class="reviewer-name">Michael Chen</div>
                                <div class="review-course">
                                    <i class="fas fa-graduation-cap"></i>
                                    React & Redux for Beginners
                                </div>
                            </div>
                        </div>
                        <span class="review-date">1 month ago</span>
                    </div>
                    <p class="review-text">Great introduction to React! The course structure is well thought out and the projects are very practical. John is always quick to respond to questions.</p>
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="load-more-container">
                    <button class="load-more-btn">
                        Load More Reviews
                    </button>
                </div>
            </div>
        </div>

        <div class="right-container">
            <div class="user-info">
                <h2>About Me</h2>
                <p class="user-bio">Passionate educator with over 5 years of experience in software development. I specialize in teaching modern web technologies and helping students build real-world projects. My teaching philosophy focuses on practical, hands-on learning experiences that prepare students for professional development roles.</p>

                <h3>Expertise Areas</h3>
                <ul class="skills-list">
                    <li>Web Development</li>
                    <li>JavaScript</li>
                    <li>Python</li>
                    <li>React</li>
                    <li>Node.js</li>
                    <li>Database Design</li>
                    <li>System Architecture</li>
                    <li>UI/UX Design</li>
                </ul>

                <h3>Teaching Specialties</h3>
                <ul class="contact-list" style="margin-top: 15px;">
                    <li><i class="fas fa-check"></i> Beginner to Advanced Web Development</li>
                    <li><i class="fas fa-check"></i> Full-Stack JavaScript Development</li>
                    <li><i class="fas fa-check"></i> Modern Frontend Frameworks</li>
                    <li><i class="fas fa-check"></i> Database Management Systems</li>
                </ul>

                <h3>Connect With Me</h3>
                <ul class="social-list">
                    <li><a href="#"><i class="fab fa-twitter"></i> @john_doe</a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i> linkedin.com/in/johndoe</a></li>
                    <li><a href="#"><i class="fab fa-github"></i> github.com/johndoe</a></li>
                </ul>
            </div>

            <h3 class="active-courses-header">Active Courses</h3>
            <!-- Course cards -->
            <div class="course-cards-container">
                <div class="stat-container">
                    <div>
                        <h5>Advanced JavaScript Mastery</h5>
                        <p class="course-rating">4.9 ★ • 2,500 students</p>
                    </div>
                    <a href="#" class="view-course-button">
                        View Course
                    </a>
                </div>

                <div class="stat-container">
                    <div>
                        <h5>React & Redux for Beginners</h5>
                        <p class="course-rating">4.8 ★ • 1,800 students</p>
                    </div>
                    <a href="#" class="view-course-button">
                        View Course
                    </a>
                </div>

                <div class="stat-container">
                    <div>
                        <h5>Full Stack Web Development</h5>
                        <p class="course-rating">4.7 ★ • 3,200 students</p>
                    </div>
                    <a href="#" class="view-course-button">
                        View Course
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>