<?php

namespace Castion2293\QueryFilter\Tests\Filters;

use Castion2293\QueryFilter\QueryFilter;

class PostLikeFilter extends QueryFilter
{
    public function title($value)
    {
        return $this->like('title', $value);
    }
}
