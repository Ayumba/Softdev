<?php 
	class Book
	{
	public $type;
	public $size;
    }
    public function displayMyClassBook()
    {
        echo 'This book is mine!';
        echo 'I bought this book!';
    }

    $book_one = new Book();
    $book_one->type = 'single_rule';
    $book_one->size='a4';
    $book_one->displayMyClassBook();

    echo $book_one->type;
    echo $book_one->size;
?>