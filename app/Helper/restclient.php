<?php
if (!function_exists('data_client'))
{
    function data_client($base_uri, $upw)
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);

        $response = $client->get('api/create-wallet',[
            GuzzleHttp\RequestOptions::JSON => [
                'upw' => $upw,
            ]
        ]);
        $response = $response->getBody()->getContents();

        return $response;
    }

    function sent_transaction($base_uri, $pk, $eth_val)
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);

        $response = $client->get('api/send-transaction',[
            GuzzleHttp\RequestOptions::JSON => [
                'pk' => str_replace('0x','', $pk),
                // "to" => "0xb2a122ed4A1903fe3FF587A13Cb8A95a052851aA",
                "to" => \App\SiteConfig::config('main_wallet_address'),
                "ethvalue" => $eth_val
            ],
        ]);
        $response = $response->getBody()->getContents();

        return json_encode($response);
    }

    function getEthPrice($base_uri)
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);

        $response = $client->get('v1/tools/price-conversion?amount=1&symbol=ETH&time=2018-12-22T06:04:02.000Z&convert=USD',[
            'headers' => ['X-CMC_PRO_API_KEY' => 'b8552ff8-30a7-4cfc-9bab-d462687e8be4'],
        ]);
        $response = $response->getBody()->getContents();
        return $response;
    }

    function getEthBalance($base_uri, $wallet_addr)
    {
        $api_key = env('API_KEY', true);

        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);

        $response = $client->get("api?module=account&action=balance&address=$wallet_addr&tag=latest&apikey=$api_key");
        $response = $response->getBody()->getContents();

        $eth = json_decode($response);

        $ret = $eth->result * 0.000000000000000001;

        return $ret;
    }

    function getEastBalance($base_uri, $wallet_addr)
    {
        $api_key = env('API_KEY');
        $contract_address = env('CONTRACT_ADDR');

        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);

        $response = $client->get("api?module=account&action=tokenbalance&contractaddress=$contract_address&address=$wallet_addr&tag=latest&apikey=$api_key");

        $response = $response->getBody()->getContents();

        return json_decode($response)->result;
    }

    function transferMemberToMember($base_uri, $from, $pk_from, $to, $send_value)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $base_uri, [
            'query' => [
                'wa_from' => $from,
                'pk_from' => $pk_from,
                'wa_to' => $to,
                'send_value' => $send_value
                ]
        ]);

        $response = $response->getBody()->getContents();

        return $response;
    }

    function transferToMember($to, $send_value)
    {

    }

    function transactionDshare($from, $pk_from, $main_wallet, $send_value)
    {
        // todo :

        // $client = new \GuzzleHttp\Client();

        // $response = $client->request('GET', $base_uri, [
        //     'query' => [
        //         'wa_from' => $from,
        //         'pk_from' => $pk_from,
        //         'wa_to' => $to,
        //         'send_value' => $send_value
        //         ]
        // ]);

        // $response = $response->getBody()->getContents();

        // return $response;

    }

    function getTransactionList($base_uri, $wa)
    {
        $api_key = env('API_KEY');
        $contract_address = env('CONTRACT_ADDR');

        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);

        $response = $client->get("/api?module=account&action=txlist&address=$wa&startblock=0&endblock=9999999&sort=asc&apikey=$api_key");

        $response = $response->getBody()->getContents();

        return json_decode($response)->result;

        //api?module=account&action=txlist&address=0xaD00A6d6B37794F3712422B4F65B9a5266BcF9C0&startblock=0&endblock=9999999&sort=asc&apikey=S9Y4U96WPJQ6F6JY2F9KKGQH89MYSNDTXW
    }

    // to do

    // test :
    function testApi($param)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://api.eastpac.local/api/test', [
            'query' => ['param' => $param]
        ]);

        // dd($response);
        $response = $response->getBody()->getContents();

        return $response;
    }


}
