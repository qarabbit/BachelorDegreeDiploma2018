<?php

class News extends Eloquent {
    protected $fillable = array('title', 'short_text', 'full_text', 'image');
}