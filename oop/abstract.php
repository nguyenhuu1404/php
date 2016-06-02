<?php
abstract class dongvat{
	public $name;
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	abstract function amthanh();
	abstract function chan();
}
class dog extends dongvat{
	public function amthanh() {
		echo "gau gau";
	}
	public function chan() {
		echo "4 chan";
	}
}
class ga extends dongvat{
	public function amthanh() {
		echo "cuc tac";
	}
	public function chan() {
		echo "2 chan";
	}
}

$a = new dog;
$a->setName('lulu');
echo $a->getName();
$a->amthanh();
$a->chan();
echo "<hr>";
$b = new ga;
$b->setName('chip chip');
echo $b->getName();
$b->amthanh();
$b->chan();
