<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    
    <!-- Google Fonts (Classic Style) -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;500&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="text.css" type="text/css"/>
    
    <style>
        a {
            color: #e1c699;
            text-decoration: none;
        }
        .success-msg {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }
        .error-msg {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    <!-- Marquee Text -->
    <marquee class="marquee" scrollamount="9" behavior="scroll" direction="left">
        Welcome to My Portfolio! | Coding | Development | Projects | Contact Me
    </marquee>

    <!-- Navigation -->
    <div class="top-header">
        <header>
            <nav class="top-header-text">
                <a href="text.html">ABOUT ME</a>
                <a href="gallery.html">GALLERY</a>
                <a href="profile.html">PROJECTS</a>
                <a href="contact.php">CONTACT</a>
            </nav>
        </header>
    </div>

    <!-- Contact Section -->
    <div class="contact" id="contact">
        <h2>Contact Me</h2>

        <?php
        $showForm = true;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["name"], $_POST["email"], $_POST["message"])) {
                $name = htmlspecialchars(trim($_POST["name"]));
                $email = htmlspecialchars(trim($_POST["email"]));
                $message = htmlspecialchars(trim($_POST["message"]));

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p class='error-msg'>Invalid email format.</p>";
                } elseif (empty($name) || empty($email) || empty($message)) {
                    echo "<p class='error-msg'>All fields are required.</p>";
                } else {
                    echo "<p class='success-msg'>Thank you, <strong>$name</strong>! Your message has been received.</p>";
                    echo "<p><strong>Email:</strong> $email</p>";
                    echo "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
                    $showForm = false;
                }
            } else {
                echo "<p class='error-msg'>Please fill out all fields.</p>";
            }
        }

        if ($showForm) {
        ?>
        
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="email" name="email" placeholder="Your Email" required><br>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea><br>
            <button type="submit">Send Message</button>
        </form>

        <?php } ?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 MOHITH K | Email: 
            <a href="mailto:mohithkumar_kummari@srmap.edu.in">mohithkumar_kummari@srmap.edu.in</a> | Phone: 
            <a href="tel:7337227517">7337227517</a>
        </p>
    </footer>
</body>
</html>
