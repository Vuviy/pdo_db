<?php

namespace App;

use Exception;

class Controller
{

    public function test()
    {
        $config = config();

        $db = new Database($config);




// SELECT
//        $user = $db->table('users')
//            ->where('id', '=', 1)
//            ->first();


// UPDATE
//        $db->table('users')
//            ->where('id', '=', 1)
//            ->update(['name' => 'Petro']);


// DELETE
//        $db->table('users')
//            ->where('id', '=', 1)
//            ->delete();



// TRANSACTIONS
        try {
            $db->beginTransaction();

            $db->table('users')->insert(['name'=>'A', 'email'=>'a@test.com']);
            $db->table('users')->insert(['name'=>'B', 'email'=>'b@test.com']);

            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
        }


        $user = $db->table('users')->get();


        dd($user);




//        $db->table('users')->reset();
//        $db->select("
//    CREATE TABLE IF NOT EXISTS users (
//        id INTEGER PRIMARY KEY AUTOINCREMENT,
//        name TEXT NOT NULL,
//        email TEXT NOT NULL UNIQUE
//    )
//");

//        $id = $db->table('users')->insert([
//            'name' => 'Ivan',
//            'email' => 'ivan@test.com'
//        ]);
//        dd($id);
    }
}