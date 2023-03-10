<?php

namespace App\Http\Resources\Post;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/** @see \App\Models\Post */
class PostResource extends JsonResource
{
  public function toArray(Request $request): array
  {
    return [
      'id' => $this->id,
      'title' => $this->title,
      'description' => $this->description,
      'content' => $this->content,
      'image' => $this->image,
      'likes' => $this->likes,
      'dislikes' => $this->dislikes,
      'create' => Carbon::parse($this->created_at)->format('d-m-Y H:i:s')
    ];
  }
}
