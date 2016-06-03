<?php
class Author{
	protected $authorName;
	protected $authorEmail;
	public function __construct($name,$email){
		$this->authorName= $name;
		$this->authorEmail= $email;
	}
	public function getAuthorName(){
		return $this->authorName;
	}
	public function getAuthorEmail(){
		return $this->authorEmail;
	}
}

class Book{
	protected $authorInfo;
	protected $bookName;
	public function __construct($bookName){
		$this->bookName=$bookName;
	}
	public function getBookName(){
		return $this->bookName;
	}
	public function getAuthorInfo(){
		return $this->authorInfo;
	}
	public function setAuthorInfo(Author $author){
		$this->authorInfo=$author;
	}
}
$author=new Author('Kenny','Kenny@qhonline.info');
$book=new Book('Zend Framework 2.x');
$book->setAuthorInfo($author);
echo "Book Name: ". $book->getBookName();
echo "<br /> Author: ".$book->getAuthorInfo()->getAuthorName();
echo "<br /> Email: ".$book->getAuthorInfo()->getAuthorEmail();