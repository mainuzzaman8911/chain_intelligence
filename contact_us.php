<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Chain-Intelligence</title>
    <link rel="stylesheet" href="contact_us.css">
</head>
<body>
    <header>
        <script src="navbar_links.js"></script>
        <section id="nav-bar-container">
            <section id="logo">Chain-Intelligence</section>
            <section id="nav-bar">
                <section class="menus" onclick="goto_home()">Home</section>
                <section class="menus" onclick="goto_coding()">Coding</section>
                <section class="menus" onclick="goto_blog()">Blog</section>
                <section class="menus" onclick="goto_contact_us()">Contact</section>
            </section>
        </section>
    </header>

    <section class="horizontal-line"></section>

    <section id="main-content">
        <form action="" method="post">
            <label><span style="color: red;">*</span>Your Name:</label> <br>
            <input type="text" name="name" id="name" required> <br> <br>
            <label><span style="color: red;">*</span>Your Email Address:</label> <br>
            <input type="email" name="email" id="email" required> <br> <br>
            <label><span style="color: red;">*</span>Your Opinion:</label> <br>
            <textarea name="opinion" id="opinion" cols="100" rows="500"></textarea> <br> <br>
            <input type="submit" name="submit" id="submit" value="Send Your Opinion">
        </form>
    </section>

    <footer>
        <section id="pre-footer-section"></section>
        <section id="footer-section">
            <section class="fs-section">
                <h1>Blogs</h1>
                <p>Deep Learning</p>
                <p>Artificial Neural Network</p>
                <p>Natural Language Processing</p>
                <p>Machine Learning</p>
            </section>
            <section class="fs-section">
                <h1>Trending Technologies</h1>
                <p>Blockchain</p>
                <p>Robotic Process Automation</p>
                <p>Caugnitive Automation Process</p>
            </section>
            <section id="id-fs-section">
                <h1>Chain</h1>
                <h1>Intelligence</h1>
            </section>
        </section>
    </footer>
</body>
</html>