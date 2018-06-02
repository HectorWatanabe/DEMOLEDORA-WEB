<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Monitor + 20 Botellas',
                'slug' => 'monitor-20-botellas',
                'description' => 'Para dos personas. ¡El favorito de las parejas y/o amigos recientes!',
                'price1' => 111.78,
                'price2' => 70.78,
                'image' => 'Imagen1.gif',
                'visible' => 1,
            ],
        	[
                'name' => 'PC completa + 25 Botellas',
                'slug' => 'pc-completa-25-botellas',
                'description' => 'Para dos personas. ¡El favorito de las parejas y/o amigos recientes!',
                'price1' => 130.70,
                'price2' => 100.70,
                'image' => 'Imagen2.gif',
                'visible' => 1,
            ],
        	[
                'name' => 'TV 22″ + 30 Botellas',
                'slug' => 'tv-22-30-botellas',
                'description' => 'Para dos personas. ¡El favorito de las parejas y/o amigos recientes!',
                'price1' => 169.08,
                'price2' => 139.08,
                'image' => 'Imagen3.gif',
                'visible' => 1,
            ],            
    	    [
                'name' => 'TV 29″ + 35 Botellas',
                'slug' => 'tv-29-35-botellas',
                'description' => 'Para dos personas. ¡El favorito de las parejas y/o amigos recientes!',
                'price1' => 235.37,
                'price2' => 205.37,
                'image' => 'Imagen4.gif',
                'visible' => 1,
            ],
            [
                'name' => '30 Botellas',
                'slug' => '30-botellas',
                'description' => 'Para dos personas. ¡El favorito de las parejas y/o amigos recientes!',
                'price1' => 65.62,
                'price2' => 35.62,
                'image' => 'Imagen5.gif',
                'visible' => 1,
            ]
        );

        Product::insert($data);
    }
}
