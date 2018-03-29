<?php
//lop tac gia
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
//lop sach
class Book{
	protected $authorInfo;
	protected $bookName;
	public function __construct($bookName){
		$this->bookName=$bookName;
	}
	public function getBookName(){
		return $this->bookName;
	}
	//tra ve doi tuong AuthorInfo
	public function getAuthorInfo(){
		return $this->authorInfo;
	}
	//tao ra doi tuong AuthorInfo
	//dung type hinting
	public function setAuthorInfo(Author $author){
		$this->authorInfo=$author;
	}
}
//khoi tao doi tuong author
$author=new Author('Kenny','Kenny@qhonline.info');
//khoi tạo đối tượng book
$book=new Book('Zend Framework 2.x');
//khoi tạo dói tượng authorInfo
$book->setAuthorInfo($author);
echo "Book Name: ". $book->getBookName();
echo "<br /> Author: ".$book->getAuthorInfo()->getAuthorName();
echo "<br /> Email: ".$book->getAuthorInfo()->getAuthorEmail();
//dependency injection
//khởi tạo 2 đối tượng book và author độc lập