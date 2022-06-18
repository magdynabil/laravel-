<?php

use Illuminate\Database\Seeder;
use App\User;
class userdb extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<20;$i++) {
            $add = new User;
            $add->name = 'magdy' . rand(0, 9);
            $add->email = 'magdy' . rand(0, 9999) . '@gmail.com';
            $add->password = 'ssewfefefr' . rand(0, 9);
            $add->save();
        }
    }
}
