<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables - Sandaru Food Mart</title>

    <!-- Favicons -->
    <link
        href="../Assets/images/logo.png"
        rel="icon">
    <link
        href="../Assets/images/logo.png"
        rel="apple-touch-icon">
        
    <!-- CSS Files -->
    <link href="../Assets/css/style.css" rel="stylesheet">
    <link href="../Assets/css/Categories.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Include Header -->
    <?php include '../includes/header.php'; ?>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item active" aria-current="page">Vegetables</li>
    </ol>
</nav>

    <main class="category-main">
        <div class="category-header">
            <h2>..Vegetables..</h2>
        </div>

        <div class="category-description">
            <p><i>Get fresh vegetables delivered to your home</i></p>
        </div>

        <div class="sort-section">
            <label for="sort">Sort by:</label>
            <select name="sort" id="sort">
                <option value="best-sellers">Best Sellers</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="newest">Newest First</option>
            </select>
        </div>

        <div class="products-grid">
            <!-- Product Card 1 -->

            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Vegetables_Page/Carrot.jpg" alt="Pack of 10 Eggs">
                </div>
                <div class="product-details">
                    <h3>Carrot </h3>
                    <p class="price">Rs. 130.00</p>
                    <p class="weight">(500g)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            

            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Vegetables_Page/beans.jpg" alt="Pack of 10 Eggs">
                </div>
                <div class="product-details">
                    <h3>Green Beans</h3>
                    <p class="price">Rs. 135.00</p>
                    <p class="weight">(250g)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Vegetables_Page/brinjal.jpg" alt="White Sugar">
                </div>
                <div class="product-details">
                    <h3>Brinjal</h3>
                    <p class="price">Rs. 207.00</p>
                    <p class="weight">(350g)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card">
                <div class="product-image">
                <img src="../Assets/images/Vegetables_Page/pumpkin.jpg" alt="Catch Canned Fish">
                </div>
                <div class="product-details">
                    <h3>Pumpkin</h3>
                    <p class="price">Rs. 110.00</p>
                    <p class="weight">(500g)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="product-card">
                <div class="product-image">
                <img src="../Assets/images/Vegetables_Page/ash plantain.jpg" alt="Catch Canned Fish">
                </div>
                <div class="product-details">
                    <h3>Ash plantain</h3>
                    <p class="price">Rs. 45.00</p>
                    <p class="weight">(250g)</p>
                    <button class="add-to-cart">Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="../Assets/images/Vegetables_Page/beetroot.jpg" alt="White Sugar">
                </div>
                <div class="product-details">
                    <h3>Beetroot </h3>
                    <p class="price">Rs. 150.00</p>
                    <p class="weight">(250g)</p>
                    <button class="add-to-cart"> Add to Cart
                    </button>
                </div>
            </div>

            
        </div>
    </main>

    

    <script src="../Assets/js/script.js"></script>
</body>
</html>