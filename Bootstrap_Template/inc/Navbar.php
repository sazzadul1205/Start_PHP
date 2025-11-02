<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php if ($current_page == 'index.php') echo 'active'; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($current_page == 'about.php') echo 'active'; ?>" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($current_page == 'contact.php') echo 'active'; ?>" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>