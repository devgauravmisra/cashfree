<?php
class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('CashfreePayment');
    }

    public function index()
    {

        $myarray[] = $this->input->post();

        //Order details
        $myarray = array(

            'order_id'       => $this->input->post("order_id"),
            'order_amount'   => $this->input->post("order_amount"),
            'order_currency' => $this->input->post("order_currency"),
            'customer_id'    => $this->input->post("rUrl"),
            'order_note'     => $this->input->post("order_note"),
            "order_meta"     => array(
                'return_url' =>   $this->input->post("return_url"),
                'notify_url' =>   $this->input->post("notify_url"),
                'payment_methods' =>  $this->input->post("payment_methods"),
            ),

            //Customer details
            "customer_details" => array(
                'customer_id'    => $this->input->post("customer_id"),
                'customer_email' => $this->input->post("customer_email"),
                'customer_phone' => $this->input->post("customer_phone"),
            ),

            // Easy split details

            "order_splits"     => array(

                "splits1"     => array(
                    'vendor_id'    => $this->input->post("customer_id"),
                    'percentage'   => $this->input->post("customer_email"),
                    'amount'       => $this->input->post("customer_phone"),
                ),
                "splits2"     => array(
                    'vendor_id'    => $this->input->post("customer_id"),
                    'percentage'   => $this->input->post("customer_email"),
                    'amount'       => $this->input->post("customer_phone"),
                ),
            ),
        );

        $this->processPay($myarray);
    }


    public function processPay($datas)
    {
        $env="";
        if($env == 'TEST'){

        $url = "https://sandbox.cashfree.com/pg/orders";
        }else{
        
            $url = "https://api.cashfree.com/pg";

        }
        $formData = $datas;
        $data_string = json_encode($formData);
        $api_key = CASHFREE_KEY_ID;
        $password = CASHFREEKEY_SECRET;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Accept: application/json',
                'x-api-version: 2022-01-01',
                'Content-Type: application/json',
                'x-client-id: CASHFREE_KEY_ID',
                'x-client-secret:CASHFREEKEY_SECRET'
            )
        );

        $result = curl_exec($ch);
        $returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $resp = json_decode($result, true);
        $newURL =  $resp['payment_link'];
        header('Location: ' . $newURL);
    }

    public function success()
    {
        $successDatav = $_GET;

        $orderId = $successDatav['order_id'];

        $url = "https://sandbox.cashfree.com/pg/orders/$orderId";

        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Accept: application/json',
                'x-api-version: 2022-01-01',
                'Content-Type: application/json',
                'x-client-id: CASHFREE_KEY_ID',
                'x-client-secret:CASHFREEKEY_SECRET'
            )
        );

        $results = curl_exec($ch);
        $returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $resps['resps'] = json_decode($results, true);
        $this->load->model('CashfreePayment');
        $this->CashfreePayment->insert($resps);
        $this->load->view('success', $resps);
    }
}
