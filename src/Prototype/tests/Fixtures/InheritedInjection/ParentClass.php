<?php

declare(strict_types=1);

namespace Spiral\Tests\Prototype\Fixtures\InheritedInjection;

use Spiral\Prototype\Traits\PrototypeTrait;

class ParentClass
{
    use PrototypeTrait;

    // @codeCoverageIgnoreStart
    public function useOne(): void
    {
        $this->one;
    }
}
