<?php

use Illuminate\Database\Seeder;

class SQLRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$file = base_path('app/SQLImport/forge_cadbury_2019-12-16.sql');
    	$file = str_replace('INSERT INTO `', 'INSERT INTO `record_', file_get_contents($file));
    	$file = str_replace('LOCK TABLES `', 'LOCK TABLES `record_', $file);
    	$file = str_replace('ALTER TABLE `', 'ALTER TABLE `record_', $file);
    	$file = str_replace('CREATE TABLE `', 'CREATE TABLE `record_', $file);
    	$file = str_replace('DROP TABLE IF EXISTS `', 'DROP TABLE IF EXISTS `record_', $file);
//    	$file = str_replace('`project_id`', '`record_project_id', $file);
//    	$file = str_replace('`customer_id`', '`record_customer_id', $file);
//    	$file = str_replace('Dump of table ', 'dump of table record_', $file);
    	\Illuminate\Support\Facades\DB::unprepared($file);
    	\Illuminate\Support\Facades\Schema::table('record_uploads', function(\Illuminate\Database\Schema\Blueprint $table){
    		$table->renameColumn('project_id', 'record_project_id');
		});
    	\Illuminate\Support\Facades\Schema::table('record_projects', function(\Illuminate\Database\Schema\Blueprint $table){
    		$table->renameColumn('customer_id', 'record_customer_id');
		});
    }
}
