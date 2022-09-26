<x-layout.admin>
  <x-layout.card>

    <div class="flex f-justify-end mb-15">
      <x-button.link href="{{ route('tasks.create') }}" icon="fa-plus-circle" color="success">Cadastrar
      </x-button.link>
    </div>

    <x-datatable id="tasks-table" noscript>
      <x-slot name="header">
        <th class="text-center">Nome da Tarefa</th>
        <th class="text-center">Custo</th>
        <th class="text-center">Data Limite</th>
        <th class="text-center">Ações</th>
      </x-slot>
      <x-slot name="body">
        @foreach ($tasks as $task)
          <td>{{ $task->name }}</td>
          <td>R$ {{ $task->cost }}</td>
          <td>{{ $task->date_limit->format('d/m/Y H:m') }}</td>
          <td>
            {{-- <x-btn-light.group> --}}
            <x-btn-light.link href="{{ route('tasks.edit', $task) }}" icon="fa-pencil" color="blue"
              title="Editar Tarefa" />

            {{-- <x-btn-light.link href="{{ route('tasks.edit', $task) }}" icon="fa-pencil" color="green"
                title="Editar condomínio" />
              <x-btn-light.delete method="PUT" action="{{ route('tasks.destroy', $task) }}" title="Apagar Tarefa" /> --}}
            {{-- </x-btn-light.group> --}}
          </td>
          </tr>
        @endforeach
      </x-slot>
    </x-datatable>
  </x-layout.card>
</x-layout.admin>
