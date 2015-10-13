<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('ArticleTableSeeder');
		$this->command->info('p created');
		//$this->call('CategoryTableSeeder');
		//$this->command->info('category created');
		
		//$this->call('UserTableSeeder');
        //$this->command->info('User table seeded!');
        //$this->call('ProjectsTableSeeder');
        //$this->command->info('project table seeded!');
        //$this->call('TasksTableSeeder');
        //$this->command->info('tasks table seeded!');
		//$this->call('ContactsTableSeeder');

		//$this->command->info('Contact seed finish');
	}




}
