<?php

namespace Castion2293\QueryFilter\Tests\Filters;

use Castion2293\QueryFilter\QueryFilter;

class PostOptionalParameter extends QueryFilter
{
    public function category($value = 'foo')
    {
        $this->where('category', '=', $value);
    }
}
