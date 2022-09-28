<?php
Class CashfreePayment extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database('casfree_payments');
    
    }
public function insert($data)
{

    $paymentData = array(
                        'cf_order_id'     => $data['resps']['cf_order_id'],
                        'created_at'      => $data['resps']['created_at'],
                        'customer_id'     => $data['resps'] ['customer_details']['customer_id'],
                        'customer_email'  => $data ['resps']['customer_details']['customer_email'],
                        'customer_phone'  => $data ['resps']['customer_details']['customer_phone'],
                        'order_amount'    => $data['resps']['order_amount'],
                        'order_currency'  => $data['resps']['order_currency'],
                        'order_expiry_time' => $data['resps']['order_expiry_time'],
                        'order_id'        => $data['resps']['order_id'],
                        'return_url'      => $data['resps'] ['order_meta']['return_url'],
                        'notify_url'      => $data['resps'] ['order_meta']['notify_url'],
                        'payment_methods' => $data ['resps']['order_meta']['payment_methods'],
                        'order_status'    => $data['resps']['order_status'],
                        'order_note'      => $data['resps']['order_note'],
                        'order_token'     => $data['resps']['order_token'],
                        'payment_link'    => $data['resps']['payment_link'],
                        'pUrl'            => $data['resps']['payments']['url'],
                        'rUrl'            => $data['resps']['refunds']['url'],
                        'Surl'            => $data['resps']['settlements']['url']
 
    );
$this->db->insert('payments_data',$paymentData);
  
}

}

?>