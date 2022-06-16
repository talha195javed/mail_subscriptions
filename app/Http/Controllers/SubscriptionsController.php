<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

/**
 * Class SubscriptionsController
 * @package App\Http\Controllers
 */
class SubscriptionsController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function subscribe(Request $request)
    {
        $request->validate(
            [
                'user_id'    => 'required',
                'website_id' => 'required',
            ]
        );

        return Subscription::create(
            [
                'user_id'    => $request->post('user_id'),
                'website_id' => $request->post('website_id'),
            ]
        );
    }
}
