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
        Schema::create(TablesName::TREES, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('humidity_id')->nullable();
            $table->unsignedBigInteger('salinity_id')->nullable();
            $table->unsignedBigInteger('ph_id')->nullable();
            $table->unsignedBigInteger('temperature_id')->nullable();
            $table->foreign('type_id')->references('id')->on(TablesName::TREE_CATEGORIES)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('salinity_id')->references('id')->on(TablesName::SALINITIES)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ph_id')->references('id')->on(TablesName::PHS)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('temperature_id')->references('id')->on(TablesName::TEMPERATURES)->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });

        // cay an qua
        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Chuoi',
            'type_id' => 1,
            'ph_id' => 1,
            'temperature_id' => 1,
            'humidity_id' => 1,
            
        ]);

        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Tao',
            'type_id' => 1,
            'ph_id' => 2,
            'temperature_id' => 1,
            'salinity_id' => 1,
            'humidity_id' => 1
        ]);

        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Cam',
            'type_id' => 1 ,
            'ph_id' => 3,
            'salinity_id' => 3,
            'humidity_id' => 1
        ]);

        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Quyt',
            'type_id' => 1,
            'ph_id' => 3,
            'salinity_id' => 3,
            'humidity_id' => 1,
        ]);

        // cay nong nghiep
        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Lua',
            'type_id' => 2,
            'salinity_id' => 3,
            'ph_id' => 3,
            'humidity_id' => 2
        ]);

        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Lua mi',
            'type_id' => 2,
            'ph_id' => 4,
            'temperature_id' => 2,
            'salinity_id' => 3,
            'humidity_id' => 3
        ]);

        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Khoai mi',
            'type_id' => 2,
            'ph_id' => 5,
            'temperature_id' => 3,
            'salinity_id' => 3,
            'humidity_id' => 4
        ]);

        // cay cong nghiep
        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Ca phe',
            'type_id' => 3,
            'ph_id' => 3,
            'salinity_id' => 1,
            'humidity_id' => 3
        ]);

        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Cao su',
            'type_id' => 3,
            'ph_id' => 6,
            'temperature_id' => 3,
            'salinity_id' => 3,
            'humidity_id' => 3
        ]);

        // cay cảnh
        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Hoa mai',
            'type_id' => 4,
            'ph_id' => 3,
            'temperature_id' => 4,
            'salinity_id' => 2,
            'humidity_id' => 4
        ]);

        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Hoa dao',
            'type_id' => 4,
            'ph_id' => 3,
            'temperature_id' => 5,
            'salinity_id' => 3,
            'humidity_id' => 3
        ]);
        DB::table(TablesName::TREES)->insert([ 
            'name' => 'Hoa lan',
            'type_id' => 4,
            'ph_id' => 3,
            'temperature_id' => 6,
            'salinity_id' => 2,
            'humidity_id' => 2
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TablesName::TREES);
    }
};
