<?php


namespace Tests\Unit\entity;
use App\entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
	/**
	 * @dataProvider pricesForFoodProduct
	 */
	public function testComputeTVAProductTypeFood($price, $exceptedTva)
	{
		$product = new Product('mango', Product::FOOD_PRODUCT, $price);
		$result = $product->computeTVA();

		$this->assertSame($exceptedTva, $result);
	}

	public function pricesForFoodProduct()
	{
		return [
			[0, 0.0],
			[20, 1.1],
			[100, 5.5]
		];
	}


	public function testComputeTVAProductOtherType()
	{
		$product = new Product('oneplus', 'smartphone', 500);
		$result = $product->computeTVA();

		$this->assertSame(500 * 0.196, $result);
	}

	public function testComputeTVANegativePrice()
	{
		$product = new Product('iphone', 'smartphone', -500);

		$this->expectException('LogicException');

		$result = $product->computeTVA();
	}
}