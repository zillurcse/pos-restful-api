<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->index();
            $table->string('username')->unique()->index()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contact_no')->nullable();
            $table->text('address')->nullable();
            $table->string('password');
            $table->string('user_type')->default('user')->index();
            $table->string('gender')->nullable();
            $table->json('social_links')->nullable();
            $table->string('tax_number')->nullable();
            $table->timestamp('available_at')->nullable();
            $table->timestamp('paused_at')->nullable();
            $table->boolean('allow_login')->default(1);
            $table->char('language', 7)->default('en');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
};
