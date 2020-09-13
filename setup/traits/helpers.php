<?php

namespace Setup\Traits;

trait Helpers
{

    public function parseUrl()
    {
        return explode("/", rtrim($_GET['q']), FILTER_SANITIZE_URL);
    }
}
