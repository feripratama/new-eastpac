<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'email_verified' => 0,
                'email_verified_at' => '2019-01-12 06:18:57',
                'mobilenumber' => '0982828',
                'phone_verified' => 0,
                'phone_verified_at' => NULL,
                'enable_twoway' => 0,
                'password' => '$2y$10$uFKlerQuF1cDFMfn0Ya2AuFG1Ihiz518wr78rfkj71LP77zkbsSaG',
                'remember_token' => 'lNsaJSaWIHLcCHxrFKxWzx9HGHTp8QlmMoWK8GfDUknwRJggKcWk48aCabNu',
                'created_at' => '2019-01-12 06:18:40',
                'updated_at' => '2019-01-12 06:18:57',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'member1',
                'name' => 'member1',
                'email' => 'member@mail.com',
                'email_verified' => 0,
                'email_verified_at' => '2019-01-12 06:21:21',
                'mobilenumber' => '2929292',
                'phone_verified' => 0,
                'phone_verified_at' => NULL,
                'enable_twoway' => 0,
                'password' => '$2y$10$9mPMa3BzZToIRcOYsaMQQekfka.mnmRFMIMgpVs/YU0g7lgIVQhMi',
                'remember_token' => 'JLYAGs5nXoo1AtEaUK5QyMRdQ6hzGmSJN4cdR2Ovb5wdZIDqxbiEdheioj06',
                'created_at' => '2019-01-12 06:21:03',
                'updated_at' => '2019-01-12 06:21:21',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'member2',
                'name' => 'member2',
                'email' => 'member2@mail.com',
                'email_verified' => 0,
                'email_verified_at' => '2019-01-12 06:22:03',
                'mobilenumber' => '837392',
                'phone_verified' => 0,
                'phone_verified_at' => NULL,
                'enable_twoway' => 0,
                'password' => '$2y$10$q7jiFVx0RKXpJUa/8v2FU.O/Hw2aR4TTDMzIw19pmr6CLuMOHY4mS',
                'remember_token' => 'UAcUvs8jiJHOsCg4IdmX2IkYt5F6fxLJEk2W8TIGs5JWPzGH4dibt39J9uNz',
                'created_at' => '2019-01-12 06:21:52',
                'updated_at' => '2019-01-12 06:22:03',
            ),
        ));
        
        
    }
}