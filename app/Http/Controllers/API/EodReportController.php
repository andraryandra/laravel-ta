<?php

namespace App\Http\Controllers\API;

use App\Models\EodReport;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class EodReportController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $title = $request->input('title');
        $description = $request->input('description');
        // $tags = $request->input('tags');
        $date = $request->input('date');

        $categories = $request->input('categories');


        if($id)
        {
            $eod = EodReport::with(['eodcategory','eodfile'])->find($id);

            if($eod)
                return ResponseFormatter::success(
                    $eod,
                    'Data Eod Report berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data Eod Report tidak ada',
                    404
                );
        }

        $eod = EodReport::with(['eodcategory','eodfile']);

        if($title)
            $eod->where('title', 'like', '%' . $title . '%');

        if($description)
            $eod->where('description', 'like', '%' . $description . '%');

        if($date)
            $eod->where('date', 'like', '%' . $date . '%');

        if($categories)
            $eod->where('categories_id', $categories);

        return ResponseFormatter::success(
            $eod->paginate($limit),
            'Data list Eod Report berhasil diambil'
        );
    }
}
