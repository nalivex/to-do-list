<x-layout.admin>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      Editar {{ $task->name }}
    </h2>

  </x-slot>
  <div class="flex f-justify-end mb-15">
    <x-button.link href="{{ route('tasks.index') }}" icon="fa-chevron-left" color="success">Voltar
    </x-button.link>
  </div>
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="px-4 py-4 overflow-hidden bg-white shadow-md sm:rounded-lg">
        <form action="{{ route('tasks.update', $task) }}" method="POST">
          @method('PUT')
          @include('tasks.form-edit')
        </form>

      </div>
    </div>
  </div>
</x-layout.admin>
