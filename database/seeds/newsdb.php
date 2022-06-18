<?php

use Illuminate\Database\Seeder;
use App\News;

class newsdb extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<20;$i++)
        {
            $add=New News;
            $add->title='my title'.rand(0,9);;
            $add->add_by=1;
            $add->description='my description'.rand(0,9);
            $add->content='my content'.rand(0,9);
            $add->status='activ';
            $add->save();
        }
    }
}
