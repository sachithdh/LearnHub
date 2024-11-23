<head>
    <link rel="stylesheet" href="/assets/styles/notFound.css">
</head>

<?php include $this->resolve("partials/_header.php"); ?>

<section class="notFound">
    <div class="left">
        <img src="/assets/images/404.jpeg" alt="">
    </div>
    <div class="right">
        <div class="head">
            <h2>Opps!</h2>
            <h3>you have found loss world.</h3>
        </div>
        <p>Home is just a click away. Let's go back and continue our regular life.</p>
        <button onclick="goHome()">go home</button>
        <code class="error">status 404 - not found</code>
    </div>
</section>

<?php include $this->resolve("partials/_footer.php"); ?>

<script>
    function goHome() {
        window.location.href = '/';
    }
</script>