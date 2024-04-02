<?php

namespace demo_collect2\Middlewares;

use Src\Request;

class TrimMiddleware
{
    public function handle(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            $request->set($key, is_string($value) ? trim($value) : $value);
        }
        return $request;
    }
}
