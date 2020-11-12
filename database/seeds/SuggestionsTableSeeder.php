<?php

use Illuminate\Database\Seeder;
use App\Suggestion;

class SuggestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Suggestion::class, 5)->create();
    }
}
