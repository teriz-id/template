<?php

namespace Zebua\Teriz\Middleware;

interface Middleware
{
    function before(): void;
}
