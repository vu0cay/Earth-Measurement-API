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
        Schema::create(TablesName::TEMPERATURES, function (Blueprint $table) {
            $table->id();
            $table->float('lower_bound')->nullable()->default(0);
            $table->float('upper_bound')->nullable()->default(0);
            $table->string('unit')->default('Do C');
            $table->unique(['lower_bound','upper_bound']);
            $table->timestamps();
        });

        // nhiet do cay
        DB::table(TablesName::TEMPERATURES)->insert([ 
            'lower_bound' => 25,
            'upper_bound' =>  35
        ]);
        DB::table(TablesName::TEMPERATURES)->insert([ 
            'lower_bound' => 15,
            'upper_bound' =>  25
        ]);
        DB::table(TablesName::TEMPERATURES)->insert([ 
            'lower_bound' => 25,
            'upper_bound' =>  30
        ]);
        DB::table(TablesName::TEMPERATURES)->insert([ 
            'lower_bound' => 20,
            'upper_bound' =>  30
        ]);
        DB::table(TablesName::TEMPERATURES)->insert([ 
            'lower_bound' => 18,
            'upper_bound' =>  25
        ]);
        DB::table(TablesName::TEMPERATURES)->insert([ 
            'lower_bound' => 18,
            'upper_bound' =>  24
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TablesName::TEMPERATURES);
    }
};
