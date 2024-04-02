<?php
namespace demo_collect2\Middlewares;
use Src\Auth\Auth;
use Src\Request;
class AdminSysMiddleware
{
    public function handle(Request $request)
    {
        if (!Auth::adminControl()) {
            app()->route->redirect('/hello');
        }
    }
}