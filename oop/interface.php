<?php
interface dongvat{
	function amthanh();
	function chan();
}
interface khac{
	function loiich();
}
class khaibao{
	public $name;
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

class dog extends khaibao implements dongvat, khac{
	public function amthanh() {
		echo "gau gau";
	}
	public function chan() {
		echo "4 chan";
	}
	public function loiich() {
		echo "giu nha";
	}
}
class chuot extends khaibao implements dongvat{
	public function amthanh() {
		echo "chit chit";
	}
	public function chan() {
		echo "4 chan";
	}
}

$a = new dog;
$a->setName('Lu lu');
echo $a->getName();
$a->amthanh();
$a->chan();
$a->loiich();
echo "<hr>";
$b = new chuot;
$b->setName('mickey');
echo $b->getName();
$b->amthanh();
$b->chan();
