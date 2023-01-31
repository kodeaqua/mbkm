<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function retSuccess($activity)
    {
        return redirect()->back()->with('success', "Successfuly ". $activity);
    }

    public static function retFail($err)
    {
        return redirect()->back()->withInput()->withErrors($err);
    }
}
