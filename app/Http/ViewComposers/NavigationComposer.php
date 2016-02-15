<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NavigationComposer
{
    private $request;

    public function __construct(Request $request)
    {

        $this->request = $request;
    }

    public function compose(View $view)
    {
        $request = $this->request;
        $view
            ->with('isActive', function (string $str, int $segment = null) use ($request) {
                if ($segment) {
                    if ($request->segment($segment) == $str) {
                        return 'active';
                    }
                    return '';
                }
                if ($request->path() == $str) {
                    return 'active';
                }
                return '';
            });
    }
}
