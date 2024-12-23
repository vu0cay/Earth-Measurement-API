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
        Schema::create(TablesName::SALINITIES, function (Blueprint $table) {
            $table->id();
            $table->float('lower_bound')->nullable()->default(0);
            $table->float('upper_bound')->nullable()->default(0);
            $table->string('unit')->default('dS/m');
            $table->unique(['lower_bound','upper_bound']);
            $table->timestamps();
        });

        // nhiet do cay
        DB::table(TablesName::SALINITIES)->insert([ 
            'upper_bound' =>  1
        ]);
        DB::table(TablesName::SALINITIES)->insert([ 
            'upper_bound' =>  1.5
        ]);
        DB::table(TablesName::SALINITIES)->insert([ 
            'upper_bound' =>  2
        ]);
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TablesName::SALINITIES);
    }
};
