<?php

namespace Castion2293\QueryFilter\Tests\Filters;

use Castion2293\QueryFilter\QueryFilter;

class PostRawFilter extends QueryFilter
{
    public function isLong()
    {
        return $this->builder->whereRaw('LENGTH(category) > ?', [10]);
    }
}
