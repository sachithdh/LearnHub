<?php include $this->resolve("partials/_header.php"); ?>

<link rel="stylesheet" href="/assets/styles/Post/course-requests.css">

<section class="course-requests-container">

    <?php foreach ($courseRequests as $request): ?>
        <!-- Request Feed -->
        <div class="request-feed">
            <a class="post-link" href="/course/request/id">
                <!-- Course Request -->
                <div class="request-post">
                    <div class="user-info">
                        <img src="/assets/images/user.jpeg" alt="User Avatar" class="avatar">
                        <div class="user-details">
                            <h4><?= e($request["author"]) ?></h4>
                            <span class="post-time">
                                <?= e(
                                    $request["updated_date"] === $request["created_date"] ?
                                        "Posted on " . formatDate($request["created_date"], 'F j, Y') :
                                        "Edited on " . formatDate($request["updated_date"], 'F j, Y')
                                ) ?>
                            </span>
                        </div>
                    </div>
                    <div class="request-title">
                        <h3><?= e($request["title"]) ?></h3>
                    </div>
                    <div class="request-content">
                        <p><?= e($request["description"]) ?></p>
                        <div class="request-metadata">
                            <span class="subject"><?= e($request["subject"]  ?? "Other") ?></span>
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
    <?php endforeach; ?>

</section>

<?php include $this->resolve("partials/_footer.php"); ?>