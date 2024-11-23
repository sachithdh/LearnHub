<?php include $this->resolve('partials/_header.php'); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Course/user_course_stats.css">
</head>
<section class="user-course-stats stat-container">
    <div class="stats-header">
        <h1>Course Performance Dashboard</h1>
        <div class="user-info">
            <img src="/assets/images/user.jpeg" alt="User Avatar" class="user-avatar">
            <div class="user-details">
                <h2>John Doe</h2>
                <p>Enrolled Course: Web Development Bootcamp</p>
            </div>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat-card attendance">
            <h3>Attendance</h3>
            <div class="progress-circle" data-progress="85">
                <svg viewBox="0 0 36 36">
                    <path d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                        fill="none"
                        stroke="#eee"
                        stroke-width="3" />
                    <path id="attendance-path" d=""
                        fill="none"
                        stroke="#FFC400"
                        stroke-width="3" />
                </svg>
                <span class="progress-text">85%</span>
            </div>
            <p>No. of classes: 35</p>
            <p>No. of attended classes: 28</p>
        </div>

        <div class="stat-card assignments">
            <h3>Assignments</h3>
            <div class="assignment-list">
                <div class="assignment-item completed">
                    <span>HTML & CSS Project</span>
                    <span class="status">✓ Completed</span>
                </div>
                <div class="assignment-item completed">
                    <span>JavaScript Challenges</span>
                    <span class="status">✓ Completed</span>
                </div>
                <div class="assignment-item pending">
                    <span>React Final Project</span>
                    <span class="status">⌛ Pending</span>
                </div>
            </div>
        </div>

        <div class="stat-card grades">
            <h3>Grade Summary</h3>
            <div class="grade-breakdown">
                <div class="grade-item">
                    <span>Current Grade</span>
                    <span class="grade-value">A-</span>
                </div>
                <div class="grade-item">
                    <span>Class Rank</span>
                    <span class="grade-value">3rd/25</span>
                </div>
            </div>
        </div>

        <div class="stat-card payments">
            <h3>Payment Status</h3>
            <div class="payment-details">
                <div class="payment-item">
                    <span>Total Course Fee</span>
                    <span>Rs. 1,500.00 / month</span>
                </div>
                <div class="payment-item">
                    <span>Total Paid Amount</span>
                    <span>Rs. 15,000.00</span>
                </div>
                <div class="payment-item">
                    <span>Current Status</span>
                    <span>Paid</span>
                </div>
                <!-- <div class="payment-status pending">
                    Pending Payment
                </div> -->
            </div>
        </div>
    </div>
</section>

<?php include $this->resolve('partials/_footer.php'); ?>