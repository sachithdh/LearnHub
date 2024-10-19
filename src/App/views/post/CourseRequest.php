<?php include $this->resolve("partials/_header.php"); ?>

<head>
    <link rel="stylesheet" href="/assets/styles/Post/course-requests.css">
</head>

<section class="course-requests-container">

    <!-- Request Feed -->
    <div class="request-feed">
        <a class="post-link" href="/course/request/id">
            <!-- Sample Request Post -->
            <div class="request-post">
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
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-section">
                    <form class="comment-form" action="/course/add-comment" method="POST">
                        <input type="hidden" name="request_id" value="1">
                        <input type="text" placeholder="Write a comment..." name="comment" required>
                        <button type="submit">Comment</button>
                    </form>
                </div>
            </div>
        </a>
    </div>
    <div class="request-feed">
        <a class="post-link" href="/course/request/id">
            <!-- Sample Request Post -->
            <div class="request-post">
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
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-section">
                    <form class="comment-form" action="/course/add-comment" method="POST">
                        <input type="hidden" name="request_id" value="1">
                        <input type="text" placeholder="Write a comment..." name="comment" required>
                        <button type="submit">Comment</button>
                    </form>
                </div>
            </div>
        </a>
    </div>
    <div class="request-feed">
        <a class="post-link" href="/course/request/id">
            <!-- Sample Request Post -->
            <div class="request-post">
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
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-section">
                    <form class="comment-form" action="/course/add-comment" method="POST">
                        <input type="hidden" name="request_id" value="1">
                        <input type="text" placeholder="Write a comment..." name="comment" required>
                        <button type="submit">Comment</button>
                    </form>
                </div>
            </div>
        </a>
    </div>
    <div class="request-feed">
        <a class="post-link" href="/course/request/id">
            <!-- Sample Request Post -->
            <div class="request-post">
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
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-section">
                    <form class="comment-form" action="/course/add-comment" method="POST">
                        <input type="hidden" name="request_id" value="1">
                        <input type="text" placeholder="Write a comment..." name="comment" required>
                        <button type="submit">Comment</button>
                    </form>
                </div>
            </div>
        </a>
    </div>
</section>