<?php

class Create_Urls_Table {

	public function up()
    {
		Schema::create('urls', function($table) {
			$table->increments('id');
			$table->string('url');
			$table->string('shortened');
	});

    }

	public function down()
    {
		Schema::drop('urls');

    }

}