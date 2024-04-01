<?php

namespace Database\Seeders;

use App\Models\Admin\Blog\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $softwares = array(
            array('id' => '1','name' => 'Adobe Photoshop','slug' => 'adobe-photoshop','created_at' => '2024-03-05 11:06:25','updated_at' => '2024-03-05 11:06:25'),
            array('id' => '2','name' => 'Adobe Illustrator','slug' => 'adobe-illustrator','created_at' => '2024-03-05 11:07:14','updated_at' => '2024-03-05 11:07:14'),
            array('id' => '3','name' => 'Adobe XD','slug' => 'adobe-xd','created_at' => '2024-03-05 11:27:06','updated_at' => '2024-03-05 11:27:06'),
            array('id' => '4','name' => 'Figma','slug' => 'figma','created_at' => '2024-03-05 11:27:15','updated_at' => '2024-03-05 11:27:15')
          );

          Software::insert($softwares);
    }
}
