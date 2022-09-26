<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTaskRequest extends FormRequest
{
  public function rules()
  {
    return [
      'name' => ['required', Rule::unique('tasks')->ignore($this->route('task')->id)],
      'cost' => ['required', 'numeric', 'min:0'],
      'date_limit' => ['required', 'date'],
    ];
  }

  public function attributes()
  {
    return [
      'name' => 'Nome da Tarefa',
      'cost' => 'Custo (R$)',
      'date_limit' => 'Data Limite',
    ];
  }
}
