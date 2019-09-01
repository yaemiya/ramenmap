<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateShop extends FormRequest
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
            'name' =>'required',
            'category_id' => 'required|not_in:1',
            'subcategory_id' => 'required|not_in:1',
            'address' => 'required',
            'image' =>'required|image',
            'review' =>'required',

        ];
    }
    public function messages()
{
    return [
        'name.required' => '店名を入力してください',
        'category_id.not_in' => 'カテゴリーを選んでください',
        'subcategory_id.not_in' => 'サブカテゴリーを選んでください',
        'address.required' => '住所を入力してください',
        'image.required' => '画像ファイルを選んでください',
        'image.file' =>'画像形式（jpg,png,gbmp,gif,svg)のファイルを選択してください',
        'review.required' => 'レビューを入力してください',
    ];
}
}
