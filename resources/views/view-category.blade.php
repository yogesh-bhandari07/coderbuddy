<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <a href="{{route('category.create')}}" class="btn btn-neutral btn-sm m-4">Add</a>
                <a href="{{route('category-tree')}}" class="btn btn-accent btn-sm m-4">Tree</a>
                   
            
                    <table class="min-w-full bg-white  ">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left font-semibold text-gray-800">Name</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-800">Status</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-800">Parent</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-800">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $category->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($category->status)
                                            <span class="px-2 py-1 text-xs font-semibold text-green-600 bg-red-200 rounded-full">Active</span>
                                        @else
                                            <span class="px-2 py-1 text-xs font-semibold text-red-600 bg-green-200 rounded-full">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{  $category->parent?->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       
                                        <div class="btn-group btn-group-vertical lg:btn-group-horizontal">
                                            
                                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-neutral btn-sm">Edit</a>
                                            <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
    
                                          </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
               
            </div>
        </div>
    </div>
</x-app-layout>
