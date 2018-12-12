<?php

namespace Castion2293\QueryFilter\Tests\Filters;

use Castion2293\QueryFilter\QueryFilter;

class PostTwoFilters extends QueryFilter
{
    public function title($value)
    {
        return $this->like('title', $value);
    }

    public function category($value)
    {
        return $this->equals('category', $value);
    }
}
