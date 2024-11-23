<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Alert</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->

    <style>
        /* Basic styles */
        /* body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        } */

        /* Alert styles */
        .alert {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 16px 24px;
            background-color: #fff;
            color: #333;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: opacity 0.4s ease, transform 0.4s ease;
            opacity: 0;
            transform: translateY(-20px);
            z-index: 1000;
            max-width: 300px;
        }

        /* Show alert with animation */
        .alert.show {
            display: flex;
            opacity: 1;
            transform: translateY(0);
        }

        /* Success and error colors */
        .alert.success {
            border-left: 6px solid #28a745;
        }

        .alert.error {
            border-left: 6px solid #dc3545;
        }

        /* Icon and close button */
        .alert .icon {
            margin-right: 12px;
            font-size: 18px;
        }

        .alert .close-btn {
            margin-left: auto;
            cursor: pointer;
            font-size: 20px;
        }

        /* Styling for buttons */
        /* button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            color: #fff;
            transition: background-color 0.3s;
        }

        button:hover {
            opacity: 0.9;
        }

        button:first-of-type {
            background-color: #28a745;
        }

        button:last-of-type {
            background-color: #dc3545;
        } */
    </style>
</head>

<body>
    <!-- Success Alert -->
    <div id="successAlert" class="alert success">
        <span class="icon">✔️</span>
        <span class="message">Success! Your action was completed successfully.</span>
        <span class="close-btn" onclick="closeAlert('successAlert')">&times;</span>
    </div>

    <!-- Error Alert -->
    <div id="errorAlert" class="alert error">
        <span class="icon">❌</span>
        <span class="message">Error! Something went wrong. Please try again.</span>
        <span class="close-btn" onclick="closeAlert('errorAlert')">&times;</span>
    </div>

    <!-- <button onclick="showAlert('success', 'Success! Your action was completed successfully.')">Show Success Alert</button>
    <button onclick="showAlert('error', 'Error! Something went wrong. Please try again.')">Show Error Alert</button> -->

    <script>
        // Show the alert based on type
        function showAlert(type, message) {
            const alert = document.getElementById(type === 'success' ? 'successAlert' : 'errorAlert');
            alert.innerHTML = message;
            alert.classList.add('show');

            // Hide the alert after 3 seconds
            setTimeout(() => {
                alert.classList.remove('show');
            }, 3000);
        }

        // Close alert when close button is clicked
        function closeAlert(alertId) {
            const alert = document.getElementById(alertId);
            alert.classList.remove('show');
        }
    </script>
</body>

</html>