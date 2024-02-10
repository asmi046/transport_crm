<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VatsMessage;

class VatsMessageController extends Controller
{
    public function index(Request $request) {
        if (!$request->has('crm_token')) abort('419');
        $crm_token = $request->input('crm_token');
        if ($crm_token === "112233") abort('419');



        VatsMessage::create(
           [
            "ip" => $request->getClientIp(),
            "method" =>  $request->method(),
            "src_content" => json_encode($request->all()),
           ]
        );
    }
}
