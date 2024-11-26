<head>
    <link rel="stylesheet" href="/assets/styles/help-and-support.css">
</head>
<?php include $this->resolve("partials/_header.php"); ?>

<section class="help">
    <div class="head">
        <h2>How can we help you?</h2>
        <p>Find answers to your questions, explore guides, or connect with our support team to get the help you need.</p>
        <!-- Search Section -->
        <form method="post">
            <input type="text" class="textbox" placeholder="Search">
            <input title="Search" value="" type="submit" class="button">
        </form>

        <!-- <section class="search-section">
            <input type="text" placeholder="Search for help..." aria-label="Search" />
            <button type="button"><img src="/assets/icons/search-button.svg"></button>
        </section> -->
    </div>
    <!-- Support Options -->
    <section class="support-options">
        <h2>Get in Touch</h2>
        <div class="support-card">
            <h3>Live Chat</h3>
            <p>Chat with our support team for real-time assistance.</p>
            <button>Start Chat</button>
        </div>
        <div class="support-card">
            <h3>Email Support</h3>
            <p>Send us your queries, and we'll get back to you soon.</p>
            <button>Contact Us</button>
        </div>
        <div class="support-card">
            <h3>Community Forum</h3>
            <p>Get help and share knowledge with other users.</p>
            <button>Visit Forum</button>
        </div>
    </section>
    <!-- Feedback Section -->
    <section class="feedback-section">
        <h2>Send Us Feedback</h2>
        <form>
            <label for="feedback">Your Feedback:</label>
            <textarea id="feedback" rows="4" placeholder="Write your feedback here..."></textarea>
            <button type="submit">Submit Feedback</button>
        </form>
    </section>


</section>

<?php include $this->resolve("partials/_footer.php"); ?>