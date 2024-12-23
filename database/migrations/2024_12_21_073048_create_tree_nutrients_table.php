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
        Schema::create(TablesName::TREE_NUTRIENTS, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tree_id');
            $table->unsignedBigInteger('nutrient_id');
            
            $table->foreign('nutrient_id')->references('id')->on(TablesName::NUTRIENTS)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('tree_id')->references('id')->on(TablesName::TREES)->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });

        // cay chuoi
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 1,
            'tree_id' => 1
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 2,
            'tree_id' => 1
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 3,
            'tree_id' => 1
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 4,
            'tree_id' => 1
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 5,
            'tree_id' => 1
        ]);

        // cay tao
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 6,
            'tree_id' => 2
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 7,
            'tree_id' => 2
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 8,
            'tree_id' => 2
        ]);
        // cam
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 9,
            'tree_id' => 3
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 10,
            'tree_id' => 3
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 8,
            'tree_id' => 3
        ]);
        // // quyt
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 9,
            'tree_id' => 4
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 10,
            'tree_id' => 4
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 8,
            'tree_id' => 4
        ]);
        // lua
        // Xem lai
        // DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
        //     'nutrient_id' => 9,
        //     'tree_id' => 5
        // ]);
        // DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
        //     'nutrient_id' => 10,
        //     'tree_id' => 5
        // ]);
        // DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
        //     'nutrient_id' => 8,
        //     'tree_id' => 5
        // ]);
        
        // lua mi
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 11,
            'tree_id' => 6
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 12,
            'tree_id' => 6
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 13,
            'tree_id' => 6
        ]);

        // khoai mi
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 14,
            'tree_id' => 7
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 15,
            'tree_id' => 7
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 16,
            'tree_id' => 7
        ]);

        // ca phe
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 17,
            'tree_id' => 8
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 12,
            'tree_id' => 8
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 16,
            'tree_id' => 8
        ]);

        // cao su
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 14,
            'tree_id' => 9
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 10,
            'tree_id' => 9
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 8,
            'tree_id' => 9
        ]);

        // hoa mai
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 11,
            'tree_id' => 10
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 12,
            'tree_id' => 10
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 18,
            'tree_id' => 10
        ]);

         // hoa dao
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 19,
            'tree_id' => 11
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 10,
            'tree_id' => 11
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 16,
            'tree_id' => 11
        ]);

        // hoa lan
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 11,
            'tree_id' => 11
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 12,
            'tree_id' => 11
        ]);
        DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
            'nutrient_id' => 18,
            'tree_id' => 11
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TablesName::TREE_NUTRIENTS);
    }
};
