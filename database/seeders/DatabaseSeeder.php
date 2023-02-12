<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // just for demo. php artisan passport:client --public to create another client.
        DB::table("oauth_clients")->insert([
            "id" => "987143e9-a42c-435f-a6b4-096495c993cf",
            "name" => "Passport GraphQL Vite Vue",
            "redirect" => "http://localhost:3000/oauth/callback",
            "personal_access_client" => false,
            "password_client" => false,
            "revoked" => false,
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
