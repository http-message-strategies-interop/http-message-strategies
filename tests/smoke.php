#!/usr/bin/env php
<?php

namespace Interop\Http\Message\Strategies;

require_once __DIR__.'/../vendor/autoload.php';

new Fixtures\RequestHandler();
new Fixtures\RequestOperator();
new Fixtures\ResponseOperator();
new Fixtures\ServerRequestHandler();
new Fixtures\ServerRequestOperator();
