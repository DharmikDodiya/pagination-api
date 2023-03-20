<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ListingApiTrait;

class UserController extends Controller
{
    use ListingApiTrait;
    public function list(Request $request)
    {
        //$this->ListingValidation();
        $query = User::query();
        //dd($query);
        $searchable_fields = ['name','email'];
        $data = $this->filterSearchPagination($query, $searchable_fields);
        return ok('User Data',[
            'users'=>$data['query']->get(),
            'count'=>$data['count']
        ]);
    }
}
