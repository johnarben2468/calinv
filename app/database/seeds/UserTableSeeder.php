
<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'John Arben Nicole D. Hombrebueno',
			'username' => 'admin1',
			'email'    => 'johnarbennicolehombrebueno@gmail.com',
			'password' => Hash::make('admin1'),
		));

	}
	

}
