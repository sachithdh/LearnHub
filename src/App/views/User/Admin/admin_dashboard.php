<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/User/Admin/admin_dashboard.css">
    <link rel="stylesheet" href="/assets/styles/User/Admin/user_managment.css">
    <link rel="stylesheet" href="/assets/styles/User/Admin/course_managment.css">
    <link rel="stylesheet" href="/assets/styles/User/my-courses.css">


</head>

<section class="admin-dashboard">
    <div class="admin-main-container">
        <!-- Sidebar -->
        <div class="admin-sidebar">
            <div class="admin-profile">
                <h3>Admin Panel</h3>
                <img src="/assets/images/user.jpeg" alt="Admin" class="profile-picture">
                <p>System Administrator</p>
            </div>

            <nav class="admin-nav">
                <ul>
                    <li id="dashboardTab" class="nav-active" onclick="showSection('adminContent', 'dashboardTab')">Dashboard</li>
                    <li id="userManagementTab" onclick="showSection('userManagementContent', 'userManagementTab')">User Management</li>
                    <li id="courseManagementTab" onclick="showSection('courseManagementContent', 'courseManagementTab')">Course Management</li>
                    <!-- <li>Transactions</li> -->
                </ul>
            </nav>

        </div>

        <!-- Main Content -->
        <div id="adminContent" class="admin-content">
            <!-- Header -->
            <div class="admin-header">
                <h1>Dashboard Overview</h1>
                <div class="date-range">
                    <select>
                        <option>Last 7 days</option>
                        <option>Last 30 days</option>
                        <option>Last 3 months</option>
                        <option>Last year</option>
                    </select>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="admin-stats-grid">
                <div class="stat-box">
                    <h3>Total Users</h3>
                    <div class="value">15,487</div>
                    <div class="trend">↑ 12.5% Growth this month</div>
                </div>
                <div class="stat-box">
                    <h3>Student Users</h3>
                    <div class="value">14,892</div>
                    <div class="trend">↑ 8.3% Growth this month</div>
                </div>
                <div class="stat-box">
                    <h3>Teacher Users</h3>
                    <div class="value">595</div>
                    <div class="trend">↑ 15.2% Growth this month</div>
                </div>
                <div class="stat-box">
                    <h3>Total Courses</h3>
                    <div class="value">283</div>
                    <div class="trend">↑ 5.7% Growth this month</div>
                </div>
                <div class="stat-box">
                    <h3>Total Transactions</h3>
                    <div class="value">Rs. 75800</div>
                </div>
            </div>

            <!-- Growth Chart -->
            <div class="chart-container">
                <div class="chart-header">
                    <h2>User Growth Trend</h2>
                    <div class="chart-legend">
                        <span>Students</span>
                        <span>Teachers</span>
                    </div>
                </div>
                <svg class="chart-svg" viewBox="0 0 800 300">
                    <!-- Grid Lines -->
                    <line class="chart-grid" x1="50" y1="250" x2="750" y2="250" />
                    <line class="chart-grid" x1="50" y1="200" x2="750" y2="200" />
                    <line class="chart-grid" x1="50" y1="150" x2="750" y2="150" />
                    <line class="chart-grid" x1="50" y1="100" x2="750" y2="100" />
                    <line class="chart-grid" x1="50" y1="50" x2="750" y2="50" />

                    <!-- Chart Line -->
                    <path class="chart-line" d="M50,200 L185,180 L320,150 L455,120 L590,85 L725,50" />
                    <path class="chart-area" d="M50,200 L185,180 L320,150 L455,120 L590,85 L725,50 L725,250 L50,250 Z" />

                    <!-- Data Points -->
                    <circle class="chart-dot" cx="50" cy="200" r="4" />
                    <circle class="chart-dot" cx="185" cy="180" r="4" />
                    <circle class="chart-dot" cx="320" cy="150" r="4" />
                    <circle class="chart-dot" cx="455" cy="120" r="4" />
                    <circle class="chart-dot" cx="590" cy="85" r="4" />
                    <circle class="chart-dot" cx="725" cy="50" r="4" />
                </svg>
            </div>

            <!-- Recent Transactions -->
            <div class="chart-container">
                <div class="chart-header">
                    <h2>Recent Transactions</h2>
                    <button>View All</button>
                </div>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>User</th>
                            <th>Course</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#TRX-789456</td>
                            <td>John Doe</td>
                            <td>Advanced Web Development</td>
                            <td>Rs. 99.99</td>
                            <td><span class="status-badge status-active">Completed</span></td>
                            <td>2024-11-17</td>
                        </tr>
                        <tr>
                            <td>#TRX-789455</td>
                            <td>Jane Smith</td>
                            <td>UI/UX Design Basics</td>
                            <td>Rs. 79.99</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td>2024-11-17</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>

            <!-- Latest Users -->
            <div class="chart-container">
                <div class="chart-header">
                    <h2>Latest Registered Users</h2>
                    <button>View All</button>
                </div>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Joined Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alice Johnson</td>
                            <td>alice@example.com</td>
                            <td>Student</td>
                            <td>2024-11-17</td>
                            <td><span class="status-badge status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td>Robert Wilson</td>
                            <td>robert@example.com</td>
                            <td>Teacher</td>
                            <td>2024-11-16</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 
        ***********************
        ***********************
        ****User Managment*****
        ***********************
        ***********************
        -->

        <div id="userManagementContent" class="user-managment-container" style="display: none;">
            <div class="user-content">
                <div class="user-header">
                    <h1>User Management</h1>
                    <div class="header-actions">
                        <div class="search-form">
                            <input type="text" class="search-input" id="searchInput" placeholder="Search users...">
                            <button class="search-btn" onclick="searchUsers()">Search</button>
                        </div>
                        <button class="add-user-btn" onclick="toggleModal()">Add New User</button>
                    </div>
                </div>

                <!-- User Table -->
                <div class="user-table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Joined Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="userTableBody">
                            <?php foreach ($users as $user) : ?>

                                <tr>
                                    <td><?php echo $user['user_id']; ?></td>
                                    <td><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td>2024-01-15</td>
                                    <td>
                                        <button class="delete-btn">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div id="addUserModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="toggleModal()">&times;</span>
                        <h2>Add New User</h2>
                        <form id="addUserForm" onsubmit="addUser(event)">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" required>
                            </div>
                            <button type="submit" class="add-user-btn">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- 
        ***********************
        ***********************
        ****Course Managment*****
        ***********************
        ***********************
        -->
        <div id="courseManagementContent" class="course-content-section" style="display: none;">
            <section class="courses-page">
                <div class="main-container">
                    <!-- <div class="main-title">
                        <h1>My Courses</h1>
                    </div> -->

                    <div class="admin-header">
                        <h1>Course Management</h1>
                        <div class="header-actions">
                            <div class="search-form">
                                <input type="text" class="search-input" id="searchInput" placeholder="Search users...">
                                <button class="search-btn" onclick="searchUsers()">Search</button>
                            </div>
                            <button class="add-user-btn" onclick="toggleModal()"><a href="/course/create" style="text-decoration: none;"> Add New Course </a></button>
                        </div>
                    </div>

                    <div class="table-container">
                        <table class="courses-table">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Students</th>
                                    <th>Time</th>
                                    <th>Revenue</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($courses as $courseData): ?>
                                    <tr onclick="window.location.href='/courses/my-courses/<?php echo e($courseData['course_id']) ?>';" style="cursor: pointer;">
                                        <td>
                                            <div class="course-name">
                                                <?php echo e($courseData['title']) ?>
                                                <span class="grade-badge">Grade <?php echo e($courseData['grade_id']) ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="students-count">24 students</span>
                                        </td>
                                        <td>
                                            <div class="time-slot">
                                                <i class="fas fa-clock"></i>
                                                <?php
                                                $start = date('g:i A', strtotime($courseData['start_time']));
                                                $end = date('g:i A', strtotime($courseData['end_time']));
                                                ?>
                                                <span><?php echo e($start) ?> - <?php echo e($end) ?></span>
                                                <span class="day-badge"><?php echo e($courseData['day']) ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="revenue">Rs. <?php echo e($courseData['price'] * 24) ?></span>
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <a href="/manage-course/edit/<?php echo e($courseData['course_id']); ?>" class="btn btn-edit">Edit</a>
                                                <button onclick="event.stopPropagation(); showModal()" class="btn btn-delete">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Delete confirmation modal -->
                <div id="deleteModal" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Confirm Delete</h3>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this course? This action cannot be undone.
                        </div>
                        <div class="modal-footer">
                            <button onclick="hideModal()" class="btn btn-cancel">Cancel</button>
                            <form method="POST" action="/manage-course/delete/<?php echo e($courseData['course_id']) ?>">
                                <?php include $this->resolve("partials/_csrf.php"); ?>
                                <input type="hidden" name="_METHOD" value="DELETE" />
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>

    <script>
        // show add user
        function toggleModal() {
            const modal = document.getElementById('addUserModal');
            modal.style.display = modal.style.display === 'block' ? 'none' : 'block';
        }

        function showSection(contentId, activeTabId) {
            // Hide all content sections
            document.getElementById('adminContent').style.display = 'none';
            document.getElementById('userManagementContent').style.display = 'none';
            document.getElementById('courseManagementContent').style.display = 'none';

            // Remove the 'nav-active' class from all tabs
            document.getElementById('dashboardTab').classList.remove('nav-active');
            document.getElementById('userManagementTab').classList.remove('nav-active');
            document.getElementById('courseManagementTab').classList.remove('nav-active');

            // Display the selected content section
            document.getElementById(contentId).style.display = 'block';

            // Add the 'nav-active' class to the selected tab
            document.getElementById(activeTabId).classList.add('nav-active');
        }

        // Example of how to use the function:
        // showSection('adminContent', 'dashboardTab');

        window.onclick = function(event) {
            const modal = document.getElementById('addUserModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
        const modal = document.getElementById('deleteModal');

        function showModal() {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function hideModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target === modal) {
                hideModal();
            }
        }

        // Close modal on escape key press
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && modal.style.display === 'block') {
                hideModal();
            }
        });
    </script>
</section>

<?php include $this->resolve("partials/_footer.php"); ?>