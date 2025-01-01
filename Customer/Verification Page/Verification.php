<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="verification-form">
        <h1>Verification</h1>
        <form action="verify.php" method="POST">
            <div class="option">
                <label>
                    <input type="radio" name="verificationType" value="email" required>
                    Email Verification
                </label>
            </div>
            <div class="option">
                <label>
                    <input type="radio" name="verificationType" value="mobile" required>
                    Mobile Verification
                </label>
            </div>
            <div class="code-input">
                <label for="verificationCode">Enter the Code:</label>
                <input type="text" id="verificationCode" name="verificationCode" maxlength="6" required>
            </div>
            <button type="submit">Verify Code</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
