<?php 
interface khudulich{
	public function lichtrinh();
}

class VungTau implements khudulich{
	public function lichtrinh(){
		echo "Lịch trình đi Vùng Tàu";
	}
}

class Dalat implements khudulich{
	public function lichtrinh(){
		echo "Lịch trình đi Đà Lạt";
	}
}

class NhaTrang implements khudulich{
	public function lichtrinh(){
		echo "Lịch trình đi Nha Trang";
	}
}

class Nghile{
	public $picnic;
	public function setPicnic(khudulich $dipic){
		$this->picnic= $dipic;
	}
	public function getPicnic(){
		return $this->picnic;
	}
}

$dalat= new Dalat;
$nghile=new Nghile;
$nghile->setPicnic($dalat);
$nghile->getPicnic()->lichtrinh();
echo "<br />";
$nhatrang=new NhaTrang;
$nghile->setPicnic($nhatrang);
$nghile->getPicnic()->lichtrinh();
