<?php
class Teacher{
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