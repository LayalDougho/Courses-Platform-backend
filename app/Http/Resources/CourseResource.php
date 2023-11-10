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
          'id' => $this->id,
          'title' => $this->title,
          'description' => $this->description,
          'duration' => $this->duration,
          'price' => $this->price,
          'discount' => $this->discount,
          'what_you_will_learn' => $this->what_you_will_learn,
          'training_program' => $this->training_program,
          'discount_duration' => $this->discount_duration,

//          'teachers' => TeacherResource::collection($this->teachers),
//          'projects' => ProjectResource::collection($this->projects) ,
//          'programmes' => ProgramResource::collection($this->programmes),


            'teachers' => $this->teachers,
            'projects' => $this->projects ,
            'programmes' => $this->programmes  ,
        ];
    }
}
