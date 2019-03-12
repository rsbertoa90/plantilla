<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 



      $super = new User();
      $super->name = 'Rodrigo';
      $super->email = 'rsbertoa90@gmail.com';
      $super->password = bcrypt('rsbertoa90');
      $super->role_id =1 ;
      $super->save();
   
    }
}
