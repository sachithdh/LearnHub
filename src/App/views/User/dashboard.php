<?php include $this->resolve("partials/_header.php"); ?>

<head>
  <link rel="stylesheet" href="/assets/styles/dashboard.css">
</head>

<section class="profile">
  <!-- Navbar -->
  <!-- <?php include '../components/navbar.php' ?> -->

  <div class="main-container">
    <!-- Left Sidebar -->
    <div class="left-container">
      <!-- User Profile Summary -->
      <section class="user-profile-summary">
        <img src="/assets/images/user.jpeg" alt="User Profile Picture" class="profile-picture">
        <div class="user-info">
          <h3>Welcome, John Doe</h3>
          <p>johndoe@example.com</p>
        </div>
      </section>

      <!-- Course Statistics -->
      <section class="course-stats">
        <h2>Course Statistics</h2>
        <div class="stats-container">
          <div class="stat-card">
            <div class="stat-value">5</div>
            <div class="stat-label">Courses</div>
          </div>
          <div class="stat-card">
            <div class="stat-value">20</div>
            <div class="stat-label">Total Sessions</div>
          </div>
          <div class="stat-card">
            <div class="stat-value">18</div>
            <div class="stat-label">Attended Sessions</div>
          </div>
          <div class="stat-card">
            <div class="stat-value">36h 30m</div>
            <div class="stat-label">Total Time</div>
          </div>
        </div>
      </section>
      <!-- Upcoming Events/Tasks -->
      <section class="upcoming-tasks">
        <h2>Upcoming Tasks</h2>
        <ul>
          <li>Complete "HTML Basics" assignment by 11/18</li>
          <li>Prepare for "JavaScript Fundamentals" test on 11/20</li>
        </ul>
      </section>
      <!-- Notifications -->
      <section class="notifications">
        <h2>Notifications</h2>
        <ul>
          <li>New course available: Advanced Web Development</li>
          <li>Your course "Intro to Programming" starts in 1 hour</li>
          <li>Upcoming assignment due on Friday</li>
        </ul>
      </section>
      <!-- Recent Activity Feed -->
      <section class="recent-activity">
        <h2>Recent Activity</h2>
        <ul>
          <li>Completed "HTML Basics" module</li>
          <li>Scored 85% in "CSS Fundamentals" quiz</li>
          <li>Attended "JavaScript Basics" session</li>
        </ul>
      </section>
    </div>

    <!-- Main Content -->
    <div class="right-container">
      <div class="main-content">
        <!-- Timeline/Course Schedule -->
        <div class="timeline-container">
          <section class="timeline-section">
            <h2>Course Schedule</h2>
            <table class="timeline-table">
              <tr>
                <th>Day</th>
                <th>9:00 AM</th>
                <th>10:00 AM</th>
                <th>11:00 AM</th>
                <th>12:00 PM</th>
                <th>1:00 PM</th>
                <th>2:00 PM</th>
              </tr>
              <tr>
                <td>Monday</td>
                <td colspan="2">
                  <div class="course-slot">Intro to Programming</div>
                </td>
                <td colspan="2">
                  <div class="course-slot">Data Structures</div>
                </td>
                <td colspan="2">
                  <div class="course-slot">Algorithms</div>
                </td>
              </tr>
              <tr>
                <td>Tuesday</td>
                <td></td>
                <td colspan="2">
                  <div class="course-slot">Mathematics</div>
                </td>
                <td colspan="2">
                  <div class="course-slot">Web Development</div>
                </td>
                <td colspan="2">
                  <div class="course-slot">Intro to Programming</div>
                </td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td colspan="2">
                  <div class="course-slot">Web Development</div>
                </td>
                <td colspan="2">
                  <div class="course-slot">Database Systems</div>
                </td>
                <td></td>
                <td colspan="2">
                  <div class="course-slot">Data Science</div>
                </td>
              </tr>
              <!-- Add more days and time slots as needed -->
            </table>
          </section>
        </div>


        <!-- Enrolled Courses Section -->
        <div class="enrolled-courses">
          <h2>Enrolled Courses</h2>

          <!-- Loop through enrolled courses, displaying up to 4 in rows -->
          <div class="course-list">
            <div class="course-row">
              <h4>Introduction to Web Development</h4>
              <p>Learn the basics of HTML, CSS, and JavaScript.</p>
            </div>

            <div class="course-row">
              <h4>Advanced CSS Techniques</h4>
              <p>Master CSS and create visually engaging web layouts.</p>
            </div>

            <div class="course-row">
              <h4>JavaScript Fundamentals</h4>
              <p>Understand core JavaScript concepts and syntax.</p>
            </div>

            <div class="course-row">
              <h4>Backend Development with PHP</h4>
              <p>Learn PHP basics, server interactions, and database connectivity.</p>
            </div>
          </div>

          <!-- View All button -->
          <div class="view-all-container">
            <button class="view-all-button">View All Courses</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Quick Actions Section -->
  <div class="quick-actions">
    <h2>Quick Actions</h2>
    <button class="quick-action-button">Enroll in a New Course</button>
    <button class="quick-action-button">Update Profile</button>
    <button class="quick-action-button">Contact Support</button>
  </div>

</section>

<?php include $this->resolve("partials/_footer.php"); ?>