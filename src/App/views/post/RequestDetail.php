<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Post/post-detail.css">
</head>

<section class="course-request-detail">
    <div class="back-button">
        <a href="/course/requests">← Back to Requests</a>
    </div>

    <!-- Main Post Content -->
    <div class="request-post-detail">
        <div class="user-info">
            <img src="/assets/images/user.jpeg" alt="User Avatar" class="avatar">
            <div class="user-details">
                <h4>John Doe</h4>
                <span class="post-time">2 hours ago</span>
            </div>
        </div>

        <div class="request-content">
            <p>Looking for an advanced React.js course that covers Redux and Next.js. Would prefer weekend classes.</p>
            <div class="request-metadata">
                <span class="location">📍 Colombo</span>
                <span class="budget">💰 Rs. 25,000</span>
                <span class="category">💻 Programming</span>
                <span class="availability">🕒 Weekends Preferred</span>
            </div>
        </div>
    </div>

    <!-- Comments Section -->
    <div class="comments-container">
        <h3>Comments</h3>

        <!-- Existing Comments -->
        <div class="comments-list">
            <div class="comment">
                <div class="comment-user-info">
                    <img src="/assets/images/user.jpeg" alt="Commenter Avatar" class="comment-avatar">
                    <div class="comment-user-details">
                        <h5>Jane Smith</h5>
                        <span class="comment-time">1 hour ago</span>
                    </div>
                </div>
                <p class="comment-text">I'm a React.js instructor and I can help you with this. My weekend batch starts next month.</p>
            </div>

            <div class="comment">
                <div class="comment-user-info">
                    <img src="/assets/images/user.jpeg" alt="Commenter Avatar" class="comment-avatar">
                    <div class="comment-user-details">
                        <h5>Mike Johnson</h5>
                        <span class="comment-time">30 minutes ago</span>
                    </div>
                </div>
                <p class="comment-text">I took a similar course. Would recommend checking out Tech Institute.</p>
            </div>
        </div>

        <!-- New Comment Form -->
        <form class="comment-form" action="/course/add-comment" method="POST">
            <input type="hidden" name="request_id" value="<?php echo $requestId; ?>">
            <textarea name="comment" placeholder="Write a comment..." required></textarea>
            <button type="submit">Post Comment</button>
        </form>
    </div>
</section>