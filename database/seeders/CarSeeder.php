<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            ['name'=>'Gol 2000','description'=>'Um carro ótimo para a cidade, ano 2000','value'=>9500,'brand_id'=>Brand::getIdByName('Volkswagen')],
            ['name'=>'Citroen C4 2014','description'=>'Um carro ótimo para a estrada, confortável, ano 2014','value'=>42000,'brand_id'=>Brand::getIdByName('Citroen')]
        ];
        foreach($cars as $car)
        {
            Car::create($car);
        }
    }
}
