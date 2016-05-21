<?php

namespace LucasSantosAbreu\CoffeTest;

use LucasSantosAbreu\Coffe\Coffe;

class CoffeTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @convers \LucasSantosAbreu\Coffe\Coffe::__construct
	 * @convers \LucasSantosAbreu\Coffe\Coffe::isEmpty
	 */
	public function testIsCoffeMugEmptyWhenCreated() {
		$mug = new Coffe();
		$isEmpty = $mug->isEmpty();
		$this->assertEquals($isEmpty, true); 
		return $mug;
	}

	/**
	 * @convers \LucasSantosAbreu\Coffe\Coffe::drink
	 * @depends testIsCoffeMugEmptyWhenCreated
	 * @expectedException \LucasSantosAbreu\Coffe\Exception\EmptyCoffeMugException
	 */
	public function testCantDrinkEmptyCoffeMug ($mug) {
		$mug->drink();
	}

	/**
	 * @convers \LucasSantosAbreu\Coffe\Coffe::refill
	 * @depends testIsCoffeMugEmptyWhenCreated
	 */
	public function testCanRefillAEmptyMug ($mug) {
		$mug->refill();
		$this->assertEquals($mug->isEmpty(), false);

		return $mug;
	}

}
