// app/database/seeds/UserTableSeeder.php

<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('user')->delete();
    User::create(array(
        'FirstName'     => 'Zawar',
        'LastName' => 'Mahmood',
        'email'    => 'zetawars@hotmail.com',
        'password' => Hash::make('Zawar123'),
        'Username' => 'zetawars',
        'PrefferedName' => 'Zawar Mahmood'

    ));
}

}
