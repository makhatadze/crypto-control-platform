<?php
/**
 *  database/migrations/2021_05_20_121318_create_files_table.php
 *
 * Date-Time: 20.05.21
 * Time: 16:14
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('fileable_type')->nullable();
            $table->integer('fileable_id')->nullable();
            $table->string('name')->nullable();
            $table->string('path')->nullable();
            $table->string('format')->nullable();
            $table->integer('type');
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
        Schema::dropIfExists('files');
    }
}
