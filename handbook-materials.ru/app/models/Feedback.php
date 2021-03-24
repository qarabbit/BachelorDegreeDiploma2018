<?php

class Feedback extends Eloquent {
    protected $fillable = array('user_id', 'name', 'email', 'quest', 'answer');
}