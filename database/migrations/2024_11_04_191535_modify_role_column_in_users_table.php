<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyRoleColumnInUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role'); // Hapus kolom `role`
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user')->nullable(false); // Tambahkan kembali dengan pengaturan yang benar
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role'); // Hapus lagi jika rollback
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->nullable(); // Tambahkan kembali dengan nullable jika rollback
        });
    }
}

