<?php

namespace demo_collect2\Middlewares;

use Src\Request;
use function Collect\collection;

class SpecialCharsMiddleware
{
    public function handle(Request $request):Request
    {
        collection($request->all())
            ->each(function ($value, $key, $request) {
                $request->set($key, is_string($value) ? htmlspecialchars($value) : $value);
            }, $request);

        return $request;
    }
}
