<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VatsMessage;

class VatsMessageController extends Controller
{
    public function index(Request $request) {
        VatsMessage::create(
           [
            "ip" => $request->getClientIp(),
            "method" =>  $request->method(),
            "src_content" => json_encode($request->all()),
           ]
        );
    }
}
