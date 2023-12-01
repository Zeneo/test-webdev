<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Petras',
                'surname' => 'Jeraslovas',
            ],
            [
                'name' => 'Antanas',
                'surname' => 'Pustinkis',
            ],
            [
                'name' => 'Valdas',
                'surname' => 'Igorovi2ius',
            ],
            [
                'name' => 'Vladimiras',
                'surname' => 'Neputinas',
            ],
        ];
        $pass = Hash::make('password');     // Same pass for all users to easily remember in seeder
        $i = 0;
        foreach($users as $user) {
            // Address = {random street naming} . g. {random house number} {random city name}, {random post code Lithuania
            $address = $this->randomString(random_int(3,12)).' str. '.random_int(1,400).' '
                .$this->randomString(random_int(3,10)).', '.random_int(1000,8000).' Lithuania';
            DB::table('users')->insert([
                'first_name' => $user['name'],
                'last_name' => $user['surname'],
                'email' => strtolower($user['name'].'.'.$user['name']).'@example.com',
                'password' => $pass,
                'address' => $address
            ]);

            $i++;
        }
        echo "USERS SEEDER: finished $i user".($i>1?"s":"")." seeder successfully";
    }

    /**
     * @param int $length
     * @param bool $capitalize
     * @return string
     * @throws \Exception
     */
    private function randomString(int $length = 0, $capitalize = true): string
    {
        if(!$length || !is_int($length)) {
            $length = random_int(1, 12);
        }
        $include_chars = "abcdefghijklmnopqrstuvwxyz";
        /* Uncomment below to include symbols */
        /* $include_chars .= "[{(!@#$%^/&*_+;?\:)}]"; */
        $charLength = strlen($include_chars);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            if($i == 0 && $capitalize) {
                $randomString = strtoupper($include_chars [rand(0, $charLength - 1)]);
            } else {
                $randomString .= $include_chars [rand(0, $charLength - 1)];
            }
        }

        return $randomString;
    }
}
