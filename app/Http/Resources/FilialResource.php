<?php

namespace App\Http\Resources;

use App\Models\Filial;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilialResource extends JsonResource
{
    /**
     * @var Filial
     */
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->resource->id,
            'name'      => $this->resource->name,
            'address'   => $this->resource->address,
            'latitude'  => $this->resource->latitude,
            'longitude' => $this->resource->longitude,
            'state'     => $this->whenLoaded('state', function () {
                return StateResource::make($this->resource->state);
            }),
        ];
    }
}
