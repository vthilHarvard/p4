<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('items', function (Blueprint $table) {
                # Increments method will make a Primary, Auto-Incrementing field.
                # Most tables start off this way
                $table->increments('id');

                # This generates two columns: `created_at` and `updated_at` to
                # keep track of changes to a row
                $table->timestamps();

                # The rest of the fields...
                $table->string('name');
                $table->enum('type', ['music', 'dance', 'skit']);
                $table->integer('participant_count');
                $table->string('audition_link');
                $table->integer('user_id');  //person who is creating this item
                $table->string('description');
                $table->enum('status', ['incomplete', 'submitted', 'accepted', 'rejected']);
                $table->text('special_notes');  //notes to organizers
                # FYI: We're skipping the 'tags' field for now; more on that later.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::drop('items');
    }
}
