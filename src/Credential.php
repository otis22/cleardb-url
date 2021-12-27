<?php

declare(strict_types=1);

namespace Otis22\ClearDb;

final class Credential
{
    private ParsedUrl $url;

    /**
     * @param ParsedUrl $url
     */
    public function __construct(ParsedUrl $url)
    {
        $this->url = $url;
    }

    public function driver(): string
    {
        return (string) $this->url->asArray()['scheme'];
    }

    public function host(): string
    {
        return (string) $this->url->asArray()['host'];
    }

    public function db(): string
    {
        return substr((string) $this->url->asArray()["path"], 1);
    }

    public function user(): string
    {
        return (string) $this->url->asArray()['user'];
    }

    public function pass(): string
    {
        return (string) $this->url->asArray()['pass'];
    }
}
