<?php

use App\Constants\TablesName;
use App\Constants\TreeCategory;
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
        Schema::create(TablesName::TREE_CATEGORIES, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table(TablesName::TREE_CATEGORIES)
            ->insert(array_map(fn($name) => ['name' => $name], array_values(TreeCategory::getConstanst())));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TablesName::TREE_CATEGORIES);
    }
};
