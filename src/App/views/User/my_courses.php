<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/User/my-courses.css">
</head>

<section class="courses-page">
    <div class="main-container">
        <div class="main-title">
            <h1>My Courses</h1>
            <p>Track your progress and continue learning</p>
        </div>

        <div class="courses-grid">
            <!-- Computer Science Course -->
            <div class="course-card">
                <div class="course-header">
                    <div class="course-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="course-title">
                        <h3>Computer Science</h3>
                        <p>Advanced Level</p>
                    </div>
                </div>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>12 weeks course</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-book"></i>
                        <span>8 modules completed</span>
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 75%"></div>
                </div>
                <div class="course-footer">
                    <button class="continue-btn">Continue Learning</button>
                    <button class="details-btn">Details</button>
                </div>
            </div>

            <!-- Physics Course -->
            <div class="course-card">
                <div class="course-header">
                    <div class="course-icon">
                        <i class="fas fa-atom"></i>
                    </div>
                    <div class="course-title">
                        <h3>Physics</h3>
                        <p>Intermediate Level</p>
                    </div>
                </div>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>10 weeks course</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-book"></i>
                        <span>5 modules completed</span>
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 45%"></div>
                </div>
                <div class="course-footer">
                    <button class="continue-btn">Continue Learning</button>
                    <button class="details-btn">Details</button>
                </div>
            </div>

            <!-- Chemistry Course -->
            <div class="course-card">
                <div class="course-header">
                    <div class="course-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="course-title">
                        <h3>Chemistry</h3>
                        <p>Beginner Level</p>
                    </div>
                </div>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>8 weeks course</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-book"></i>
                        <span>3 modules completed</span>
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 30%"></div>
                </div>
                <div class="course-footer">
                    <button class="continue-btn">Continue Learning</button>
                    <button class="details-btn">Details</button>
                </div>
            </div>
        </div>
    </div>
</section>