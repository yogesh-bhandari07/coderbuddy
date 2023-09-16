<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Category Tree View
        </h2>


    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <p><b>{{ $category->name }}</b></p>
                            @if ($category->descendants->count() > 0)
                                @include('subcategories', ['categories' => $category->descendants])
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
