<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date' => 'required|min:6|max:11',
            'start' => 'required|max:8',
            'end' => 'required|max:8',
            'duration' => 'required|min:1',
            'client' => 'nullable|max:100',
            'course' => 'nullable|max:100',
            'class' => 'nullable|max:100',
            'obs' => 'nullable|max:500',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'O campo data é obrigatório!',
            'date.min' => 'O campo data deve conter no mínimo 6 caracteres!',
            'date.max' => 'O campo data deve conter no máximo 10 caracteres',
            'start.required' => 'O campo horário de início é obrigatório!',
            'start.max' => 'O campo horário de início deve conter no máximo 10 caracteres!',
            'end.required' => 'O campo horário de fim é obrigatório!',
            'end.max' => 'O campo horário de fim deve conter no máximo 10 caracteres!',
            'duration.required' => 'O campo duração é obrigatório!',
            'duration.min' => 'O campo duração deve conter no mínimo 4 caracteres!',
            'duration.max' => 'O campo duração deve conter no máximo 8 caracteres!',
            'client.max' => 'O campo aluno deve conter no máximo 100 caracteres!',
            'course.max' => 'O campo curso deve conter no máximo 100 caracteres!',
            'class.max' => 'O campo disciplina deve conter no máximo 100 caracteres!',
            'obs.max' => 'O campo observações deve conter no máximo 500 caracteres!',

        ];
    }
}
