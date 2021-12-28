<?php

declare(strict_types=1);

namespace Otis22\ClearDb;

interface Tool
{
    /**
     * @return array<string, string|int>
     */
    public function asArray(): array;
}
