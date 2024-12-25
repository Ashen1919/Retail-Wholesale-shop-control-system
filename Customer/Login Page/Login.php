<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="../Assets/css/Login style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="form-container">


        <form> 
            <img src="../Assets/images/logo.png" alt="logo">
<h1>Login</h1>

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your Email" required>
            <div class="password-container">
    <div class="input-wrapper">
   <label for="email">Password
      <input type="password" id="password" placeholder="Enter your password">
      <button id="togglePassword" class="toggle-btn">
        <i id="icon" class="fas fa-eye-slash"></i>
      </button>
    </div>
  </div>
            
            <a id="fp" href="#">Forgot Password?</a><br>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account?<a href="#">Sign up now</a></p>
    </div>

    
    <script src="../Assets/js/login.js"></script>
</body>
</html>