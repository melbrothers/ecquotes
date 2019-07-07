<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
            [
              "id"=> 1,
              "user_id"=> null,
              "name"=>  "Laravel Personal Access Client",
              "secret"=>  "sW0mBS2yjFMrQFGXUlQYdJI42fDcXyIwb4ZigJJf",
              "redirect"=>  "http://localhost",
              "personal_access_client"=>  1,
              "password_client"=> 0,
              "revoked"=>  0,
              "created_at"=>  "2019-05-09 11:58:24",
              "updated_at"=>  "2019-05-09 11:58:24"
            ],
            [
              "id"=>  2,
              "user_id"=>  null,
              "name"=>  "Laravel Password Grant Client",
              "secret"=>  "b4XM65hFh7nj3EYxWYFer0ypTF3jwbS97zIH0nn2",
              "redirect" =>  "http://localhost",
              "personal_access_client" =>  0,
              "password_client"=>  1,
              "revoked" =>  0,
              "created_at"=>  "2019-05-09 11:58:24",
              "updated_at"=>  "2019-05-09 11:58:24"
            ]
          ]);

          DB::table('oauth_personal_access_clients')->insert([
            [
                "id"=> 1,
                "client_id"=> 1,
                "created_at"=> "2019-05-09 11:58:24",
                "updated_at"=> "2019-05-09 11:58:24"
              ]
          ]);
    }
}
