<?php
//lop cha là nhân vật
class Character{
	public $name;
	public $atk;
	public $rank;
	public function __construct($name,$atk){
		$this->name=$name;
		$this->atk=$atk;
	}
	public function getName(){
		return $this->name;
	}
	public function getAtk(){
		return $this->atk;
	}
	public function getRank(){
		return $this->rank;
	}		
}
//class con của lớp nhân vật nhan vat
class WarriorCharacter extends Character{
	public $rank="Warrior";

}
//lớp con của lớp nhân vật
class BishopCharacter extends Character{
	public $rank="Bishop";	
}
//co che ho tro xay dung nhân vật
class CharacterBuilder{
	public $character;
	//dang ki 1 lop nhan vat
	public function register($name,$atk,$rank){
		$this->character= CharacterFactory::create($name,$atk,$rank);
	}
	public function getCharacter(){
		return $this->character;
	}
}
//lop xu dung factory dung để khởi tạo đối tượng từ các đối số mà người dùng truyền vào
//dung thuoc tính tĩnh
class CharacterFactory{
	public static function create($name,$atk,$rank){
		$rankClass=$rank."Character";
		//kiem tra xem class có tồn tại không, nếu không tồn tại thì báo không tồn tại lớp
		if(class_exists($rankClass))
			return new $rankClass($name,$atk);
		else
			die('Không tồn tại class này');
	}
}

$character=new CharacterBuilder;
$character->register('Kenny','80','Bishop');
echo "Name: ".$character->getCharacter()->getName();
echo "<br />Atk: ".$character->getCharacter()->getAtk();
echo "<br />Rank: ".$character->getCharacter()->getRank();
