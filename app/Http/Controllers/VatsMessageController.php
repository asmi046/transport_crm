<?php

namespace App\Http\Controllers;

use App\Models\VatsMessage;

use Illuminate\Http\Request;
use App\Events\RegisterVatsMessageEvent;

class VatsMessageController extends Controller
{
    public function index(Request $request) {
        if (!$request->has('crm_token')) abort('419');
        $crm_token = $request->input('crm_token');
        if ($crm_token !== "112233") abort('419');


        $vats_message = $request->all();

        $message = VatsMessage::create(
           [
            "ip" => $request->getClientIp(),
            "method" =>  $request->method(),
            "cmd" => $vats_message["cmd"],
            "phone" => $vats_message["phone"],
            "src_content" => json_encode($vats_message),
           ]
        );

        broadcast(new RegisterVatsMessageEvent($message));
    }
}
