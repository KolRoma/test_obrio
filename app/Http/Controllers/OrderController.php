<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
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
        event(new OrderCreated($order));
        return response(new OrderResource($order), Response::HTTP_CREATED);
    }
}
