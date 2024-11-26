<head>
    <link rel="stylesheet" href="/assets/styles/help-and-support.css">
</head>
<?php include $this->resolve("partials/_header.php"); ?>

<section class="help">
    <div class="head-container">

    </div>
    <div class="head">
        <h2>How can we help you?</h2>
        <p>Find answers to your questions, explore guides, or connect with our support team to get the help you need.</p>
        <!-- Search Section -->
        <form method="post">
            <input type="text" class="textbox" placeholder="Search">
            <input title="Search" value="" type="submit" class="button">
        </form>
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
            <button onclick="contactUs()">Contact Us</button>
        </div>
        <div class="support-card">
            <h3>Community</h3>
            <p>Get help and share knowledge with other users.</p>
            <button onclick="getSupport()">get support</button>
        </div>
    </section>

    <!-- FAQ secton -->
    <section class="FAQ">
        <h2>Frequently Asked Questions (FAQs)</h2>

        <!-- General Questions -->
        <div class="faq-section">
            <h3>General Questions</h3>
            <div class="faq-item">
                <p class="faq-question" tabindex="0">What is LearnHub?</p>
                <p class="faq-answer">LearnHub is an online platform that connects tutors and learners, offering tools for course creation, enrollment, and communication to enhance learning experiences.</p>
            </div>
            <div class="faq-item">
                <p class="faq-question" tabindex="0">How do I sign up for LearnHub?</p>
                <p class="faq-answer">Click the "Sign Up" button on the homepage and fill in the required details. You can sign up as a student or tutor.</p>
            </div>
        </div>

        <!-- Account Management -->
        <div class="faq-section">
            <h3>Account Management</h3>
            <div class="faq-item">
                <p class="faq-question" tabindex="0">How can I reset my password?</p>
                <p class="faq-answer">Click on the "Forgot Password" link on the login page and follow the instructions to reset your password.</p>
            </div>
            <div class="faq-item">
                <p class="faq-question" tabindex="0">Can I change my account type from student to tutor?</p>
                <p class="faq-answer">Yes, you can change your account type from your profile settings under the "Account Type" section.</p>
            </div>
        </div>

        <!-- Course Management -->
        <div class="faq-section">
            <h3>Course Management</h3>
            <div class="faq-item">
                <p class="faq-question" tabindex="0">How do I enroll in a course?</p>
                <p class="faq-answer">Search for a course using the search bar, click on the course you’re interested in, and hit the "Enroll" button.</p>
            </div>
            <div class="faq-item">
                <p class="faq-question" tabindex="0">Can I unenroll from a course?</p>
                <p class="faq-answer">Yes, go to "My Courses," select the course you want to unenroll from, and click "Unenroll."</p>
            </div>
        </div>

        <!-- Technical Issues -->
        <div class="faq-section">
            <h3>Technical Issues</h3>
            <div class="faq-item">
                <p class="faq-question" tabindex="0">I can’t log in to my account. What should I do?</p>
                <p class="faq-answer">Check your email and password for errors. If the problem persists, use the "Forgot Password" option or contact support.</p>
            </div>
            <div class="faq-item">
                <p class="faq-question" tabindex="0">The website isn’t loading properly. What can I do?</p>
                <p class="faq-answer">Ensure your browser is updated and clear your cache. If the issue continues, contact our support team.</p>
            </div>
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

<script>
    function contactUs() {
        window.location.href = "/contact";
    }

    function getSupport() {
        window.location.href = "/course/request";
    }

    // JavaScript to toggle FAQ answers
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
      question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
      });
    });
</script>