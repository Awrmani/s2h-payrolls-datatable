@props([ 'column' ])

<input wire:loading.attr="disabled" wire:model.lazy="{{ $column['name'] }}" type="{{ $column['input'] }}" 
    {{ isset($column['events']) ? $column['events'] : '' }}
    id="{{ $column['name'] }}" {{ $column['input'] === 'password' ? 'autocomplete=new-password' : ''}}
    class="max-w-lg block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-50 h-10 text-md {{ isset($column['input_class']['input']) ? $column['input_class']['input'] : '' }} {{ $errors->has($column['name']) ? 'text-red-900 border-red-300 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:border-indigo-300 focus:ring-indigo-200' }}"
    aria-invalid="{{ $errors->has($column['name']) ? 'true' : 'false' }}" aria-describedby="{{ $column['name'] }}-error"
>

