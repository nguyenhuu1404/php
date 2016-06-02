<?php
class Abc{
	static $name = 'abcd';
	public function test() {
		echo self::name;
	}
}

echo Abc::$name;