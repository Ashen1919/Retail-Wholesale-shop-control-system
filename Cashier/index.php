<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandaru Food Mart</title>

    <!-- Favicons -->
    <link href="./Assets/images/logo.png" rel="icon">
    <link href="./Assets/images/logo.png" rel="apple-touch-icon">

    <!-- Css Stylesheets -->
    <link href="./Assets/css/index.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard">
        <div class="menu">
            <div class="menu-header">
                <h1>Cashier Dashboard</h1>
            </div>

            <div class="menu-buttons">
                <button id="counter-button" class="menu-button" data-page="./counter.php">Counter</button>
                <button id="statistics-button" class="menu-button" data-page="./statistics.php">Statistics</button>
            </div>

            <div class="menu-profile">
                <div class="profile-image">
                    <img src="Assets/images/person.png" alt="Cashier Profile Picture">
                </div>
                <div class="profile-details">
                    <h3>Cashier Name</h3>
                    <button class="logout-button">Logout</button>
                </div>
            </div>
        </div>

        <div class="content"></div>
    </div>
    <script src="./Assets/js/index.js"></script>
</body>
</html>
