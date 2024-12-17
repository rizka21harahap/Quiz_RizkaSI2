<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
         if(!Schema::hasTable('loginadmin')){
        Schema::create('loginadmin', function (Blueprint $table) {
            //
            $table->tinyInteger('id_admin')->length(20);
            $table->string('username',100);
            $table->string('password',100);

        });
    }
        if(!Schema::hasTable('tb_golongan')){
        Schema::create('tb_golongan', function (Blueprint $table) {
            //
            $table->tinyInteger('gol_id',3)->unsigned();
            $table->string('gol_kode',10)->nullable();
            $table->string('gol_nama',50)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->dateTime('update_at')->nullable();
        });
    }

        
        if(!Schema::hasTable('tb_users')){
        Schema::create('tb_users', function (Blueprint $table) {
            //
            $table->integer('user_id',11)->unsigned();
            $table->string('user_email',50)->nullable();
            $table->string('user_password',100)->nullable();
            $table->string('user_nama',100)->nullable();
            $table->text('user_alamat')->nullable();
            $table->string('user_hp',25)->nullable();
            $table->string('User_pos',5)->nullable();
            $table->tinyInteger('user_role')->length(2)->nullable();
            $table->tinyInteger('user_aktif')->length(2)->nullable();
            $table->integer('pel_id_user')->lenght(11)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->dateTime('update_at')->nullable();
        });
    }

        if(!Schema::hasTable('tb_pelanggan')){
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            //
        
        $table->integer('pel_id')->lenght(11)->primary();
      
        $table->unsignedTinyInteger('pel_id_gol')->length(3);
        $table->string('pel_no',20)->nullable();
        $table->string('pel_nama',50)->nullable();
        $table->text('pel_alamat')->nullable();
        $table->string('pel_hp',20)->nullable();
        $table->string('pel_ktp',50)->nullable();
        $table->string('pel_seri',50)->nullable();
        $table->integer('pel_meteran')->length(11)->nullable();
        $table->enum('pel_aktif',['Y','N'])->nullable();
        $table->unsignedInteger('pel_id_user')->lenght(11);
       
        $table->timestamp('created_at')->nullable();
        $table->dateTime('update_at')->nullable();
    });
     //
    
   
    }
    Schema::table('tb_pelanggan',function(Blueprint $table){
        $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan')->onDelete('cascade');
        $table->foreign('pel_id_user')->references('user_id')->on('tb_users')->onDelete('cascade');
    });
}
    

    /**c
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_pelanggan');
        Schema::dropIfExists('tb_golongan');
        Schema::dropIfExists('tb_users');
    }
};
