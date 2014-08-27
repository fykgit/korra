<?php
namespace Korra\Models\Entities;

class Category extends \Eloquent {

    protected $fillable = [];

    function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function post()
    {
        return $this->belongsToMany('\Korra\Models\Entities\Post');
    }
}