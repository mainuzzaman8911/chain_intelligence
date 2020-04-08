<?php
    //database connection
    include("dbconnection.php");

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        $sql = "INSERT INTO blog (title, description)
        VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Data inserted successfully";
        } else {
            echo "Data Insertion Failed".mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Blog</title>
    <link rel="stylesheet" href="addto_blog.css">
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
    <h1 style="text-align: center;">Chain-Intelligence | Admin Page</h1>
    <br>
    <h3>Create New Blog</h3>
    <hr>

    <div id="main-content">
        <form action="" method="post">
            <input type="submit" name="submit" value="Post It to Chain-Intelligence"> <br> <br>
            <label>Title: </label> <br>
            <input type="text" name="title" id="">
            <br> <br>
            <label>Enter contents of your blog here: </label> <br>
            <textarea name="description" id="description" cols="100" rows="1000" required></textarea>
        </form>
    </div>
</body>
</html>