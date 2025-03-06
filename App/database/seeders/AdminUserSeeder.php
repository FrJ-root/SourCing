<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::Create([
            'name'=>'Admin',
            'email'=>'Admin@email.com',
            'password'=>Hash::make('Adminroot'),
            'role'=>'admin',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}