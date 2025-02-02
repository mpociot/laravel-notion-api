<?php

namespace FiveamCode\LaravelNotionApi\Entities\Collections;

use FiveamCode\LaravelNotionApi\Entities\Blocks\Block;
use FiveamCode\LaravelNotionApi\Exceptions\WrapperException;
use FiveamCode\LaravelNotionApi\Notion;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;


class BlockCollection extends EntityCollection
{
    protected function collectChildren()
    {
        $this->collection = new Collection();
        foreach ($this->rawResults as $blockChild) {
            $this->collection->add(new Block($blockChild));
        }
    }
}
