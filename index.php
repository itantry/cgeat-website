<?php
require_once __DIR__ . '/src/validate.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = validateLogin($_POST['userId'] ?? '', $_POST['password'] ?? '');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CGEAT - Government Efficiency Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,600,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="site-header">
        <div class="logo">CGEAT</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Projects</a>
            <a href="#">Contact</a>
            <a href="#login">Login</a>
        </nav>
    </header>
    <section class="hero">
        <h1>Our aim is towards an efficient, accountable, and transparent government.</h1>
        <p>Ensuring better public services and an improved quality of life.</p>
        <a href="#login" class="cta-btn">Get Started</a>
    </section>
    <section class="about">
        <h2>Our Mission</h2>
        <p>
            CGEAT is dedicated to improving government efficiency through technology, collaboration, and innovation.
        </p>
    </section>
    <section class="login-section" id="login">
        <div class="login-container">
            <h2>Member Login</h2>
            <form class="login-form" method="post" action="src/validate.php">
                <input type="email" name="userId" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <a href="#" class="forgot-password">Forgot Password?</a>
                <?php if ($message): ?>
                    <div class="message"><?= htmlspecialchars($message) ?></div>
                <?php endif; ?>
            </form>
        </div>
    </section>
    <footer class="site-footer">
        <div>© 2025 CG EAT. All rights reserved.</div>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Contact</a>
        </div>
    </footer>
</body>
</html>
