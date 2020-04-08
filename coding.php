<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding | Chain-Intelligence</title>
    <link rel="stylesheet" href="coding.css">
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
    <br> <br> <br> 

    <section id="main-content">
        <h1 style="">Coding Categories</h1>
        <table>
            <tr>
                <td>Artificial Intelligence</td>
                <td>Algorithm</td>
                <td>Languages</td>
            </tr>
            <tr>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="Deep Learning">
                        <input type="submit" name="submit" value="Deep Learing">
                    </form>
                </td>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="Sorting">
                        <input type="submit" name="submit" value="Sorting">
                    </form>
                </td>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="C">
                        <input type="submit" name="submit" value="C">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="Machine Learning">
                        <input type="submit" name="submit" value="Machine Learning">
                    </form>
                </td>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="Searching">
                        <input type="submit" name="submit" value="Searching">
                    </form>
                </td>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="C++">
                        <input type="submit" name="submit" value="C++">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="NLP">
                        <input type="submit" name="submit" value="NLP">
                    </form>
                </td>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="Greedy Algorithm">
                        <input type="submit" name="submit" value="Greedy Algorithm">
                    </form>
                </td>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="Python">
                        <input type="submit" name="submit" value="Python">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="Networks">
                        <input type="submit" name="submit" value="Neural Networks">
                    </form>
                </td>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="Dynamic Programming">
                        <input type="submit" name="submit" value="Dynamic Programming">
                    </form>
                </td>
                <td>
                    <form action="sub_result.php" method="post">
                        <input type="hidden" name="topic" value="PHP">
                        <input type="submit" name="submit" value="PHP">
                    </form>
                </td>
            </tr>
        </table>
    </section>

    <br> <br> 

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