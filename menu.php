<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<!-- ===========================
     MENU PAGE BANNER
=========================== -->

<section class="page-banner">

    <div class="container">

        <h1>Our Menu</h1>

        <p>
            <a href="index.php">Home</a> /
            <span>Menu</span>
        </p>

    </div>

</section>

<!-- ===========================
     SEARCH SECTION
=========================== -->

<section class="menu-search py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h5 class="text-warning fw-bold">
                FIND YOUR FAVORITE FOOD
            </h5>

            <h2 class="fw-bold">
                Search Our Delicious Menu
            </h2>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-6">

                <form>

                    <div class="input-group">

                        <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Search food...">

                        <button class="btn btn-warning">

                            <i class="fas fa-search"></i>

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>


<!-- ===========================
     CATEGORY FILTER
=========================== -->

<section class="menu-categories pb-5">

    <div class="container">

        <div class="text-center">

            <button class="category-btn active">All</button>

            <button class="category-btn">Pizza</button>

            <button class="category-btn">Burger</button>

            <button class="category-btn">Chinese</button>

            <button class="category-btn">Pasta</button>

            <button class="category-btn">Drinks</button>

            <button class="category-btn">Desserts</button>

        </div>

    </div>

</section>



<!-- ===========================
     MENU ITEMS
=========================== -->

<section class="menu-items py-5">

    <div class="container">

        <div class="row">

            <!-- Item 1 -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="food-card">

                    <img src="assets/images/menu/pizza.jpg" alt="Pizza">

                    <div class="food-content">

                        <h4>Margherita Pizza</h4>

                        <p>
                            Fresh mozzarella cheese with Italian herbs.
                        </p>

                        <div class="food-info">

                            <span class="price">₹299</span>

                            <span class="rating">
                                ⭐⭐⭐⭐⭐
                            </span>

                        </div>

                        <a href="food_details.php" class="btn btn-warning w-100 mt-3">
                            Order Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Item 2 -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="food-card">

                    <img src="assets/images/menu/burger.jpg" alt="Burger">

                    <div class="food-content">

                        <h4>Veg Burger</h4>

                        <p>
                            Crispy patty with fresh vegetables and cheese.
                        </p>

                        <div class="food-info">

                            <span class="price">₹149</span>

                            <span class="rating">
                                ⭐⭐⭐⭐⭐
                            </span>

                        </div>

                        <a href="food_details.php" class="btn btn-warning w-100 mt-3">
                            Order Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Item 3 -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="food-card">

                    <img src="assets/images/menu/pasta.jpg" alt="Pasta">

                    <div class="food-content">

                        <h4>White Sauce Pasta</h4>

                        <p>
                            Creamy white sauce pasta with herbs.
                        </p>

                        <div class="food-info">

                            <span class="price">₹249</span>

                            <span class="rating">
                                ⭐⭐⭐⭐⭐
                            </span>

                        </div>

                        <a href="food_details.php" class="btn btn-warning w-100 mt-3">
                            Order Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Item 4 -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="food-card">

                    <img src="assets/images/menu/noodles.jpg" alt="Noodles">

                    <div class="food-content">

                        <h4>Hakka Noodles</h4>

                        <p>
                            Spicy noodles with fresh vegetables.
                        </p>

                        <div class="food-info">

                            <span class="price">₹199</span>

                            <span class="rating">
                                ⭐⭐⭐⭐⭐
                            </span>

                        </div>

                        <a href="food_details.php" class="btn btn-warning w-100 mt-3">
                            Order Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Item 5 -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="food-card">

                    <img src="assets/images/menu/coffee.jpg" alt="Coffee">

                    <div class="food-content">

                        <h4>Cold Coffee</h4>

                        <p>
                            Chilled coffee topped with fresh cream.
                        </p>

                        <div class="food-info">

                            <span class="price">₹99</span>

                            <span class="rating">
                                ⭐⭐⭐⭐⭐
                            </span>

                        </div>

                        <a href="food_details.php" class="btn btn-warning w-100 mt-3">
                            Order Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Item 6 -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="food-card">

                    <img src="assets/images/menu/icecream.jpg" alt="Ice Cream">

                    <div class="food-content">

                        <h4>Chocolate Ice Cream</h4>

                        <p>
                            Rich chocolate ice cream with toppings.
                        </p>

                        <div class="food-info">

                            <span class="price">₹129</span>

                            <span class="rating">
                                ⭐⭐⭐⭐⭐
                            </span>

                        </div>

                        <a href="food_details.php" class="btn btn-warning w-100 mt-3">
                            Order Now
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ===========================
     PAGINATION
=========================== -->

<section class="menu-pagination py-5">

    <div class="container">

        <nav>

            <ul class="pagination justify-content-center">

                <li class="page-item disabled">
                    <a class="page-link" href="#">Previous</a>
                </li>

                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>

            </ul>

        </nav>

    </div>

</section>

<?php
include("includes/footer.php");
?>