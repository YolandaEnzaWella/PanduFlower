<?php

namespace App\Http\ViewComposers;

use Auth;
use Illuminate\Contracts\View\View;

class CartViewComposer
{
    public function compose(View $view) {
        $user = Auth::user();
        $cart_count = is_null($user) ? 0 : $user->cart->count();
        $view->with('cart_count', $cart_count);
    }
}
