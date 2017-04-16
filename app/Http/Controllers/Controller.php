<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\newController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getStudent($id)
    {
        $user = DB::table('students')->where('id', $id)->first();
        $raw = "{'name': ".$user->name.", 'phone': ".$user->phone."}";
        echo json_encode($raw);
    }

}

class newController extends BaseController
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function getStudent($id)
    {
        $user = DB::table('students')->where('id', $id)->first();
        echo $user->name;

    }
}
