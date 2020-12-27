<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title'=>'Desarrollo paginas web Responsive en React',
                'price'=>'150',
                'category'=>'Desarrollo Web',
                'description'=>'Explotación laboral por 15$ la hora',
                'gallery'=>'https://i2.wp.com/www.otakujournalist.com/wp-content/uploads/2017/09/nene2.png?resize=900%2C506&ssl=1'
            ],
            [
                'title'=>'Desarrollo paginas web Responsive en Laravel',
                'price'=>'300',
                'category'=>'Desarrollo Web',
                'description'=>'Explotación laboral por 30$ la hora',
                'gallery'=>'https://image.myanimelist.net/ui/pS5NP3aGIBuYLQdLYlDDPgCKoY4pji9KODXd7K-t-b1-589Glmsj6gmHuhyNtnwG4ENIlmVSHKyMKzB4rp8q5g'
            ],
            [
                'title'=>'Desarrollo paginas web Responsive en Next.js',
                'price'=>'200',
                'category'=>'Desarrollo Web',
                'description'=>'Explotación laboral por 20$ la hora',
                'gallery'=>'https://i.redd.it/1bqx324sk8w21.png'
            ],
            [
                'title'=>'Enseño Haskell desde 0',
                'price'=>'100',
                'category'=>'Educación',
                'description'=>'Enseño programación funcional hasta que entiendas, de lo contrario te devuelvo el dinero',
                'gallery'=>'https://raw.githubusercontent.com/boyEstrogen/Anime-Girls-Holding-Programming-Books/master/Haskell/Kujou_Karen_Learns_Haskell.png'
            ],
            [
                'title'=>'Enseño POO en Java',
                'price'=>'120',
                'category'=>'Educación',
                'description'=>'Enseño programación orientada a objetos en java hasta que entiendas, de lo contrario te devuelvo el dinero',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfRKjd4_Y-ANlBfSaJLo2MlJIUXeH65D-AYg&usqp=CAU'
            ]
            
            ]);
    }
}
