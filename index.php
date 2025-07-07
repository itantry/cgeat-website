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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CG EAT Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="header-bar">
        <span><i class="fa fa-landmark"></i> Center for Government Efficiency, Accountability and Transparency</span>
    </div>
    <div class="container">
        <h1>Member Login Portal</h1>
        <form class="login-form" method="post" autocomplete="off">
            <div class="input-group">
                <span class="input-icon"><i class="fa fa-envelope"></i></span>
                <input type="email" id="userId" name="userId" placeholder="Email" required>
            </div>
            <div class="input-group">
                <span class="input-icon"><i class="fa fa-lock"></i></span>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <?php if ($message): ?>
                <div class="message"><?= htmlspecialchars($message) ?></div>
            <?php endif; ?>
        </form>
    </div>
    <footer>
        <div class="footer-icons">
            <a href="https://github.com/cgeat" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="https://www.gnu.org/licenses/gpl-3.0.html" target="_blank" title="GPLv3"><i class="fab fa-creative-commons"></i></a>
            <a href="mailto:admin@cgeat.org" title="Contact"><i class="fa fa-envelope"></i></a>
        </div>
        <div class="footer-text">
            &copy; <?= date('Y') ?> CGEAT. All rights reserved.
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
