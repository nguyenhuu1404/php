<?php
class Abc {
	const RED = 'mau do';
	static function test() {
		return self::RED;
	}
}
echo Abc::test();