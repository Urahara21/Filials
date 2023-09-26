<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilialResource;
use App\Models\Filial;

class FilialAPIController extends Controller
{
    public function index()
    {
        $filials = Filial::query()->with(['state'])->get();
        return FilialResource::collection($filials)->response();
    }

    public function show(Filial $filial)
    {
        return FilialResource::make($filial)->response();
    }
}
