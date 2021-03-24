<?php

class Test extends Eloquent {
    protected $fillable = array('title');

    public function quests() {
	return $this->hasMany('Quest', 'test_id', 'id');
    }
}