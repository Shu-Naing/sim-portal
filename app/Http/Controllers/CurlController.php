<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurlController extends Controller
{
    public function showInputForm()
    {
        return view('input');
    }

    public function sendApiRequest(Request $request)
    {
        $msisdn = $request->input('msisdn');

        $url = 'http://10.55.56.134:5004/crm/get_iccid_by_msisdn';
        $data = ['msisdn' => $msisdn];

        $response = $this->makeCurlRequest('POST', $url, $data);

        return view('response', ['response' => $response]);
    }

    private function makeCurlRequest($method, $url, $data = [])
    {
        $ch = curl_init($url);

        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen(json_encode($data)),
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}
