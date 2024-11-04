<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/profile-styles.css">
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
                <p class="username">@john_doe</p>
            </div>

            <!-- Status badge -->
            <div style="text-align: center; margin: 20px 0;">
                <span style="background-color: #FFC400; color: #584300; padding: 8px 16px; border-radius: 20px; font-weight: 600;">
                    Active Instructor
                </span>
            </div>

            <!-- Quick stats in left container -->
            <div style="margin-top: 30px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                    <span style="color: #565D6D;">Students Taught</span>
                    <span style="font-weight: 600; color: #2c3e50;">500+</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                    <span style="color: #565D6D;">Course Rating</span>
                    <span style="font-weight: 600; color: #2c3e50;">4.8/5.0</span>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: #565D6D;">Member Since</span>
                    <span style="font-weight: 600; color: #2c3e50;">2021</span>
                </div>
            </div>

            <!-- Contact button -->
            <a href="mailto:johndoe@email.com" style="display: block; text-align: center; margin-top: 30px; padding: 14px 20px; background-color: #FFC400; color: #584300; text-decoration: none; border-radius: 12px; font-weight: 600; transition: all 0.3s ease;">
                Contact Instructor
            </a>
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

            <h3 style="margin-bottom: 20px; color: #1a1a1a;">Active Courses</h3>
            <!-- Course cards -->
            <div style="display: grid; gap: 20px;">
                <div class="stat-container" style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <h5>Advanced JavaScript Mastery</h5>
                        <p style="font-size: 14px; color: #565D6D;">4.9 ★ • 2,500 students</p>
                    </div>
                    <a href="#" style="padding: 8px 16px; background-color: #FFC400; color: #584300; text-decoration: none; border-radius: 8px; font-weight: 600;">
                        View Course
                    </a>
                </div>

                <div class="stat-container" style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <h5>React & Redux for Beginners</h5>
                        <p style="font-size: 14px; color: #565D6D;">4.8 ★ • 1,800 students</p>
                    </div>
                    <a href="#" style="padding: 8px 16px; background-color: #FFC400; color: #584300; text-decoration: none; border-radius: 8px; font-weight: 600;">
                        View Course
                    </a>
                </div>

                <div class="stat-container" style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <h5>Full Stack Web Development</h5>
                        <p style="font-size: 14px; color: #565D6D;">4.7 ★ • 3,200 students</p>
                    </div>
                    <a href="#" style="padding: 8px 16px; background-color: #FFC400; color: #584300; text-decoration: none; border-radius: 8px; font-weight: 600;">
                        View Course
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>