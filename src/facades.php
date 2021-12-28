<?php

namespace Otis22\ClearDb;

use Otis22\ClearDb\Tools\Phinx;

function credential(): Credential
{
    $clearDbUrl = getenv('CLEARDB_DATABASE_URL');
    if ($clearDbUrl === false) {
        throw new \Exception(
            "CLEARDB_DATABASE_URL is not exists in environments."
            . " Did you enable ClearDb extension on your heroku dashboard?"
        );
    }
    return new Credential(new ParsedUrl($clearDbUrl));
}

function phinx(): Phinx
{
    return new Phinx(credential());
}
