<?php

namespace Castion2293\QueryFilter\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Castion2293\QueryFilter\FilterableTrait;

class Post extends Model
{
    use FilterableTrait;

    protected $fillable = ['title', 'content', 'category'];
}
