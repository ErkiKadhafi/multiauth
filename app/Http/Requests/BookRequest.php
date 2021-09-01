<?php

namespace App\Http\Requests;

use App\Models\Book;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'isbn' => ['required', 'numeric', 'digits:10'],
            'title' => ['required', 'string'],
            'publisher' => ['required', 'string'],
            'cathegory' => ['required', 'string'],
            'language' => ['required', 'string'],
            'stock' => ['required', 'numeric'],
            'pages' => ['required', 'numeric'],
            'rack' => ['required', 'numeric'],
        ];
    }

    public function addBooks()
    {
        Book::create($this->all());
    }
}
