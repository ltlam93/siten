<?php
/**
 * Created by PhpStorm.
 * User: Tester-Ali
 * Date: 01-04-2016
 * Time: 9:17 AM
 */

namespace App\Http\Requests;


class SearchRequest extends Request
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
        return [];
    }
}