<?php

namespace App\Http\Requests;

use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTaskRequest extends FormRequest
{
  public function rules()
  {
    return [
      'name' => ['required', Rule::unique('tasks')],
      'cost' => ['required', 'numeric', 'min:0'],
      'date_limit' => ['required', 'date'],
    //   'order_of_presentation'=>[Task::count()+1],
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
