<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
	protected $roles = [
		'SuperAdmin' => 'user','Admin' => 'user','Client' => 'company', 'Employee' => 'user'
	];
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->roles AS $role => $type)
		{
			DB::table('roles')->insert([
				'role' => $role,
				'type' => $type,
			]);
		}
    }
}
