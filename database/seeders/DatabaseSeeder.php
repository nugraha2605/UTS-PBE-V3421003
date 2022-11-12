<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Aditya Adi Nugroho',
            'email'=>'nugraha260500@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        User::create([
            'name'=>'Julefah',
            'email'=>'jule@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        Category::create([
            'name'=>'Web-Programming',
            'slug'=>'Web-Programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'Personal'
        ]);

        Category::create([
            'name'=>'Web-Design',
            'slug'=>'Web-Design'
        ]);

        Post::create([
            'title'=>'Judul Pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'[1]Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body'=>'[1]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur consequatur obcaecati nam accusamus atque corporis, error adipisci quaerat, eum omnis nihil perspiciatis repellendus, deserunt reiciendis. Voluptatum minus provident deleniti quod, explicabo vero debitis et accusantium id, dolorum qui voluptates, possimus sint iste voluptatibus sit ducimus cum labore aspernatur fugit nulla. Ab, eum? Voluptatem ex asperiores expedita quis ipsum ducimus rerum omnis eum, ea quibusdam laborum suscipit quo minima repellat ullam in? Saepe ea, iusto iste expedita odit assumenda repellat deleniti ad non similique dicta ipsam, architecto nemo fuga obcaecati rerum dolorem blanditiis provident. Unde odio cum sequi inventore delectus vitae doloribus, architecto harum deserunt dolorum? Corrupti quibusdam, nihil illo quaerat blanditiis, eaque reiciendis temporibus adipisci, assumenda minima ab impedit dolorem vero corporis quia. Assumenda aut sint iusto fuga odio eligendi, cumque harum atque, voluptatem et nostrum quisquam! Omnis expedita laborum consectetur id, magnam aliquid, ullam sunt voluptatem velit dignissimos sequi!',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'[2]Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body'=>'[2]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur consequatur obcaecati nam accusamus atque corporis, error adipisci quaerat, eum omnis nihil perspiciatis repellendus, deserunt reiciendis. Voluptatum minus provident deleniti quod, explicabo vero debitis et accusantium id, dolorum qui voluptates, possimus sint iste voluptatibus sit ducimus cum labore aspernatur fugit nulla. Ab, eum? Voluptatem ex asperiores expedita quis ipsum ducimus rerum omnis eum, ea quibusdam laborum suscipit quo minima repellat ullam in? Saepe ea, iusto iste expedita odit assumenda repellat deleniti ad non similique dicta ipsam, architecto nemo fuga obcaecati rerum dolorem blanditiis provident. Unde odio cum sequi inventore delectus vitae doloribus, architecto harum deserunt dolorum? Corrupti quibusdam, nihil illo quaerat blanditiis, eaque reiciendis temporibus adipisci, assumenda minima ab impedit dolorem vero corporis quia. Assumenda aut sint iusto fuga odio eligendi, cumque harum atque, voluptatem et nostrum quisquam! Omnis expedita laborum consectetur id, magnam aliquid, ullam sunt voluptatem velit dignissimos sequi!',
            'category_id'=>2,
            'user_id'=>2
        ]);

        Post::create([
            'title'=>'Judul Ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'[3]Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body'=>'[3]Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur consequatur obcaecati nam accusamus atque corporis, error adipisci quaerat, eum omnis nihil perspiciatis repellendus, deserunt reiciendis. Voluptatum minus provident deleniti quod, explicabo vero debitis et accusantium id, dolorum qui voluptates, possimus sint iste voluptatibus sit ducimus cum labore aspernatur fugit nulla. Ab, eum? Voluptatem ex asperiores expedita quis ipsum ducimus rerum omnis eum, ea quibusdam laborum suscipit quo minima repellat ullam in? Saepe ea, iusto iste expedita odit assumenda repellat deleniti ad non similique dicta ipsam, architecto nemo fuga obcaecati rerum dolorem blanditiis provident. Unde odio cum sequi inventore delectus vitae doloribus, architecto harum deserunt dolorum? Corrupti quibusdam, nihil illo quaerat blanditiis, eaque reiciendis temporibus adipisci, assumenda minima ab impedit dolorem vero corporis quia. Assumenda aut sint iusto fuga odio eligendi, cumque harum atque, voluptatem et nostrum quisquam! Omnis expedita laborum consectetur id, magnam aliquid, ullam sunt voluptatem velit dignissimos sequi!',
            'category_id'=>1,
            'user_id'=>1
        ]);
    }
}
