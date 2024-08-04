<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = $_POST['book_id'];

    $sql = "DELETE FROM books WHERE id = $book_id";

    if ($conn->query($sql) === TRUE) {
        echo "Book deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
