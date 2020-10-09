<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pjt_test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, nameArticles, contentArticles, author, category, datePublic, img FROM articles";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "<br>";
        echo "<hr>";
        echo "nameArticles: " . $row["nameArticles"]. "<br>";
        echo "<hr>";
        echo "contentArticles: " . $row["contentArticles"]. "<br>";
        echo "<hr>";
        echo "author:" . $row["author"]. "<br>";
        echo "<hr>";
        echo "category: " . $row["category"]. "<br>";
        echo "<hr>";
        echo "datePublicdatePublic: " . $row["datePublic"]. "<br>";
        echo "<hr>";
        echo "img: " . $row["img"]. "<br>";
    }
} else {
    echo "0 results";
}

?>