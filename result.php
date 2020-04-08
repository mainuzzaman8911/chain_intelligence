<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding | Chain-Intelligence</title>
    <link rel="stylesheet" href="result.css">
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
<?php 
    //database connection
    include("dbconnection.php");

    if(isset($_POST['submit'])){
        $topic = $_POST['topic'];
        $category = $_POST['category'];
        echo "<h1>".$topic." - ".$category."</h1>";

        $sql = "SELECT description FROM coding WHERE topic='$topic' AND category='$category'";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)){
            echo $row['description'];
        }
    }
?>
    </div>
</body>
</html>