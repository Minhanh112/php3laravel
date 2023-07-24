<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PharIo\Manifest\Email;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // thêm bắt buộc $table tro đến kiểu dữ liệu('tên trường');
            $table->string('name', 50); //quy định độ dài(tên trường,độ dài ký tự)
            $table->string('email')->unique(); //kiểm tra các giá trị ko trùng nhau (tên trường)->uniqid
            $table->string('phone', 10)->unique();
            $table->date('date');
            $table->string('address')->nullable(); //không có giá trị(tên trường)->nullable
            $table->tinyInteger('gender')->default(0); //Giá trị mặc định (tên trường)->default(0)
            $table->string('img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
