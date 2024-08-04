<?php
include 'db.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>Title</th><th>Author</th><th>Published Date</th><th>ISBN</th><th>Actions</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["author"] . "</td>";
        echo "<td>" . $row["published_date"] . "</td>";
        echo "<td>" . $row["isbn"] . "</td>";
        echo "<td><button class='btn btn-danger delete-btn' data-id='" . $row["id"] . "'>Delete</button></td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>No books available.</p>";
}
?>
