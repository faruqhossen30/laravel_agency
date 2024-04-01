<?php

namespace App\Http\Controllers\Admin\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\SubCategory;
use Illuminate\Http\Request;

class AjaxSubCategoryController extends Controller
{
    public function subcategoryByCategoryId($id){
        $subcategory = SubCategory::where('category_id', $id)->get();
        return response()->json($subcategory);
    }
}
