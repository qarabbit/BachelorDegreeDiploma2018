<?php

class Product extends Eloquent {
    protected $fillable = array('name', 'description', 'price', 'main_image', 'category_id');
}