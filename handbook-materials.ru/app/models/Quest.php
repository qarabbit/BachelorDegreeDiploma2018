<?php

class Quest extends Eloquent {
    protected $fillable = array('test_id', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'correct_answer', 'question');
}