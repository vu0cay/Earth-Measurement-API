<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TreeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $nutrients = null;
        if(isset($this->nutrients)) {
            foreach($this->nutrients as $nutrient) { 
                $nutrients[] = $nutrient->only(['name','lower_bound','upper_bound']);
            }
        }
        return [
            "id" => $this->id,
            "name"=> $this->name,
            "type" => $this->treecategory->name,
            "humidity" => isset($this->humidity) ? ["lower_bound" => $this->humidity->lower_bound ?? null,
                        "upper_bound" => $this->humidity->upper_bound ?? null, 
                        "unit" => $this->humidity->unit] : null,
            "temperature" => isset($this->temperature) ? ["lower_bound" => $this->temperature->lower_bound ?? null,
                        "upper_bound" => $this->temperature->upper_bound ?? null, 
                        "unit" => $this->temperature->unit] : null,
            "salinity" => isset($this->salinity) ? ["lower_bound" => $this->salinity->lower_bound ?? null,
                        "upper_bound" => $this->salinity->upper_bound ?? null, 
                        "unit" => $this->salinity->unit] : null,
            "pH" => isset($this->ph) ? ["lower_bound" => $this->ph->lower_bound ?? null,
                        "upper_bound" => $this->ph->upper_bound ?? null, 
                        "unit" => $this->ph->unit] : null,
            "nutrients" => $nutrients,
        ];
    }
}
