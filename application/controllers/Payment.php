<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index()
	{
		$this->load->view('reg_payment');
	}

    public function monthly_payment()
    {
        $this->load->view('monthly_payment');
    }

	public function reg_check()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];
			$card_cvc = $_POST['cvc'];
			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			
			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			
			//set api key
			$stripe = array(
			  "secret_key"      => "sk_test_bYONhf0pMHobVi0ihbX709AM",
			  "publishable_key" => "pk_test_0GJwqWo0RQrWKizQ4KlmarpN"
			);
			
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			
			//item information
			$itemName = "Gym Registration";
			$itemNumber = "Reg";
			$itemPrice = 250000;
			$currency = "lkr";
			// $orderID = "SKA92712382139";
			
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
					'item_id' => $itemNumber
				)
			));
			
			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();

			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details 
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
			
				
				//insert tansaction data into the database
                $userId = $this->session->userdata('id');

                $dataDB = array(
                    'category' => 'Registration',
                    'method' => 'online',
                    'amount' => $itemPrice/100,
                    'date' => $date,
                    'userId' => $userId
                );

                if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){

					    $dataReg = array(
                            'registered' => 1
                        );
                        $this->db->where('id', $userId);
                        $this->db->update('users', $dataReg);

                        $this->session->set_flashdata('msg', '<div class="alert alert-primary text-center" role="alert"> Transaction Completed! </div>');
                        redirect('user_profile/my_payments');
					}else{
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert"> Transaction Failed! </div>');
                        redirect('user_profile/my_payments');
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}

			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}

    public function monthly_check()
    {
        //check whether stripe token is not empty
        if(!empty($_POST['stripeToken']))
        {
            //get token, card and user info from the form
            $token  = $_POST['stripeToken'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $card_num = $_POST['card_num'];
            $card_cvc = $_POST['cvc'];
            $card_exp_month = $_POST['exp_month'];
            $card_exp_year = $_POST['exp_year'];

            //include Stripe PHP library
            require_once APPPATH."third_party/stripe/init.php";

            //set api key
            $stripe = array(
                "secret_key"      => "sk_test_bYONhf0pMHobVi0ihbX709AM",
                "publishable_key" => "pk_test_0GJwqWo0RQrWKizQ4KlmarpN"
            );

            \Stripe\Stripe::setApiKey($stripe['secret_key']);

            //add customer to stripe
            $customer = \Stripe\Customer::create(array(
                'email' => $email,
                'source'  => $token
            ));

            //item information
            $itemName = "Gym Monthly fFe";
            $itemNumber = "Monthly";
            $itemPrice = 150000;
            $currency = "lkr";
            // $orderID = "SKA92712382139";

            //charge a credit or a debit card
            $charge = \Stripe\Charge::create(array(
                'customer' => $customer->id,
                'amount'   => $itemPrice,
                'currency' => $currency,
                'description' => $itemNumber,
                'metadata' => array(
                    'item_id' => $itemNumber
                )
            ));

            //retrieve charge details
            $chargeJson = $charge->jsonSerialize();

            //check whether the charge is successful
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
            {
                //order details
                $amount = $chargeJson['amount'];
                $balance_transaction = $chargeJson['balance_transaction'];
                $currency = $chargeJson['currency'];
                $status = $chargeJson['status'];
                $date = date("Y-m-d H:i:s");


                //insert tansaction data into the database
                $userId = $this->session->userdata('id');

                $dataDB = array(
                    'category' => 'Monthly Fee',
                    'method' => 'online',
                    'amount' => $itemPrice/100,
                    'date' => $date,
                    'userId' => $userId
                );

                if ($this->db->insert('payments', $dataDB)) {
                    if($this->db->insert_id() && $status == 'succeeded'){
                        $this->session->set_flashdata('msg', '<div class="alert alert-primary text-center" role="alert"> Transaction Completed! </div>');
                        redirect('user_profile/my_payments');
                    }else{
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert"> Transaction Failed! </div>');
                        redirect('user_profile/my_payments');
                    }
                }
                else
                {
                    echo "not inserted. Transaction has been failed";
                }

            }
            else
            {
                echo "Invalid Token";
                $statusMsg = "";
            }
        }
    }

	public function payment_success()
	{
		$this->load->view('payment_success');
	}

	public function payment_error()
	{
		$this->load->view('payment_error');
	}
}
