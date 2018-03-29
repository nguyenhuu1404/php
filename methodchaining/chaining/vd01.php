<?php
class Teacher{
	//phuong thuc teach tra ve doi tuong giup tu phuong thuc nay co the goi phuong thuc khac
	public function teach(){
		echo "Teaching";
		return $this;
	}
	public function train(){
		echo "Training";
		return $this;
	}
}
$teach=new Teacher;
$teach->teach()->train();