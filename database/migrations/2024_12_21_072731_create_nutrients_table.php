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
        Schema::create(TablesName::NUTRIENTS, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('lower_bound')->nullable()->default(0);
            $table->float('upper_bound')->nullable()->default(0);
            $table->unique(['name','lower_bound','upper_bound']);
            $table->timestamps();
        });

        // chuoi
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'N', 
            'lower_bound' =>  300,
            'upper_bound' =>  500
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'P', 
            'lower_bound' =>  50,
            'upper_bound' =>  100
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'K', 
            'lower_bound' =>  200,
            'upper_bound' =>  400
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'Ca', 
            'lower_bound' =>  100,
            'upper_bound' =>  200
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'S', 
            'lower_bound' =>  20,
            'upper_bound' =>  30
        ]);
        // tao
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'N', 
            'lower_bound' =>  50,
            'upper_bound' =>  60
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'P', 
            'lower_bound' =>  30,
            'upper_bound' =>  40
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'K', 
            'lower_bound' =>  100,
            'upper_bound' =>  150
        ]);
        // cam, quyt
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'N', 
            'lower_bound' =>  50,
            'upper_bound' =>  100
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'P', 
            'lower_bound' =>  30,
            'upper_bound' =>  50
        ]);
        // lua
        //...........
        
        // lua mi
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'N', 
            'lower_bound' =>  30,
            'upper_bound' =>  50
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'P', 
            'lower_bound' =>  20,
            'upper_bound' =>  30
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'K', 
            'lower_bound' =>  60,
            'upper_bound' =>  100
        ]);
        // khoai mi
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'N', 
            'lower_bound' =>  50,
            'upper_bound' =>  80
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'P', 
            'lower_bound' =>  20,
            'upper_bound' =>  40
        ]);
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'K', 
            'lower_bound' =>  80,
            'upper_bound' =>  120
        ]);

        // cafe 
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'N', 
            'lower_bound' =>  40,
            'upper_bound' =>  50
        ]);
        
        // 16

        // hoa mai
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'K', 
            'lower_bound' =>  60,
            'upper_bound' =>  80
        ]);

        // hoa dao
        DB::table(TablesName::NUTRIENTS)->insert([ 
            'name' => 'N', 
            'lower_bound' =>  40,
            'upper_bound' =>  60
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TablesName::NUTRIENTS);
    }
};
