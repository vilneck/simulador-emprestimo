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
            ['name'=>'Citroen C4 2014','description'=>'Um carro ótimo para a estrada, confortável, ano 2014','value'=>42000,'brand_id'=>Brand::getIdByName('Citroen')],
            ['name'=>'Golf 2014','description'=>'Carro bonito e moderno','value'=>70000,'brand_id'=>Brand::getIdByName('Volkswagen')],
            ['name'=>'Hilux 2010','description'=>'Perfeito para todo tipo de terreno','value'=>90000,'brand_id'=>Brand::getIdByName('Toyota')],
            ['name'=>'Santana 2008','description'=>'Carro das antiguidades','value'=>7000,'brand_id'=>Brand::getIdByName('Volkswagen')]
        ];
        foreach($cars as $car)
        {
            Car::create($car);
        }
    }
}
