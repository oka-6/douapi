<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;

class CreateDouTypeTable extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	protected $connection = 'oka6_douapi';
	public function up() {
		Schema::connection($this->connection)->table('dou_type', function (Blueprint $table) {
			$table->background('id');
			$table->background('name');
			$table->background('slug');
		});
		
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::connection($this->connection)->dropIfExists('dou_type');
	}
	
}
