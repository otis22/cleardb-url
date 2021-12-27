<?php

declare(strict_types=1);

namespace Otis22\ClearDb;

final class ParsedUrl
{
    private string $url;
    /**
     * @var ?array<string, int|string>
     */
    private ?array $parsedCache = null;

    /**
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return array<string, int|string>
     */
    public function asArray(): array
    {
        if ($this->parsedCache === null) {
            $parsed = parse_url($this->url);
            if ($parsed === false) {
                throw new \InvalidArgumentException("Url {$this->url} can't be parse with parse_url function");
            }
            $this->parsedCache = $parsed;
        }
        return $this->parsedCache;
    }
}
