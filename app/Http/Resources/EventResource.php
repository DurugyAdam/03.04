<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "subject" => $this->subject,
            "description" => $this->description,
            "location" => $this->location,
            "allDay" => $this->allDay,
            "start"=>$this->start,
            "end"=>$this->end
        ];
    }
}
