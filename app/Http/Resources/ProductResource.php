<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'deskripsi' => $this->deskripsi,
            'price' => $this->price,
            'stock' => $this->stock,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'first_image' => $this->first_image,
            'product_image' => $this->whenLoaded('product_image', function () {
                return ProductImageResource::collection($this->product_image);
            }),
            'category_id' => $this->category_id,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'satuan_id' => $this->satuan_id,
            'satuan' => new SatuanResource($this->whenLoaded('satuan')),
        ];
    }
}