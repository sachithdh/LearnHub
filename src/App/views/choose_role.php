<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>

    <link rel="stylesheet" href="/assets/styles/choose-role.css">
</head>

<body>
    <nav class="navbar">
        <img src="download.png" alt="LearnHub Logo" class="logo">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help</a></li>
        </ul>
        <a class="login-button" href="/login">Log in</a>
    </nav>
    <div class="choose-role-container">
        <div class="choose-role-text">
            <h1>How do you want to use LEARN<span style="color: #ffc400;">HUB</span>?</h1>
        </div>
        <form method="POST" class="choose-role-form" id="roleForm" action="/register">
            <?php include $this->resolve('partials/_csrf.php') ?>
            <div class="role-option">
                <input type="radio" id="tutor" name="role" value="tutor">
                <label for="tutor">I'm a Tutor</label>
            </div>
            <div class="role-option">
                <input type="radio" id="student" name="role" value="student">
                <label for="student">I'm a Student</label>
            </div>
            <div class="submit-button-container">
                <button type="submit" class="submit-button" disabled>Create account</button>
            </div>
        </form>
    </div>
    <div class="right-banner">
        <img src="joinus.png" alt="Join us banner" />
    </div>

    <script>
        const roleForm = document.getElementById('roleForm');
        const submitBtn = document.querySelector('.submit-button');

        roleForm.addEventListener('change', () => {
            submitBtn.disabled = !roleForm.role.value;
        });
    </script>
</body>

</html>