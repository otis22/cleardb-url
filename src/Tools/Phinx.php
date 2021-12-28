<?php

declare(strict_types=1);

namespace Otis22\ClearDb\Tools;

use Otis22\ClearDb\Credential;
use Otis22\ClearDb\Tool;

final class Phinx implements Tool
{
    private Credential $credential;

    /**
     * @param Credential $credential
     */
    public function __construct(Credential $credential)
    {
        $this->credential = $credential;
    }

    /**
     * @inheritDoc
     */
    public function asArray(): array
    {
        return [
            'adapter' => $this->credential->driver(),
            'host' => $this->credential->host(),
            'name' => $this->credential->db(),
            'user' => $this->credential->user(),
            'pass' => $this->credential->pass(),
            'port' => '3306',
            'charset' => 'utf8',
        ];
    }
}
