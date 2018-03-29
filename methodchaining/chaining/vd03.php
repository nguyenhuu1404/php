<?php
class Person{
	public $name;
	public $age;
	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
	public function getName(){
		return $this->name;
	}
	public function getAge(){
		return $this->age;
	}

}

class Teacher{
	public $person;
	public function setPerson($name,$age){
		$this->person = new Person($name,$age);
	}
	public function getPerson(){
		return $this->person;
	}
}
//tu mot doi tuong goi den phuong thuc cua doi thuong khac
//bang cach coi doi tuong nay la thuoc tinh cua doi tuong kia
//su dung thuoc tinh de luu mot doi tuong va goi doi tuong do qua thuoc tinh' nay 
$teacher = new Teacher;
$teacher->setPerson('Kenny',18);
echo $teacher->getPerson()->getName();
echo $teacher->getPerson()->getAge();