<?php


use Faker\Factory as Faker;

class PropertiesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('en_GB');

		foreach(range(1, 54) as $index)
		{
            $bedrooms = $faker->numberBetween(1,6);
            $rent = 495 + ($bedrooms * 100);
			Property::create([
                'address' => $faker->buildingNumber . " " . $faker->streetName,
                'bedrooms' => $bedrooms,
                'rent' => $rent,
                'likes' => $faker->numberBetween(5,50),
                'img' => 'NOT_USED'
			]);
		}
	}

}