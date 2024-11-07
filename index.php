<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CertiFy</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<header>
    <div class="logo-container">
        <img src="img/logo.png" alt="Company Logo" class="logo">
    </div>
    <nav class="nav-right">
        <button class="nav-button">Home</button>
        <button class="nav-button">About</button>
        <button class="nav-button">Contact</button>
        <div class="login-container">
            <button id="login-button" class="nav-button login-btn">Login</button>
            <div id="profile-icon" class="profile-icon" style="display: none;">
                <img src="default-profile.png" alt="Profile" class="profile-img">
            </div>
        </div>
    </nav>
</header>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const loginButton = document.getElementById("login-button");
        const profileIcon = document.getElementById("profile-icon");

        const isLoggedIn = false;

        if (isLoggedIn) {
            loginButton.style.display = "none";
            profileIcon.style.display = "flex";
        } else {
            loginButton.style.display = "block";
            profileIcon.style.display = "none";
        }
    });
</script>

<body>
    <div class="split-section">
        <div class="text-section">
            <h1>CertiFy</h1>
            <h2>Software that kinda works</h2>
        </div>
        <div class="image-section">
            <img src="img/big.png" alt="Descriptive Image" class="responsive-image">
        </div>
    </div>

    <div class="partner-logos" id="partner-logos">
        <div class="logo-container">
            <img src="img/cloudfy.png" alt="CloudFy" class="partner-logo">
            <h2>Proudly Official Partners with Cloufy</h2>
            <img src="img/cloudfy.png" alt="CloudFy" class="partner-logo">
        </div>
    </div>


    <div class="split-section reverse">
        <div class="image-section">
            <img src="path/to/your/image2.jpg" alt="Descriptive Image" class="responsive-image">
        </div>
        <div class="text-section">
            <h2>More About CertiFy</h2>
            <p>Provide more details about your software here, explaining its benefits and features.</p>
        </div>
    </div>
</body>
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h4>Documentation</h4>
            <a href="#">Lorem | </a>
            <a href="#">Lorem | </a>
            <a href="#">Lorem</a>
        </div>
        <div class="footer-section">
            <h4>Contact Us</h4>
            <p>Email: info@company.com</p>
            <p>Phone: +1 234 567 890</p>
        </div>
        <div class="footer-section">
            <h4>Socials</h4>
            <div class="social-icons">
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
        </div>
    </div>
</footer>

</html>