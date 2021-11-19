<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\
        
        
        // User::create([
        //     'name' => 'Dean',
        //     'email' => 'dean@gi.com',
        //     'password' => bcrypt('1234')
        // ]);

        // Post::create([
        //     'title' => 'Post Satu',
        //     'category_id' => 1,
        //     'slug' => 'post-satu',
        //     'excerpt' => 'Xiao Cakep',
        //     'body' => '<p>kjsfbeurbciurycbwie, fueybciwuyrneicr, jcuweruwecr.</p><p>kjsfbeurbciurycbwie, fueybciwuyrneicr, jcuweruwecr.</p>',
        //     'user_id'=> 1 
        // ]);

        // Post::create([
        //     'title' => 'Post Dua',
        //     'category_id' => 2,
        //     'slug' => 'post-dua',
        //     'excerpt' => 'zhongli Cakep',
        //     'body' => '<p>kjsfbeurbciurycbwie, fueybciwuyrneicr, jcuweruwecr.</p><p>kjsfbeurbciurycbwie, fueybciwuyrneicr, jcuweruwecr.</p>',
        //     'user_id'=> 1
        
        // ]);

        // Post::create([
        //     'title' => 'Post Empat',
        //     'category_id' => 2,
        //     'slug' => 'post-Empat',
        //     'excerpt' => 'Baal Cakep',
        //     'body' => '<p>kjsfbeurbciurycbwie, fueybciwuyrneicr, jcuweruwecr.</p><p>kjsfbeurbciurycbwie, fueybciwuyrneicr, jcuweruwecr.</p>',
        //     'user_id'=> 1
        // ]);

        User::factory(3)->create();
        
        category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        category::create([
            'name' => 'Program',
            'slug' => 'program',
        ]);

        Post::factory(20)->create();
    }
}
