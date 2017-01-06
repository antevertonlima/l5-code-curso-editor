<?php

namespace CodePub\Http\Requests;

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
        $book = $this->route('book');
        $userId = $book ? $book->user_id:\Auth::user()->id;
        $checkPerm = ($userId == \Auth::user()->id) ? true : false ;
        return $checkPerm;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        $book = $this->route('book');
//        $id = $book ? $book->id:null;
        return [
            'title' => "required|max:255",
            'subtitle' => "required|max:255",
            'price' => "required|numeric"
        ];
    }
}
