<?php

class Order extends Eloquent {
    protected $fillable = array('product_id', 'user_id');

    public function product() {
	return $this->hasOne('Product', 'id', 'product_id');
    }

    public function user() {
	return $this->hasOne('User', 'id', 'user_id');
    }
}