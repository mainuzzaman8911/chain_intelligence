<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs | Chain-Intelligence</title>
    <link rel="stylesheet" href="blog.css">
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
        <h1>Welcome to Chain-Intelligence Blog</h1>
<?php
    //database connection
    include("dbconnection.php");
    
    $sql = "SELECT title FROM blog";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "".mysqli_error($conn);
    }

    while($row = mysqli_fetch_array($result)){
        ?>
        <form action="blog_result.php" method="post">
            <input type="hidden" name="title" value="<?php echo $row['title']; ?>">
            <input type="submit" name="submit" class="blog-content" value="<?php echo $row['title']; ?>">
        </form>
        <?php
    }
?>
    </section>
    
</body>
</html>