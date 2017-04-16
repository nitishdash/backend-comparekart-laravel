<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\newController;
use Illuminate\Http\Request;

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

    public function tracking($pid)
    {
        $product = DB::table('productDetails')->where('pid', $pid)->get();

        // echo var_dump($product);
        $array = json_decode(json_encode($product), True);

        // echo "\n";
        // echo var_dump($array);
        // echo "\n";
        // // echo "".$array;
        // echo var_dump($product);
        // echo $product->title;
      foreach ($array[0] as $pro) {
         echo $pro;
     }
      //  echo $product->name;

    }

    public function trackingProduct($pid, $input)
    {

      //deprecated 4/16/2017
        $product = DB::table('tracking')->where('pid', $pid)->get();

        // echo var_dump($product);
        $array = json_decode(json_encode($product), True);

        // echo "\n";
        // echo var_dump($array);
        // echo "\n";
        // // echo "".$array;
        // echo var_dump($product);
        // echo $product->title;

 //      foreach ($array[0] as $pro) {
 //         echo $pro;
 //     }
 //     echo "\n";
 //     foreach ($array[1] as $pro) {
 //        echo $pro;
 //    }
 //      //  echo $product->name;
 // echo "\n";

 $out = array_values($array);
 echo json_encode($out);
// echo $array->{0};

    }

    public function trackingRequest(Request $request)
    {
      $pid = $request->input('pid');
      $product = DB::table('tracking')->where('pid', $pid)->get();
      $array = json_decode(json_encode($product), True);
      $out = array_values($array);
      echo json_encode($out);

    }


}


?>
