<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('moradores')->delete();
		User::create(array(
			'id' =>1355,
			'nome'     => 'Maurice',
			'sobrenome' => 'AINON',
			'email'    => 'a.maur@outlook.com',
			'password' => Hash::make('awesome'),
		));

User::create(array(
			
			'nome'     => 'Mau',
			'sobrenome' => 'AINON',
			'email'    => 'maur@outlook.com',
			'password' => Hash::make('awesome'),
		));

	}

}