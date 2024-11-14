<?php include $this->resolve("partials/_header.php"); ?>
<?php include $this->resolve("partials/_alert.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Course/create-course.css">
</head>

<section class="create-course-container">
    <div class="create-course-header">
        <h1>Edit Course</h1>
        <p>Share your knowledge with the world</p>
    </div>

    <form class="create-course-form" id="createCourseForm" method="POST" action="/manage-course/edit/<?php echo $course['course_id']; ?>">
        <div class="create-course-section">
            <h2>Basic Information</h2>
            <div class="create-course-form-group">
                <label for="courseTitle">Course Title *</label>
                <input type="text" id="title" name="title" value="<?php echo e($course['title']); ?>" required>
            </div>
            <div class="create-course-form-group">
                <label for="description">Course Description *</label>
                <textarea id="description" name="description" required><?php echo e($course['description']); ?></textarea>
            </div>
            <!-- <div class="create-course-form-group">
                <label for="courseImage">Course Image URL *</label>
                <input type="url" id="courseImage" name="courseImage" required>
            </div> -->
            <div class="create-course-form-group">
                <label for="price">Course Price (Rs.) *</label>
                <div style="display: flex;flex-direction: row; padding: 10px;">

                    <input type="number" id="price" name="price" value="<?php echo e($course['price']); ?>" min="0" step="0.01" required>

                    <select id="pricing_period" name="pricing_period" style="margin-left:16px" required>
                        <option value="">Select Price period</option>
                        <option value="daily" <?php echo ($course['pricing_period'] == 'daily') ? 'selected' : ''; ?>>Daily</option>
                        <option value="monthly" <?php echo ($course['pricing_period'] == 'monthly') ? 'selected' : ''; ?>>Monthly</option>
                        <option value="yearly" <?php echo ($course['pricing_period'] == 'yearly') ? 'selected' : ''; ?>>Yearly</option>
                        <option value="wholecourse" <?php echo ($course['pricing_period'] == 'wholecourse') ? 'selected' : ''; ?>>For whole course</option>
                    </select>

                </div>
            </div>
            <div class="create-course-form-group">
                <label for="subject_id">Subject *</label>
                <select id="subject_id" name="subject_id" required>
                    <option value="">Select a subject</option>
                    <option value="1" <?php echo ($course['subject_id'] == '1') ? 'selected' : ''; ?>>Physics</option>

                    <option value="2" <?php echo ($course['subject_id'] == '2') ? 'selected' : ''; ?>>Combined Mathematics</option>
                    <option value="3" <?php echo ($course['subject_id'] == '3') ? 'selected' : ''; ?>>Chemistry</option>
                    <option value="4" <?php echo ($course['subject_id'] == '4') ? 'selected' : ''; ?>>ICT</option>
                    <option value="5" <?php echo ($course['subject_id'] == '5') ? 'selected' : ''; ?>>Science for Technology</option>
                    <option value="6" <?php echo ($course['subject_id'] == '6') ? 'selected' : ''; ?>>Bio Science Technology</option>
                    <option value="7" <?php echo ($course['subject_id'] == '7') ? 'selected' : ''; ?>>Mathematics</option>
                    <option value="8" <?php echo ($course['subject_id'] == '8') ? 'selected' : ''; ?>>Science</option>
                    <option value="9" <?php echo ($course['subject_id'] == '9') ? 'selected' : ''; ?>>Geogrophy</option>
                    <option value="10" <?php echo ($course['subject_id'] == '10') ? 'selected' : ''; ?>>Econ</option>
                    <option value="11" <?php echo ($course['subject_id'] == '11') ? 'selected' : ''; ?>>Political Science</option>
                    <option value="12" <?php echo ($course['subject_id'] == '12') ? 'selected' : ''; ?>>Logics</option>
                </select>
            </div>
            <div class="create-course-form-group">
                <label for="day">Day (in weeks) *</label>
                <select id="day" name="day" required>
                    <option value="">Select a day</option>
                    <option value="sun" <?php echo ($course['day'] == 'sun') ? 'selected' : ''; ?>>Sunday</option>
                    <option value="mon" <?php echo ($course['day'] == 'mon') ? 'selected' : ''; ?>>Monday</option>
                    <option value="tue" <?php echo ($course['day'] == 'tue') ? 'selected' : ''; ?>>Tuesday</option>
                    <option value="wed" <?php echo ($course['day'] == 'wed') ? 'selected' : ''; ?>>Wednesday</option>
                    <option value="thu" <?php echo ($course['day'] == 'thu') ? 'selected' : ''; ?>>Thursday</option>
                    <option value="fri" <?php echo ($course['day'] == 'fri') ? 'selected' : ''; ?>>Friday</option>
                    <option value="sat" <?php echo ($course['day'] == 'sat') ? 'selected' : ''; ?>>Saturday</option>

                </select>
            </div>
            <div class="create-course-form-group">
                <label>Course Time*</label> <br>
                <div style="display: flex; flex-direction: row; margin-left: 26px;">
                    <label for="start_time" style="margin-right: 26px;">Start Time*</label>
                    <input type="time" value="<?php echo e($course['start_time']); ?>" id="start_time" name="start_time" min="0" step="60" placeholder="08:00" required>

                    <label for="end_time" style="margin-right: 26px;margin-left: 16px;">End Time*</label>
                    <input type="time" value="<?php echo e($course['end_time']); ?>" id="end_time" name="end_time" min="0" placeholder="10:00" required>
                </div>
            </div>
            <div class="create-course-form-group">
                <label for="grade_id">Course Level *</label>
                <select id="grade_id" name="grade_id" required>
                    <option value="">Select a level</option>
                    <option value="1" <?php echo ($course['grade_id'] == '1') ? 'selected' : ''; ?>>Grade 1</option>
                    <option value="2" <?php echo ($course['grade_id'] == '2') ? 'selected' : ''; ?>>Grade 2</option>
                    <option value="3" <?php echo ($course['grade_id'] == '3') ? 'selected' : ''; ?>>Grade 3</option>
                    <option value="4" <?php echo ($course['grade_id'] == '4') ? 'selected' : ''; ?>>Grade 4</option>
                    <option value="5" <?php echo ($course['grade_id'] == '5') ? 'selected' : ''; ?>>Grade 5</option>
                    <option value="6" <?php echo ($course['grade_id'] == '6') ? 'selected' : ''; ?>>Grade 6</option>
                    <option value="7" <?php echo ($course['grade_id'] == '7') ? 'selected' : ''; ?>>Grade 7</option>
                    <option value="8" <?php echo ($course['grade_id'] == '8') ? 'selected' : ''; ?>>Grade 8</option>
                    <option value="9" <?php echo ($course['grade_id'] == '9') ? 'selected' : ''; ?>>Grade 9</option>
                    <option value="10" <?php echo ($course['grade_id'] == '10') ? 'selected' : ''; ?>>Grade 10</option>
                    <option value="11" <?php echo ($course['grade_id'] == '11') ? 'selected' : ''; ?>>Grade 11</option>
                    <option value="12" <?php echo ($course['grade_id'] == '12') ? 'selected' : ''; ?>>Grade 12</option>
                    <option value="13" <?php echo ($course['grade_id'] == '13') ? 'selected' : ''; ?>>Grade 13</option>

                </select>
            </div>
        </div>
        <div class="create-course-form-group">
            <label for="duration">Course Duration (in weeks)</label>
            <input type="number" value="<?php echo e($course['duration']); ?>" id="duration" name="duration" min="1" required>
        </div>

        <div class="create-course-section">
            <h2>Course Modules (Optional)</h2>
            <div id="moduleContainer"></div>
            <button type="button" class="create-course-add-button" id="addModuleBtn">Add Module</button>
        </div>
        </div>

        <button type="submit" class="create-course-submit">Update course</button>
    </form>


    <script>
        let moduleCount = 0;

        function createModuleHTML(index) {
            return `
            <div class="create-course-module" id="module${index}">
                <div class="create-course-module-header">
                    <h3>Module ${index + 1}</h3>
                    <button type="button" class="create-course-remove-button" onclick="removeModule(${index})">Remove</button>
                </div>
                <div class="create-course-form-group">
                    <label for="moduleTitle${index}">Module Title</label>
                    <input type="text" id="moduleTitle${index}" name="moduleTitle${index}">
                </div>
                <div class="create-course-form-group">
                    <label for="moduleDescription${index}">Module Description</label>
                    <textarea id="moduleDescription${index}" name="moduleDescription${index}"></textarea>
                </div>
                <div class="create-course-form-group">
                    <label for="moduleResources${index}">Module Resources (comma-separated)</label>
                    <input type="text" id="moduleResources${index}" name="moduleResources${index}">
                </div>
            </div>
        `;
        }

        function addModule() {
            const moduleContainer = document.getElementById('moduleContainer');
            moduleContainer.insertAdjacentHTML('beforeend', createModuleHTML(moduleCount));
            moduleCount++;
        }

        function removeModule(index) {
            const module = document.getElementById(`module${index}`);
            module.remove();
        }

        document.getElementById('addModuleBtn').addEventListener('click', addModule);

        // document.getElementById('createCourseForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     alert('Course created successfully!');
        //     // Here you would typically handle the form submission and course creation process
        // });
    </script>

</section>