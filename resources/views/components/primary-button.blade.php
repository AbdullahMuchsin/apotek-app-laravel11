<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' =>
            'flex items-center justify-center py-1.5 px-4 bg-gray-900 text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500 transition-colors duration-200 hover:bg-gray-800',
    ]) }}>
    {{ $slot }}
</button>
