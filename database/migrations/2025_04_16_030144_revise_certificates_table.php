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
        Schema::table('certificates', function (Blueprint $table) {
            // Hapus kolom yang tidak perlu (jika ada)
            $table->dropColumn(['date']); 
            
            // Tambah kolom date sebagai string
            $table->string('date')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('certificates', function (Blueprint $table) {
            //
        });
    }
};
