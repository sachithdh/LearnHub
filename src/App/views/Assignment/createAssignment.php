<?php include $this->resolve("partials/_header.php"); ?>
<link rel="stylesheet" href="/assets/styles/create-form.css">
<link rel="stylesheet" href="/assets/styles/Assignment/create-assignment.css">

<section class="create-container">
    <div class="create-header">
        <h1>Create New Assignment</h1>
    </div>

    <form class="create-form" id="createCourseForm" method="POST" action="/create-course">
        <div class="create-section">
            <div class="create-form-group">
                <label for="courseTitle">Assignment Title *</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="create-form-group">
                <label for="description">Assignment Description *</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="create-form-group">
                <label for="file">Assignment *</label>
                <input type="file" id="courseImage" name="file" accept=".pdf" required>
            </div>

            <div class="create-form-group">
                <label for="date">Assignment Date *</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="create-form-group">
                <label>Assignment Time*</label> <br>
                <div class="time-inputs">
                    <label for="start_time" class="time-label">Start Time*</label>
                    <input type="time" id="start_time" name="start_time" min="0" step="60" placeholder="08:00" required>

                    <label for="end_time" class="time-label end-time-label">End Time*</label>
                    <input type="time" id="end_time" name="end_time" min="0" placeholder="10:00" required>
                </div>
            </div>

        </div>

        <button type="submit" class="create-submit">Create Assignment</button>
    </form>
</section>
<?php include $this->resolve("partials/_footer.php"); ?>