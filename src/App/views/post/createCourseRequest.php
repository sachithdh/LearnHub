<?php include $this->resolve("partials/_header.php"); ?>
<?php include $this->resolve("partials/_alert.php"); ?>

<link rel="stylesheet" href="/assets/styles/create-form.css">

<section class="create-container">
    <div class="create-header">
        <h1>Create Course Request</h1>
        <p>Share your course request with the community</p>
    </div>

    <form class="create-form" id="createCourseRequestForm">
        <div class="create-section">
            <h2>Course Request Details</h2>
            <div class="create-form-group">
                <label for="requestTitle">Course Request Title *</label>
                <input type="text" id="requestTitle" name="requestTitle" required>
            </div>
            <div class="create-form-group">
                <label for="requestDescription">Course Request Description *</label>
                <textarea id="requestDescription" name="requestDescription" required></textarea>
            </div>
            <div class="create-course-form-group">
                <label for="subject_id">Subject *</label>
                <select id="subject_id" name="subject_id" required>
                    <?php foreach ($subjects as $subject): ?>
                        <option value="<?= e($subject["subject_id"]); ?>">
                            <?= e($subject["subject_title"]); ?>
                        </option>
                    <?php endforeach; ?>

                    <option value="-1">Other</option>
                </select>
            </div>
        </div>

        <button type="submit" class="create-submit">Submit Request</button>
    </form>
</section>