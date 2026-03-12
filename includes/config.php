<?php
// Database configuration (optional)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'echo_portfolio');

// Site configuration
define('SITE_NAME', 'Echo Technology');
define('SITE_URL', 'http://localhost/echo-portfolio');
define('ADMIN_EMAIL', 'founder@echotechnology.com');

// Email configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your-email@gmail.com');
define('SMTP_PASS', 'your-app-password');

// Start session if not started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>