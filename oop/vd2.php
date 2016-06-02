<?php
class Abc{
	public $name;
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

$a = new Abc;
$a->setName('huunv 2');
echo $a->getName();

//ta cung co the dung $a->name; de lay nam, nhung neu co che la protected thi khong lay duoc
//tai sao phai viet the set va get trong huong doi tuong