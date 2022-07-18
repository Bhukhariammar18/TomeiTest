<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function save(Request $req) {

        $user = new USER();

        //$penilaian->id_penilaian = 1; // to handle
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->nric = $req->nric;
        $user->dob = $req->dob;
        $user->birthplace = $req->birthplace;
        $user->gender = $req->gender;
        $user->noe = $req->noe;
        $user->yoe = $req->yoe;
        $user->sal = $req->sal;
        $user->epf = $req->epf;
        $user->noe = $req->noe;

        $user->save;

    }
}
