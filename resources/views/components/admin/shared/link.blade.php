@props(['to', 'name', 'active'])

<a href="{{ $to }}"
    class="{{ $active ? 'border-blue-600 font-bold' : 'hover:border-gray-600' }} inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent ">{{ $name }}</a>
