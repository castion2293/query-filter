<?php

namespace Castion2293\QueryFilter\Tests\Filters;

use Castion2293\QueryFilter\QueryFilter;

class PostEqualsFilter extends QueryFilter
{
    public function category($value)
    {
        return $this->equals('category', $value);
    }
}
