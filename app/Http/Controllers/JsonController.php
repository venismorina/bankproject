<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function users()
    {
        return response()->file(resource_path('json/users.json'));
    }

    public function profile($file)
    {
        return response()->file(
            resource_path('json/profile/'. $file .'.json')
        );
    }

    public function accounts($file)
    {
        return response()->file(
            resource_path('json/accounts/'. $file .'.json')
        );
    }

    public function transactions($file)
    {
        return response()->file(
            resource_path('json/transactions/'. $file .'.json')
        );
    }
}
