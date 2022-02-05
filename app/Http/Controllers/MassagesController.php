<?php


namespace App\Http\Controllers;

use App\Entity\Massages;
use Illuminate\Http\Request;

class MassagesController extends \Illuminate\Routing\Controller
{
    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {
        Massages::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'massages' => $request['massages'],
        ]);
        return redirect()->back();
    }

}
