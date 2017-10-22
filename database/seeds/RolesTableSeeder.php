<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
	protected $roles = [
		'Admin','Developer','Designer','Sales','Client'
	];
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->roles AS $role)
		{
			DB::table('roles')->insert([
				'role' => $role,
			]);
		}
    }
}
