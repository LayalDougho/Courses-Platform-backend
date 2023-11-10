<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'title' => $this->title,
          'description' => $this->description,
          'duration' => $this->duration,
          'price' => $this->price,
          'discount' => $this->discount,
          'what_you_will_learn' => $this->what_you_will_learn,
          'training_program' => $this->training_program,
          'discount_duration' => $this->discount_duration,

          'teachers' => $this->whenLoaded('teachers' , fn() => TeacherResource::collection($this->teachers)) ,
          'projects' => $this->whenLoaded('projects' , fn() => ProjectResource::collection($this->projects)) ,
          'programmes' => $this->whenLoaded('teachers' , fn() => ProgramResource::collection($this->programmes))  ,
        ];
    }
}
