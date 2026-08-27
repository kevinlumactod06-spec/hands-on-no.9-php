<?php include 'layout/header.php' ?>

<main class="main-content">
    <section class="hero">
        <h1 class="hero-title">Welcome to JanMart <span>Tech Shop</span></h1>
        <p class="hero-desc">Next-generation shopping powered by advanced, lightning-fast technology.</p>

       <button class="shop-but">Shop</button>
        
    </section>

    <section class="filter-section">
        <button class="filter-pill active">All</button>
        <button class="filter-pill">Laptops</button>
        <button class="filter-pill">Headphones</button>
        <button class="filter-pill">Accessories</button>
    </section>

    <section class="product-grid">

    <div class="product-card">
        <div class="product-image">
            <img src="images/laptop.jpg" alt="gaming laptop">
        </div>

        <h3>Gaming Laptop</h3>
        <p>Powerful laptop for gaming and productivity.</p>

        <div class="rating">★★★★★</div>

        <p class="price">
            ₱45,999
            <span class="old-price">₱50,999</span>
        </p>

        <button class="cart-button">Add to Cart</button>
    </div>

    <div class="product-card">
        <div class="product-image">
            <img src="images/headphonesjpg.jpg" alt="heaphones">
        </div>

        <h3>Wireless Headphones</h3>
        <p>Enjoy clear sound with comfortable wireless audio.</p>

        <div class="rating">★★★★☆</div>

        <p class="price">₱2,499</p>

        <button class="cart-button">Add to Cart</button>
    </div>

    <div class="product-card">
        <div class="product-image">
            <img src="images/mouse.jpg" alt="mouse">
        </div>

        <h3>Wireless Mouse</h3>
        <p>Comfortable and responsive mouse for everyday use.</p>

        <div class="rating">★★★★★</div>

        <p class="price">₱899</p>

        <button class="cart-button">Add to Cart</button>
    </div>

    <div class="product-card">
        <div class="product-image">
            <img src="images/keyboard.jpg" alt="keyboard">
        </div>

        <h3>Mechanical Keyboard</h3>
        <p>Durable keyboard with responsive mechanical switches.</p>

        <div class="rating">★★★★☆</div>

        <p class="price">
            ₱1,999
            <span class="old-price">₱2,499</span>
        </p>

        <button class="cart-button">Add to Cart</button>
    </div>

</section>

</main>

<?php include 'layout/footer.php' ?>