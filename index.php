<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Company Profile</title>
</head>
<body>
    <nav>
        <div class="logo">
            <h1>Bandung Travel</h1>
        </div>
        <ul>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#about">Home</a></li>
            <li><a href="login.php">Login Admin</a></li>
        </ul>

    </nav>

    <div class="container">
    <section id="about">
        <div class="left-content">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
    </section>
    
    <section id="services">
        <div class="left-content">
            <h2>Our Services</h2>
            <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
            </ul>
        </div>
    </section>

    <section id="contact">
        <div class="card">
            <h2>Contact Us</h2>
            <p>Email: info@company.com</p>
            <p>Phone: 123-456-7890</p>
        </div>
    </section>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Company Name. All rights reserved.</p>
    </footer>

</body>
</html>
