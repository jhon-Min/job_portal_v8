<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // User::create([
        //     'name' => 'Seo Jun Min',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('password'),
        //     'gender' => 'male'
        // ]);

        $cats = ['Web Developer', 'Infra', 'Mobile'];
        foreach ($cats as $cat) {
            Category::create([
                'name' => $cat
            ]);
        }
    }
}
