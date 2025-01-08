
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); //自動インクリメントのIDカラム
            $table->string('title', 50); //50文字のタイトル
            $table->string('body', 200); //200文字の本文
            $table->timestamps(); //created_at と updated_at
            $table->softDeletes(); //deleted_at(論理削除用)
        });

    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
