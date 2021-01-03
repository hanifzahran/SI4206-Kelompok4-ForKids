<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
use App\Models\ParentChild;
use App\Models\Child;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Administrator',
                'email' => 'admin@web.com',
                'password' => Hash::make('admin123'),
                'isAdmin' => 1,
                'isParent' => 0,
                'isChild' => 0
            ],
            [
                'name' => 'Parent',
                'email' => 'parent@web.com',
                'password' => Hash::make('parent123'),
                'isAdmin' => 0,
                'isParent' => 1,
                'isChild' => 0
            ],
            [
                'name' => 'Child',
                'email' => 'child@web.com',
                'password' => Hash::make('child123'),
                'isAdmin' => 0,
                'isParent' => 0,
                'isChild' => 1
            ],
        ];
        DB::transaction(function () use($data) {
            $user = User::insert($data); 
            $parent = ParentChild::create([
                'user_id' => 2,
                'tanggal_lahir' => date('Y-m-d'),
                'alamat' => 'tesss ajaa',
                'hp' => '08123124124',
            ]);
            Child::create([
                'user_id' => 3,
                'parent_child_id' => $parent->id,
                'tanggal_lahir' => date('Y-m-d'),
                'alamat' => 'aadadadada',
                'hp' => '08124124124',
            ]);
        });
    }
}
