<?php 
    include('dbconnection.php');
    if (isset($_POST['submit'])) {
        $topic = $_POST['topic'];
        $category = $_POST['category'];
        $description = "<pre>".$_POST['description']."</pre>";
        
        $sql = "INSERT INTO coding (topic, category, description)
        VALUES ('$topic', '$category', '$description')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Insertion Failed".mysqli_error($conn);
        } else {
            echo "Successfully Inserted";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Coding</title>
    <link rel="stylesheet" href="addto_coding.css">
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
    <h3>Add New Item to Coding Section</h3>
    <hr>

    <div id="main-content">
        <form action="" method="post">
            <input type="submit" name="submit" value="Post It to Chain-Intelligence"> <br> <br>
            <label>Topic: </label> <br>
            <select name="topic">
                <option value="Deep Learning">Deep Learning</option>
                <option value="Sorting">Sorting</option>
                <option value="C">C</option>
                <option value="Machine Learing">Machine Learning</option>
                <option value="Searching">Searcing</option>
                <option value="C++">C++</option>
                <option value="NLP">NLP</option>
                <option value="Greedy Algorithm">Greedy Algorithm</option>
                <option value="Python">Python</option>
                <option value="Neural Networks">Neural Networks</option>
                <option value="Dynamic Programming">Dynamic Programming</option>
                <option value="PHP">PHP</option>
            </select> <br> <br>
            <label>Category: </label> <br>
            <input type="text" name="category" id="category" required> <br> <br>
            <label>Enter your code and explanation here: </label> <br>
            <textarea name="description" id="description" cols="100" rows="1000" required></textarea>
        </form>
    </div>
</body>
</html>
