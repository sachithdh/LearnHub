<?php include $this->resolve("partials/_header.php"); ?>
<?php include $this->resolve("partials/_alert.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Post/create-post.css">
</head>

<section class="create-post-container">
    <div class="create-post-header">
        <h1>Create New Post</h1>
        <p>Share your request with the community</p>
    </div>

    <form class="create-post-form" id="createPostForm">
        <div class="create-post-section">
            <h2>Post Details</h2>
            <div class="create-post-form-group">
                <label for="postTitle">Post Title *</label>
                <input type="text" id="postTitle" name="postTitle" required>
            </div>
            <div class="create-post-form-group">
                <label for="postDescription">Post Description *</label>
                <textarea id="postDescription" name="postDescription" required></textarea>
            </div>
            <div class="create-post-form-group">
                <label for="postSubject">Subject *</label>
                <input type="text" id="postSubject" name="postSubject" required>
            </div>
            <div class="create-post-form-group">
                <label for="postLocation">Location *</label>
                <input type="text" id="postLocation" name="postLocation" required>
            </div>
            <div class="create-post-form-group">
                <label for="postPriceRange">Price Range ($) *</label>
                <input type="text" id="postPriceRange" name="postPriceRange" required>
            </div>
        </div>

        <button type="submit" class="create-post-submit">Create Post</button>
    </form>
</section>