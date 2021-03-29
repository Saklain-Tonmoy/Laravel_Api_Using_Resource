<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    // Following function will add this pieces of data with the disired data
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_name' => 'Golam Saklain',
            'author_url' => url('https://github.com/Saklain-Tonmoy')
        ];
    }
}
