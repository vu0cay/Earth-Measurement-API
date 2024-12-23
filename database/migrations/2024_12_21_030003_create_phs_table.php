<?php

use App\Constants\TablesName;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(TablesName::PHS, function (Blueprint $table) {
            $table->id();
            $table->float('lower_bound')->nullable()->default(0);
            $table->float('upper_bound')->nullable()->default(0);
            $table->string('unit')->nullable();
            $table->unique(['lower_bound','upper_bound']);
            $table->timestamps();
        });

        // nhiet do cay
        DB::table(TablesName::PHS)->insert([ 
            'lower_bound' =>  5.5,
            'upper_bound' =>  6.8
        ]);
        DB::table(TablesName::PHS)->insert([ 
            'lower_bound' =>  6,
            'upper_bound' =>  7
        ]);
        DB::table(TablesName::PHS)->insert([ 
            'lower_bound' =>  5.5,
            'upper_bound' =>  6.5
        ]);
        DB::table(TablesName::PHS)->insert([ 
            'lower_bound' =>  6,
            'upper_bound' =>  7.5
        ]);
        DB::table(TablesName::PHS)->insert([ 
            'lower_bound' =>  5,
            'upper_bound' =>  7
        ]);
        DB::table(TablesName::PHS)->insert([ 
            'lower_bound' =>  4.5,
            'upper_bound' =>  6.5
        ]);
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TablesName::PHS);
    }
};
