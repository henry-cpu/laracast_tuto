<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;

class ExampleTest extends TestCase
{
	use MakesHttpRequests;
    /**
     * A basic test example.
     *
     * @return void
     */
	 public function testBasicTest()
	 {
		 $this->assertTrue(true);
		 /*$dat [10, 20, 30];
		 $result = array_sum($data);
		 $this->assertEquals(60, $result);*/
    }
}
