<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="header">
    <nav class="navbar container">
        <div class="logo">
            <a href="index.php">Echo<span>Technology</span></a>
        </div>
        <ul class="nav-menu">
            <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a></li>
            <li><a href="projects.php" class="<?php echo $current_page == 'projects.php' ? 'active' : ''; ?>">Projects</a></li>
            <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>