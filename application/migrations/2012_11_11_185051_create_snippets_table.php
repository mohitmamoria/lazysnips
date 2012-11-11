<?php

class Create_Snippets_Table {    

	public function up()
    {
		Schema::create('snippets', function($table) {
			$table->increments('id');
			$table->text('snippet');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('snippets');

    }

}