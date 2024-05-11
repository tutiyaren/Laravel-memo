<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemoRequest extends FormRequest
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
            'title' => 'required|max:255',
            'content' => 'required|max:255'
        ];
    }

    public function message()
    {
        return [
            'title.required' => 'タイトルを入力してください',
            'title.max' => 'タイトルは255文字以下で入力してください',
            'content.required' => '内容を入力してください',
            'content.max' => '内容は255文字以下で入力してください', 
        ];
    }

    public function getRedirectUrl()
    {
        return 'verror';
    }
}
