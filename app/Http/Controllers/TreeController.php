<?php

namespace App\Http\Controllers;

use App\Constants\TablesName;
use App\Http\Resources\TreeResource;
use App\Models\Nutrient;
use App\Models\Tree;
use App\Models\TreeCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trees = Tree::all();
        $treeResource = TreeResource::collection($trees);
        return response()->json(["value" => $treeResource], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $attribute  = Validator::make($request->all(), [
                // 'id' => 'required',
                'name' => 'required|string',
                'type' => 'required|string',
                'nutrients' => 'required|array'
            ]);
    
    
            if($attribute->fails()) {
                return response()->json(['success' => false,'message'=> $attribute->errors()], 404);
            }
    
            DB::beginTransaction();
            $type_id =  DB::table(TablesName::TREE_CATEGORIES)->where('name', $request->type)->first()->id;
            if(!$type_id) {
                $tree_category = TreeCategory::create([
                    'name' => $request->type
                ]);
                $type_id = $tree_category->id;
            }
            $tree = Tree::create([
                'name' => $request->name,
                'type_id' => $type_id
            ]);
    
            // nuntrients
            if(isset($request->nutrients)) {
                foreach($request->nutrients as $nutrient) { 
                    $ele = DB::table(TablesName::NUTRIENTS)
                        ->where('name', $nutrient['name'])
                        ->where('lower_bound',$nutrient['lower_bound'])
                        ->where('upper_bound',$nutrient['upper_bound'])
                        ->first();
                    if(!$ele) {
                        $nut = Nutrient::create([
                            'name' => $nutrient['name'],
                            'lower_bound' => $nutrient['lower_bound'],
                            'upper_bound' => $nutrient['upper_bound']
                        ]);
                        $ele = $nut;  
                    } 
    
                    DB::table(TablesName::TREE_NUTRIENTS)->insert([ 
                        'nutrient_id' => $ele->id,
                        'tree_id' => $tree->id
                    ]);
                }
            }
            DB::commit();
        } catch (Exception $e) { 
                DB::rollBack();
                return response()->json(['success' => false, 'message' => $e->getMessage()], status: 400);
        }

        $treeResource = TreeResource::collection([$tree]);

        return response()->json(['success' => true, 'value' => $treeResource],200); 

    }

    /**
     * Display the specified resource.
     */
    public function show($tree_id)
    {
        $tree = Tree::where('id', $tree_id)->first();
        
        if(!$tree) {
            return response()->json(['success'=> 'false', 'message' => 'Not found'],404);
        }

        $treeResource = TreeResource::collection([$tree]);
        return response()->json($treeResource[0], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tree_id)
    {
        $tree = Tree::query()->where('id', $tree_id)->first();
        
        if(!$tree) {
            return response()->json(['success'=> 'false', 'message' => 'Not found'],404);
        }

        $tree->delete();

        // $treeResource = TreeResource::collection([$tree]);
        return response()->json(['success' => true], 204);
    }
}
