<?php

class Controller_Coupon extends Controller_Rest
{
    protected $format = 'json';

	public function get_read()
	{
	    $coupons = Model_Coupon::find('all');
        $this->response($coupons);
    }

	public function post_write()
	{
	    $coupon = Input::post('coupon');
        Model_Coupon::forge(['coupon' => $coupon])->save();
    }

}
