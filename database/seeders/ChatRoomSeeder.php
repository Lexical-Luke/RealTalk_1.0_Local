<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add a new chatroom to the table. We only need 1 for now.
        DB::table('chat_rooms')->insert(['name' => 'General']);
        DB::table('chat_rooms')->insert(['name' => 'Success']);
        DB::table('chat_rooms')->insert(['name' => 'Trash']);
    }
}
