<?php include $this->resolve("partials/_header.php"); ?>

<section class="enroll-container">
    <div class="enrollment-header">
        <h1>Enroll in Course</h1>
        <p>Complete your enrollment for Advanced Python Programming</p>
    </div>

    <div class="card">
        <h2>Course Summary</h2>
        <div class="course-summary">
            <div class="course-info">
                <h3>Advanced Python Programming</h3>
                <p>Duration: 8 weeks | Level: Advanced</p>
            </div>
            <div class="course-price">Rs. 35,000</div>
        </div>

        <h2>Payment Details</h2>
        <div class="payment-options">
            <div class="payment-option">
                <input type="radio" id="credit-card" name="payment-method" checked>
                <label for="credit-card">Credit Card</label>
            </div>
            <div class="payment-option">
                <input type="radio" id="paypal" name="payment-method">
                <label for="paypal">PayPal</label>
            </div>
        </div>

        <form id="payment-form">
            <div class="card-details">
                <div class="form-group full-width">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" placeholder="1234 5678 9012 3456" required>
                </div>
                <div class="form-group">
                    <label for="expiry-date">Expiry Date</label>
                    <input type="text" id="expiry-date" placeholder="MM/YY" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" placeholder="123" required>
                </div>
                <div class="form-group full-width">
                    <label for="card-name">Name on Card</label>
                    <input type="text" id="card-name" placeholder="John Doe" required>
                </div>
            </div>
            <button type="submit" class="pay-button" style="">Pay Now</button>
        </form>

        <p class="terms">By enrolling, you agree to our Terms of Service and Privacy Policy.</p>
    </div>
</section>

<script>
    document.getElementById('payment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Enrollment confirmed! Thank you for joining the course.');
        // Here you would typically handle the form submission and payment processing
    });
</script>