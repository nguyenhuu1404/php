<?php 
class Abc{
	public $ab = 100;
}
$a = new Abc;
$b = $a;
$b->ab = 500;
echo $a->ab;//500 do $a va $b deu la doi tuong the hien cua lop Abc nen thao tac tren no se anh huong den lop Abc

$c = clone($a); // dung tu khoa clone de nhan ban doi tuong thao tac tren doi tuong nhan ban k thay doi doi tuong goc
$c->ab = 600;

echo $a->ab;
