<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Course/create-course.css">
</head>

<section class="create-course-container">
    <div class="create-course-header">
        <h1>Create New Course</h1>
        <p>Share your knowledge with the world</p>
    </div>

    <form class="create-course-form" id="createCourseForm">
        <div class="create-course-section">
            <h2>Basic Information</h2>
            <div class="create-course-form-group">
                <label for="courseTitle">Course Title *</label>
                <input type="text" id="courseTitle" name="courseTitle" required>
            </div>
            <div class="create-course-form-group">
                <label for="courseDescription">Course Description *</label>
                <textarea id="courseDescription" name="courseDescription" required></textarea>
            </div>
            <div class="create-course-form-group">
                <label for="courseImage">Course Image URL *</label>
                <input type="url" id="courseImage" name="courseImage" required>
            </div>
            <div class="create-course-form-group">
                <label for="coursePrice">Course Price ($) *</label>
                <input type="number" id="coursePrice" name="coursePrice" min="0" step="0.01" required>
            </div>
            <div class="create-course-form-group">
                <label for="courseCategory">Course Category *</label>
                <select id="courseCategory" name="courseCategory" required>
                    <option value="">Select a category</option>
                    <option value="programming">Programming</option>
                    <option value="design">Design</option>
                    <option value="business">Business</option>
                    <option value="marketing">Marketing</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="create-course-form-group">
                <label for="courseDuration">Course Duration (in weeks) *</label>
                <input type="number" id="courseDuration" name="courseDuration" min="1" required>
            </div>
            <div class="create-course-form-group">
                <label for="courseLevel">Course Level *</label>
                <select id="courseLevel" name="courseLevel" required>
                    <option value="">Select a level</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div>
        </div>

        <div class="create-course-section">
            <h2>Course Modules (Optional)</h2>
            <div id="moduleContainer"></div>
            <button type="button" class="create-course-add-button" id="addModuleBtn">Add Module</button>
        </div>

        <div class="create-course-section">
            <h2>Additional Information (Optional)</h2>
            <div class="create-course-form-group">
                <label for="coursePrerequisites">Prerequisites</label>
                <textarea id="coursePrerequisites" name="coursePrerequisites"></textarea>
            </div>
            <div class="create-course-form-group">
                <label for="courseObjectives">Learning Objectives</label>
                <textarea id="courseObjectives" name="courseObjectives"></textarea>
            </div>
        </div>

        <button type="submit" class="create-course-submit">Create Course</button>
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

        document.getElementById('createCourseForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Course created successfully!');
            // Here you would typically handle the form submission and course creation process
        });
    </script>

</section>