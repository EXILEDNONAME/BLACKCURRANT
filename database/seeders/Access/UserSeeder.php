<?php

namespace Database\Seeders\Access;

use App\Models\User;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder {

  public function run(): void {
    $user = [
      [
        'name'        => 'Administrator',
        'email'       => 'admin@exilednoname.com',
        'phone'       => '0811',
        'username'    => 'administrator',
        'password'    => bcrypt('1234'),
        'created_at'  => Carbon::now(),
      ],
      [
        'name'        => 'User',
        'email'       => 'user@exilednoname.com',
        'phone'       => '08112448112',
        'username'    => 'user.exilednoname',
        'password'    => bcrypt('1234'),
        'created_at'  => Carbon::now(),
      ],
    ];
    User::insert($user);

  }
}
