<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepositsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deposits', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('depositor_id')->unsigned();
            $table->bigInteger('ref_id')->unsigned()->unique();
            $table->decimal('amount', 14, 2)->unsigned();
            $table->text('reason')->nullable();
            $table->timestamp('sent_at');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('deposits');
	}

}