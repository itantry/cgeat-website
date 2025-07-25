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
    <section class="projects">
        <h2>Our Projects</h2>
        <div class="project-cards">
            <div class="card">
                <h3>Digital Governance</h3>
                <p>Modernizing government processes for transparency and accountability.</p>
            </div>
            <div class="card">
                <h3>Citizen Services</h3>
                <p>Improving access to essential services for all citizens.</p>
            </div>
            <div class="card">
                <h3>Open Data</h3>
                <p>Promoting data-driven decision making in public administration.</p>
            </div>
        </div>
    </section>
    <section class="news">
        <h2>Latest News</h2>
        <div class="news-list">
            <div class="news-item">
                <h3>New E-Government Portal Launched</h3>
                <p>Our new portal is now live, making public services more accessible.</p>
            </div>
            <div class="news-item">
                <h3>Annual Transparency Report Released</h3>
                <p>Read our latest findings on government accountability and efficiency.</p>
            </div>
        </div>
    </section>
    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="team-list">
            <div class="team-member">
                <h3>Jane Doe</h3>
                <p>Executive Director</p>
            </div>
            <div class="team-member">
                <h3>John Smith</h3>
                <p>Head of Technology</p>
            </div>
        </div>
    </section>
    <section class="partners">
        <h2>Our Partners</h2>
        <div class="partner-list">
            <div class="partner">GovTech</div>
            <div class="partner">OpenGov</div>
            <div class="partner">CivicData</div>
        </div>
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
