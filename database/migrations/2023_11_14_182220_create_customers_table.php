<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // This line will create an auto-incremented primary key column
            $table->string('code', 20)->unique();
            $table->string('name', 200);
            $table->string('phone_number', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address', 255)->nullable();
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->enum('is_active', ['active', 'inactive'])->default('active');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};