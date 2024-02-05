<?php


class Book {
    private string $title;
    private string $author;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function __toString(): string {
        return "Book: {$this->title} by {$this->author}";
    }
}

$book = new Book("PHP Basics", "John Doe");

// When the object is treated as a string (e.g., echoed), the __toString() method is automatically called.
echo $book; // Output: Book: PHP Basics by John Doe


