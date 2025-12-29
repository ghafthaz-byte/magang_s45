<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
Schema::create('overtimes', function (Blueprint $table) {
    $table->id();

    // sesuaikan dengan tipe ULID di users
    $table->ulid('user_id');
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

    $table->date('date');
    $table->time('start_time');
    $table->time('end_time');
    $table->string('reason');
    $table->enum('status', ['pending','approved','rejected'])->default('pending');

    // admin approver juga ULID
    $table->ulid('approved_by')->nullable();
    $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');

    $table->timestamp('approved_at')->nullable();
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('overtimes');
    }
};
