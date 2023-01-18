<?php

namespace App\Http\Controllers\API;

use App\Models\EodCategory;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class EodCategoryController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name_categories = $request->input('name_categories');
        $show_eod = $request->input('show_eod');

        if($id)
        {
            $category = EodCategory::with(['eodreport'])->find($id);

            if($category)
                return ResponseFormatter::success(
                    $category,
                    'Data Eod Report diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data kategori Eod Report tidak ada',
                    404
                );
        }

        $category = EodCategory::query();

        if($name_categories)
            $category->where('name_categories', 'like', '%' . $name_categories . '%');

        if($show_eod)
            $category->with('eodreport');

        return ResponseFormatter::success(
            $category->paginate($limit),
            'Data list kategori Eod Report berhasil diambil'
        );
    }
}
