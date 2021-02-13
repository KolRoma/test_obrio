<?php

namespace App\Http\Controllers;

use App\Models\Astrologer;
use Illuminate\Http\Request;
use App\Http\Resources\{AstrologerResource, AstrologerCardResource};
use Illuminate\Http\Resources\Json\ResourceCollection;

class AstrologerController extends Controller
{
    /**
     * Get astrologers
     *
     * @return ResourceCollection
     */
    public function index(): ResourceCollection
    {
        return AstrologerCardResource::collection(
            Astrologer::all()
        );
    }

    /**
     * Get astrologers
     *
     * @return ResourceCollection
     */
    public function show(Astrologer $astrologer): AstrologerResource
    {
        return new AstrologerResource($astrologer);
    }
}
