<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    public function store(OrderRequest $request): Response
    {
        $order = Order::create($request->validated());
        // event(new CreatedFriend(auth()->user()->account->id, $request->account_id));
        return response(new OrderResource($order), Response::HTTP_CREATED);
    }
}
