<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $products = array(
            array('Urban Shoes', 'Urban Shoes', 3500, 'M', '83970.jpg'),
            array('Camel Shoes C2', 'Camel shoes C2', 3500, 'M', '29315.jpg'),
            array('Casual Shoes', 'Casual Shoes for indoor as well as outdoor activities.', 3200, 'M', '97832.jpg'),
            array('Camel Shoes G2', 'Camel Shoes G2', 4500, 'M', '93250.jpg'),
            array('Camel Shoes', 'Camel shoes for outdoor activities', 4000, 'M', '96674.jpg'),
            array('Camel Shoes C5', 'Camel Shoes C5', 4000, 'M', '84738.jpg'),
            array('Formal Brown Shoes', 'Formal Shoes ', 3200, 'M', '30305.jpg'),
            array('Women Camel Shoes ', 'Camel shoes for all kinds of outdoor activity.', 1600, 'F', '95328.jpg'),
            array('Women Camel Ballerina', 'Camel Ballerina', 2000, 'F', '38213.jpg'),
            array('Women Black Sandal', 'Black Sandals', 2100, 'F', '65530.jpg'),
            array('Women Black Sandals', 'Women Black Sandals', 2200, 'F', '51763.jpg')
        );

        for($i = 0; $i < count($products); $i++){
            
            DB::table('tb_product')->insert([
                'name' => $products[$i][0],
                'description' =>  $products[$i][1],
                'price' =>  $products[$i][2],
                'type' => $products[$i][3],
                'image' =>  $products[$i][4]          
            ]);
        }
    }
}
