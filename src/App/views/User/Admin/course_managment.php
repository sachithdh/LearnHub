<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/User/Admin/course_managment.css">

</head>


<section class="main-content">
    <div class="header">
        <h1>Course Management</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search courses...">
            <button class="btn">Add New Course</button>
        </div>
    </div>

    <div class="courses-table-container">
        <table class="courses-table">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Instructor</th>
                    <th>Students</th>
                    <th>Lessons</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Web Development Fundamentals</td>
                    <td>John Smith</td>
                    <td>156</td>
                    <td>24</td>
                    <td><span class="status-badge status-active">Active</span></td>
                    <td>2024-03-15</td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn">Edit</button>
                            <button class="btn">View</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Python Programming</td>
                    <td>Sarah Johnson</td>
                    <td>0</td>
                    <td>18</td>
                    <td><span class="status-badge status-draft">Draft</span></td>
                    <td>2024-03-14</td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn">Edit</button>
                            <button class="btn">View</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Data Science Basics</td>
                    <td>Michael Brown</td>
                    <td>89</td>
                    <td>32</td>
                    <td><span class="status-badge status-active">Active</span></td>
                    <td>2024-03-13</td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn">Edit</button>
                            <button class="btn">View</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="table-footer">
            <div>Showing 1-3 of 15 courses</div>
            <div class="pagination">
                <button>&lt;</button>
                <button class="active">1</button>
                <button>2</button>
                <button>3</button>
                <button>&gt;</button>
            </div>
        </div>
    </div>
</section>


<?php include $this->resolve("partials/_header.php"); ?>