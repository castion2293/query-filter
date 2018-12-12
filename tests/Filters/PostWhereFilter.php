<?php

namespace Castion2293\QueryFilter\Tests\Filters;

use Castion2293\QueryFilter\QueryFilter;

class PostWhereFilter extends QueryFilter
{
    public function title($value)
    {
        $this->where('title', 'like', "%$value%");
    }

    public function age($value)
    {
        $this->where('age', '>=', $value);
    }
}
