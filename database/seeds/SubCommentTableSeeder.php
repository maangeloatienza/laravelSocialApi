<?php

use Illuminate\Database\Seeder;
use App\SubComment;

class SubCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SubComment::class,1)->create();
    }
}
