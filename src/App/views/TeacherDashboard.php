<?php include $this->resolve("partials/_header.php"); ?>
<?php include $this->resolve("partials/_sidebar.php"); ?>


<section class="teacher">
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
</section>