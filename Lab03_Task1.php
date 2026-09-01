<?php
// Task 1 - Create and Use a Class Constant

class Library
{
    const MAX_BOOKS = 3;
}

// A constant is used because the maximum number of books is a fixed value.
echo "Maximum books allowed: " . Library::MAX_BOOKS;
?>
