<head>
    <link rel="stylesheet" href="/assets/styles/accessDenied.css">
</head>

<?php include $this->resolve("partials/_header.php"); ?>

<section class="notFound">
    <div class="left">
        <img src="/assets/images/accessDenied.avif" alt="">
    </div>
    <div class="right">
        <div class="head">
            <h2>whoops !</h2>
            <h3>you have no permission</h3>
        </div>
        <p>You don't have permission to access this page. If you need help, please contact <a href="http:/support">support</a>. </p>
        <code class="error">status 403 - forbidden</code>
    </div>
</section>

<?php include $this->resolve("partials/_footer.php"); ?>

<script>
    function goHome() {
        window.location.href = '/';
    }
</script>