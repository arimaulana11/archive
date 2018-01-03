<?php

namespace Compress;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CompressController extends Controller
{
    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();

        return view('compress::time', compact('current_time'));
    }
}
