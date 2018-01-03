<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     function insert(Request $req)
//     {
// $author_user = $req->input('author_user');
// $title = $req->input('title');
// $description = $req->input('description');
// $id_category = $req->input('id_category');
// $link= $req->input('link');

// $data= array('author_user'=>$author_user,'title'=>$title,'description'=>$description,'id_category'=>$id_category,'link'=>$link );
// DB::table('news')->insert($data);
//     }
}
