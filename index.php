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
    <title>CG EAT - Government Efficiency Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,600,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="site-header">
        <div class="logo">CG EAT</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Projects</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
        </nav>
    </header>
    <section class="hero">
        <h1>Empowering Government Efficiency</h1>
        <p>Driving digital transformation for better public services.</p>
        <a href="#login" class="cta-btn">Get Started</a>
    </section>
    <section class="about">
        <h2>Our Mission</h2>
        <p>
            CG EAT is dedicated to improving government efficiency through technology, collaboration, and innovation.
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
    <script>
        const form = document.querySelector('.login-form');
        const submitButton = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function() {
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
            submitButton.disabled = true;
        });

        const forgotPasswordLink = document.querySelector('.forgot-password');

        forgotPasswordLink.addEventListener('click', function(event) {
            event.preventDefault();
            alert('Password reset functionality is not implemented in this demo. Please contact support@cgeat.org.');
        });
    </script>
</body>
</html>
