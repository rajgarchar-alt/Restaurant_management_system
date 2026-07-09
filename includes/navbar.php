
<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        
          <a class="navbar-brand fw-bold" href="index.php">
            🍽️ RMS
          </a>
 <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link
                     <?php if($currentPage == 'index.php') echo 'active'; ?> "
                      href="index.php">Home</a>
                </li>

                <li class="nav-item">
                     <a class="nav-link
                      <?php if($currentPage == 'about.php') echo 'active'; ?>" 
                      href="about.php">About</a>
                </li>

               <li class="nav-item">
                    <a class="nav-link 
                        <?php if($currentPage == 'menu.php') echo 'active'; ?>" 
                        href="menu.php">Menu
                    </a>
                </li>

               <li class="nav-item">
                    <a class="nav-link 
                        <?php if($currentPage == 'contact.php') echo 'active'; ?>" 
                        href="contact.php">Contact
                    </a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a class="btn btn-warning" href="admin/login.php">
                        Admin Login
                    </a>
                </li>

            </ul>

        </div>
      </div>
    </nav>
</header>