<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            /*adding all needed table things*/
            $table->text('title');  // Title of our transaction
            $table->text('price');  // Price of our deal
            $table->text('name');   // Name of our client
            $table->text('number'); // Client's phone number
            $table->text('email');  // Client's email

            $table->text('company_name');   // Company name                  
            $table->text('address'); // Company address
            /*end of custom table*/

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
        Schema::dropIfExists('transactions');
    }
}
