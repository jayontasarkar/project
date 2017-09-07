<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lib_name_address', 199);
            $table->timestamp('establishment_date')->nullable();
            $table->string('registered_office_name')->nullable();
            $table->string('registration_no')->nullable();
            $table->boolean('has_room')->default(true);
            $table->string('temporary_location', 100)->nullable();
            $table->string('president_name', 100);
            $table->string('president_addr', 150);
            $table->string('general_secretary_name', 100);
            $table->string('general_secretary_addr', 150);
            $table->string('bank_account_details', 150);
            $table->string('bank_account_no', 150);
            $table->string('bank_branch_name', 150);
            $table->string('bank_name', 150);
            $table->string('bank_branch_thana', 150);
            $table->string('bank_branch_district', 150);
            $table->boolean('has_constitution')->default(true);
            $table->string('constitution_copy', 150);
            $table->string('granter_description', 150)->nullable();
            $table->string('cultural_ministry_grant_amount', 150)->nullable();
            $table->string('grant_expenditure_report', 150)->nullable();
            $table->string('book_qty', 150);
            $table->string('book_reading_competition', 150)->nullable();
            $table->string('library_other_functionalities', 150)->nullable();
            $table->string('yearly_collected_book_and_price', 150)->nullable();
            $table->string('daily_newspaper_name', 150)->nullable();
            $table->string('no_of_readers_per_day', 150)->nullable();
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
        Schema::dropIfExists('applications');
    }
}
