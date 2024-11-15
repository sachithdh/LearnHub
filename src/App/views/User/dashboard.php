<?php include $this->resolve("partials/_header.php"); ?>

<link rel="stylesheet" href="/assets/styles/profile-styles.css">
<link rel="stylesheet" href="/assets/styles/teacher-styles.css">

<section class="profile">
  <!-- Include the navbar component -->
  <!-- <?php include '../components/navbar.php' ?> -->
  <div class="main-container">
    <div class="left-container">
      <div class="avatar">
        <!-- User avatar image -->
        <img src="/assets/images/user.jpeg" alt="John Doe">
      </div>
      <div class="user-data">
        <!-- User name and username -->
        <h1 class="name">
          <?php echo e($userDetails['first_name'] . ' ' . $userDetails['last_name']); ?>
        </h1>
        <p class="username">@john_doe</p>
      </div>
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

    </div>
    <div class="right-container">


      <!-- <section class="teacher"> -->
      <div class="main-content">


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
        <section class="timeline-section">
          <h2>Course Schedule</h2>
          <table class="timeline-table">
            <tr>
              <th>Time</th>
              <th>Monday</th>
              <th>Tuesday</th>
              <th>Wednesday</th>
              <th>Thursday</th>
              <th>Friday</th>
            </tr>
            <tr>
              <td>9:00 AM</td>
              <td>
                <div class="course-slot">Intro to Programming</div>
              </td>
              <td></td>
              <td>
                <div class="course-slot">Web Development</div>
              </td>
              <td></td>
              <td>
                <div class="course-slot">Intro to Programming</div>
              </td>
            </tr>
            <tr>
              <td>11:00 AM</td>
              <td></td>
              <td>
                <div class="course-slot">Web Development</div>
              </td>
              <td></td>
              <td>
                <div class="course-slot">Intro to Programming</div>
              </td>
              <td></td>
            </tr>
            <tr>
              <td>03:00 PM</td>
              <td></td>
              <td></td>
              <td>
                <div class="course-slot">Web Development</div>
              </td>
              <td></td>
              <td>
                <div class="course-slot">Intro to Programming</div>
              </td>
              <td></td>
            </tr>
          </table>
        </section>
      </div>
      <!-- </section> -->

    </div>