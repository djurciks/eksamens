<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product = new \App\Product([
        	'imagePath' => 'https://media.kingston.com/images/products/HyperX_Headset_GM_1_hr.jpg',
        	'title' => 'HyperX Cloud II', 
        	'description' => 'Superb audio quality, great design, 7.1 audio, very nice mic',
        	'price' => 100
        	]);
        $product->save();

        $product = new \app\product([
        	'imagePath' => 'http://gaming.logitech.com/assets/47828/g930-gaming-headset-images.png',
        	'title' => 'Logitech G930', 
        	'description' => 'Great audio quality, 7.1, wireless',
        	'price' => 160
        	]);
        $product->save();

        $product = new \app\product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/41KFerym3bL._SY355_.jpg',
        	'title' => 'HyperX Cloud ', 
        	'description' => 'Nice design, good audio quality',
        	'price' => 75
        	]);
        $product->save();

        $product = new \App\product([
        	'imagePath' => 'https://media.steelseriescdn.com/thumbs/catalogue/products/00703-siberia-350-black/f21dbc017b8f4744a2e9fc7e1a38781b.png.1000x575_q85_crop-smart.png',
        	'title' => 'SteelSeries Siberia 350', 
        	'description' => 'Exelent audio quality, detachable cable, great mic',
        	'price' => 100
        	]);
        $product->save();

        $product = new \app\product([
        	'imagePath' => 'http://assets.razerzone.com/eeimages/products/25976/razer_kraken_pro_v2_rgb_v04.png',
        	'title' => 'Razer Kraken Pro V2', 
        	'description' => 'Good sound isolation, nice design, removable mic',
        	'price' => 80
        	]);
        $product->save();

        $product = new \app\product([
        	'imagePath' => 'http://s3.amazonaws.com/digitaltrends-uploads-prod/2016/07/sennheiser-pc-373d.jpg',
        	'title' => 'Sennheiser pc 373d', 
        	'description' => 'Nice design,7.1 surround sound, noise cancelling',
        	'price' => 250
        	]);
        $product->save();
    }
}
