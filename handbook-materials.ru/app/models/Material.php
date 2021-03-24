<?php

class Material extends Eloquent {
    protected $fillable = array('name', 'cat_id', 'text', 'image');

    public function cateogry() {
	return $this->hasOne('Category', 'id', 'cat_id');
    }
}