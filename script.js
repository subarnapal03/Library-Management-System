$(document).ready(function() {
    // Handle book deletion
    $(document).on('click', '.delete-btn', function() {
        var bookId = $(this).data('id');
        $.ajax({
            url: 'delete_book.php',
            method: 'POST',
            data: { book_id: bookId },
            success: function(response) {
                alert(response);
                // Refresh the book list
                $.ajax({
                    url: 'fetch_books.php',
                    method: 'GET',
                    success: function(data) {
                        $("#bookList").html(data);
                    }
                });
            }
        });
    });
});
