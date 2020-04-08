<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Chain-Intelligence</title>
    <link rel="stylesheet" href="blog_result.css">
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

    <div id="main-content">
        <h1>Welcome to Chain-Intelligence Blog</h1>
<?php
    //database connection
    include("dbconnection.php");

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        echo "<h3>".$title."</h3>";

        $sql = "SELECT description FROM blog WHERE title='$title'";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)){
            echo $row['description'];
        }
    }
?>
    </div>
</body>
</html>