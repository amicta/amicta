<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->text('response')->nullable();
            $table->text('attachment')->nullable();
            $table->text('reviewer_note')->nullable();

            $table->enum('status', ['assigned', 'submited', 'accepted', 'rejected']);

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('team_id')->nullable();
            $table->unsignedBigInteger('competition_id');
            $table->unsignedBigInteger('assignment_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('team_id')
                ->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('competition_id')
                ->references('id')->on('competitions')->onDelete('cascade');
            $table->foreign('assignment_id')
                ->references('id')->on('assignments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
}
