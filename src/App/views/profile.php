<?php include $this->resolve("partials/_header.php"); ?>

<section class="profile">
    <!-- Include the navbar component -->
    <?php include '../components/navbar.php' ?>
    <div class="profile-container">
        <div class="left-container">
            <div class="avatar">
                <!-- User avatar image -->
                <img src="/assets/images/user.jpeg" alt="John Doe">
            </div>
            <div class="user-data">
                <!-- User name and username -->
                <h1 class="name">John Doe</h1>
                <p class="username">@john_doe</p>
            </div>
            <!-- Edit profile button -->
            <button class="edit-button">Edit Profile</button>

            <div class="courses">
                <h3>Courses</h3>

                <!-- List of courses -->
                <div class="course-container">
                    <p class="course-title">Computer Science</p>
                    <svg class="course-left-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="course-container">
                    <p class="course-title">Physics</p>
                    <svg class="course-left-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="course-container">
                    <p class="course-title">Chemistry</p>
                    <svg class="course-left-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
            </div>
            <div class="tags">
                <h4>#TAGS</h4>
                <!-- List of tags -->
                <p>computer science</p>
                <p>physics</p>
                <p>chemistry</p>
                <p>English</p>
            </div>
        </div>
        <div class="right-container">
            <div class="user-info">
                <h2>About Me</h2>
                <!-- User bio -->
                <p class="user-bio">Passionate learner and aspiring software developer. I love exploring new technologies and pushing my boundaries in the world of coding.</p>

                <h3>Contact Information</h3>
                <!-- Contact information list -->
                <ul class="contact-list">
                    <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                    <li><i class="fas fa-envelope"></i> johndoe@email.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> New York, NY</li>
                </ul>

                <h3>Social Media</h3>
                <!-- Social media links -->
                <ul class="social-list">
                    <li><a href="#"><i class="fab fa-twitter"></i> @john_doe</a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i> linkedin.com/in/johndoe</a></li>
                    <li><a href="#"><i class="fab fa-github"></i> github.com/johndoe</a></li>
                </ul>

                <h3>Skills</h3>
                <!-- List of skills -->
                <ul class="skills-list">
                    <li>JavaScript</li>
                    <li>Python</li>
                    <li>React</li>
                    <li>Node.js</li>
                    <li>SQL</li>
                </ul>
            </div>
            <!-- Statistics containers -->
            <div class="stat-container">
                <h5>Registered Courses</h5>
                <p>05</p>
            </div>
            <div class="stat-container">
                <h5>Attendance</h5>
                <p>85%</p>
            </div>
            <div class="stat-container">
                <h5>Registered Courses</h5>
                <p>05</p>
            </div>
        </div>
    </div>

    <!-- Edit profile PopUp -->
    <div class="edit-profile-popup">
        <div class="edit-profile-content">
            <h2>Edit Profile</h2>
            <form id="edit-profile-form">
                <div class="form-group">
                    <label for="edit-name">Name</label>
                    <input type="text" id="edit-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="edit-username">Username</label>
                    <input type="text" id="edit-username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="edit-bio">Bio</label>
                    <textarea id="edit-bio" name="bio" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="edit-phone">Phone Number</label>
                    <input type="tel" id="edit-phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="edit-location">Location</label>
                    <input type="text" id="edit-location" name="location">
                </div>
                <div class="form-group">
                    <label for="edit-password">Change Password</label>
                    <input type="password" id="edit-password" name="password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Submit Changes</button>
                    <button type="button" class="btn-cancel">Cancel</button>
                </div>
            </form>
            <button class="btn-delete-account">Delete Account</button>
        </div>
    </div>

    <script>
        const editProfileButton = document.querySelector('.edit-button');
        const editProfilePopup = document.querySelector('.edit-profile-popup');
        const cancelButton = document.querySelector('.btn-cancel');

        editProfileButton.addEventListener('click', () => {
            editProfilePopup.style.display = 'block';
        });

        cancelButton.addEventListener('click', () => {
            editProfilePopup.style.display = 'none';
        });

        // Close the popup if the user clicks outside of it
        editProfilePopup.addEventListener('click', (e) => {
            if (e.target === editProfilePopup) {
                editProfilePopup.style.display = 'none';
            }
        });
    </script>
</section>

</html>