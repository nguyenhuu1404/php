<?php 
//tạo ra một mẩu giao diện interface
interface khudulich{
	public function lichtrinh();
}
//tạo ra các lớp có giao diện la khu du lich
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
	//dung type hitting rang buộc biến dipic phải là một đối tượng có giao dien khudulich
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
