<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Course/course-info.css">

</head>

<section class="course-info-container">
    <div class="main-content">

        <div class="course-header">
            <h1 class="course-info-title"><?php echo e($course['title']); ?></h1>
            <div class="course-meta">
                <div class="course-rating">★★★★★ 4.8 (256 reviews)</div>
                <div class="course-info">
                    <span>Duration: <?php echo e($course['duration']); ?> weeks</span> |
                    <span>Level: <?php echo e($course['grade_id']); ?></span> |
                    <span>Price: Rs. <?php echo e($course['price']); ?></span>
                </div>
                <a href="/course/enroll" class="enroll-button">Enroll Now</a>
            </div>
        </div>
        <div class="teacher-section">
            <img src="/assets/images/user.jpeg" alt="John Doe" class="teacher-avatar">
            <div class="teacher-info">
                <h3> <?php echo e($user['first_name']); ?> <?php echo e($user['last_name']); ?></h3>
                <p>Senior Developer with 10+ years of experience. Passionate about teaching and helping others master Python programming.</p>
            </div>
        </div>


        <div class="course-section">
            <h2 class="section-title">Course Description</h2>
            <p class="course-description">
                <?php echo e($course['description']); ?>
            </p>
        </div>

        <div class="course-section">
            <h2 class="section-title">Course Modules</h2>
            <div class="module-list">
                <!-- Module 1 -->
                <div class="module-item">
                    <div class="module-header" onclick="toggleModule(0)">
                        <div class="module-title">
                            <h4>Introduction to Python Programming</h4>
                            <span class="module-duration">4 hours</span>
                        </div>
                        <div class="module-toggle">
                            <svg class="chevron-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>

                    <div class="module-content" id="module-0">
                        <div class="module-description">
                            <p>Learn the fundamentals of Python programming including variables, data types, control structures, and basic syntax. This module provides a solid foundation for beginners.</p>
                        </div>

                        <div class="module-resources">
                            <h5>Resources</h5>
                            <ul>
                                <li>
                                    <a href="#" class="resource-link">
                                        <span class="resource-icon">📄</span>
                                        Python Basics Handbook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="resource-link">
                                        <span class="resource-icon">📄</span>
                                        Practice Exercises PDF
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="module-assignment">
                            <h5>Assignment</h5>
                            <div class="assignment-details">
                                <p>Create a simple calculator program using Python that can perform basic arithmetic operations.</p>
                                <div class="assignment-meta">
                                    <span class="deadline">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        Deadline: December 31, 2024
                                    </span>
                                </div>
                                <form class="assignment-upload" action="/submit-assignment" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="module_id" value="1">
                                    <div class="file-upload">
                                        <input type="file" name="assignment_file" id="assignment-1" required>
                                        <label for="assignment-1" class="file-label">
                                            Choose File
                                        </label>
                                    </div>
                                    <button type="submit" class="submit-assignment">Submit Assignment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="module-complete-toggle">
                        <input type="checkbox" id="module-complete-1" class="module-complete-checkbox">
                        <label for="module-complete-<?php echo $index; ?>" class="module-complete-label">
                            <span class="module-complete-text">Mark as Complete</span>
                            <span class="module-complete-icon">✓</span>
                        </label>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="module-item">
                    <div class="module-header" onclick="toggleModule(1)">
                        <div class="module-title">
                            <h4>Object-Oriented Programming in Python</h4>
                            <span class="module-duration">6 hours</span>
                        </div>
                        <div class="module-toggle">
                            <svg class="chevron-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>

                    <div class="module-content" id="module-1">
                        <div class="module-description">
                            <p>Master object-oriented programming concepts including classes, objects, inheritance, and polymorphism in Python.</p>
                        </div>

                        <div class="module-resources">
                            <h5>Resources</h5>
                            <ul>
                                <li>
                                    <a href="#" class="resource-link">
                                        <span class="resource-icon">📄</span>
                                        OOP Concepts Guide
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="resource-link">
                                        <span class="resource-icon">📄</span>
                                        Code Examples
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="module-assignment">
                            <h5>Assignment</h5>
                            <div class="assignment-details">
                                <p>Design and implement a simple banking system using OOP principles.</p>
                                <div class="assignment-meta">
                                    <span class="deadline">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        Deadline: January 15, 2025
                                    </span>
                                </div>
                                <div class="assignment-submitted">
                                    <span class="success-message">✓ Assignment submitted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-complete-toggle">
                        <input type="checkbox" id="module-complete-1" class="module-complete-checkbox">
                        <label for="module-complete-<?php echo $index; ?>" class="module-complete-label">
                            <span class="module-complete-text">Mark as Complete</span>
                            <span class="module-complete-icon">✓</span>
                        </label>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="module-item">
                    <div class="module-header" onclick="toggleModule(2)">
                        <div class="module-title">
                            <h4>Advanced Python Concepts</h4>
                            <span class="module-duration">8 hours</span>
                        </div>
                        <div class="module-toggle">
                            <svg class="chevron-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>

                    <div class="module-content" id="module-2">
                        <div class="module-description">
                            <p>Explore advanced Python features including decorators, generators, context managers, and metaclasses.</p>
                        </div>

                        <div class="module-resources">
                            <h5>Resources</h5>
                            <ul>
                                <li>
                                    <a href="#" class="resource-link">
                                        <span class="resource-icon">📄</span>
                                        Advanced Python PDF
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="resource-link">
                                        <span class="resource-icon">📄</span>
                                        Programming Exercises
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="module-complete-toggle">
                        <input type="checkbox" id="module-complete-1" class="module-complete-checkbox">
                        <label for="module-complete-<?php echo $index; ?>" class="module-complete-label">
                            <span class="module-complete-text">Mark as Complete</span>
                            <span class="module-complete-icon">✓</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="course-section">
        <h2 class="section-title">Course Resources</h2>
        <ul class="resource-list">
            <li class="resource-item">
                <div class="resource-icon">📚</div>
                <p>Course Textbook</p>
            </li>
            <li class="resource-item">
                <div class="resource-icon">💻</div>
                <p>Coding Examples</p>
            </li>
            <li class="resource-item">
                <div class="resource-icon">🎥</div>
                <p>Video Tutorials</p>
            </li>
            <li class="resource-item">
                <div class="resource-icon">📝</div>
                <p>Practice Quizzes</p>
            </li>
        </ul>
    </div>

    <script>
        function toggleModule(index) {
            const moduleContent = document.getElementById(`module-${index}`);
            const moduleItem = moduleContent.parentElement;
            const chevron = moduleItem.querySelector('.chevron-icon');

            moduleContent.classList.toggle('active');
            moduleItem.classList.toggle('expanded');
            chevron.classList.toggle('rotated');
        }
    </script>
</section>