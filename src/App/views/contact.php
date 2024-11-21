<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/assets/styles/contacts.css">

</head>

<?php include $this->resolve("partials/_header.php"); ?>

<body>

    <section class="contact">

        <div class="row">

            <div class="image">
                <img src="/assets/images/contact-img.svg" alt="">

                <h3>Reach Out Anytime!</h3>
                <span>Have a question or idea? We’d love to hear from you—let’s make your experience better!</span>
            </div>

            <form action="" method="post">
                <h3>get in touch</h3>
                <input id="name" type="text" placeholder="enter your name" name="name" required maxlength="50" class="input-feild inputs">
                <input id="email" type="email" placeholder="enter your email" name="email" required maxlength="50" class="input-feild inputs">
                <textarea id="message" name="msg" class="input-message inputs" placeholder="enter your message" required maxlength="1000" cols="30" rows="10"></textarea>

                <input id="sendButton" type="submit" value="send message" class="btn" name="submit">
            </form>

        </div>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <a href="tel:1234567890">123-456-7890</a>
                <a href="tel:1112223333">111-222-3333</a>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <a href="#">leanhub@gmail.come</a>
            </div>

        </div>

    </section>


    <!-- <script>
        document.getElementById('sendButton').addEventListener('click', function() {

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = "Contact us";
            const message = document.getElementById('message').value;

            const body = `Name: ${name}\nEmail: ${email}\n\nMessage:\n${message}`;
            const mailtoLink = `mailto:leanhubcontact@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;


            window.location.href = mailtoLink;
        });
    </script> -->

</body>

<?php include $this->resolve("partials/_footer.php"); ?>