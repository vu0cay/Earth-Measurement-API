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
        Schema::create(TablesName::HUMIDITIES, function (Blueprint $table) {
            $table->id();
            $table->float('lower_bound')->nullable()->default(0);
            $table->float('upper_bound')->nullable()->default(0);
            $table->string('unit')->default('%');
            $table->unique(['lower_bound','upper_bound']);
            $table->timestamps();
        });

        // nhiet do cay
        DB::table(TablesName::HUMIDITIES)->insert([ 
            'lower_bound' => 70,
            'upper_bound' =>  80
        ]);
        DB::table(TablesName::HUMIDITIES)->insert([ 
            'lower_bound' => 60,
            'upper_bound' =>  80
        ]);
        DB::table(TablesName::HUMIDITIES)->insert([ 
            'lower_bound' => 60,
            'upper_bound' =>  70
        ]);
        DB::table(TablesName::HUMIDITIES)->insert([ 
            'lower_bound' => 50,
            'upper_bound' =>  60
        ]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TablesName::HUMIDITIES);
    }
};
