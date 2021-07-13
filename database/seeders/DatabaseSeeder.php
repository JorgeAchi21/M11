<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\peopleGest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $people = new peopleGest();

        $people->name ="Jose";
        $people->surname="Ramirez";
        $people->date_of_bird ="1970-01-15";
        $people->phone_number="931111111";
        $people->task ="programador junior";
        $people->department="sistemas";
        $people->aditional_info ="Lorem ipsum dolor sit amet consectetur adipisicing elit. In doloremque ex labore expedita saepe voluptate quam, minus perspiciatis repudiandae omnis.";
        $people->save();
        
        $people1 = new peopleGest();
        
        $people1->name ="Antonio";
        $people1->surname="Pascual";
        $people1->date_of_bird ="1971-02-15";
        $people1->phone_number="932222222";
        $people1->task ="programador senior";
        $people1->department="sistemas";
        $people1->aditional_info ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus labore dolor vitae! Obcaecati aliquid neque ipsum pariatur atque perspiciatis laudantium esse, modi labore culpa, accusantium expedita ex ullam illo quibusdam hic mollitia iste officia! Atque facilis veritatis hic beatae placeat.";

        $people1->save();

        $people2 = new peopleGest();
        
        $people2->name ="Maria";
        $people2->surname="Mengual";
        $people2->date_of_bird ="1972/03/15";
        $people2->phone_number="933333333";
        $people2->task ="responsable";
        $people2->department="sistemas";
        $people2->aditional_info ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus labore dolor vitae! Obcaecati aliquid neque ipsum pariatur atquee perspiciatis laudantium esse, modi labore culpa, accusantium expedita ex ullam illoe quibusdam hic mollitia iste officia! Atque facilis veritatis hic beatae placeat.";
        
        $people2->save();
    }
}
