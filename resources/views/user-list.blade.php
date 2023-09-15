<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                   
            
                    <table class="min-w-full bg-white  ">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left font-semibold text-gray-800">Name</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-800">Status</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-800">Email</th>
                                <th class="px-6 py-3 text-left font-semibold text-gray-800">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($user->status)
                                            <span class="px-2 py-1 text-xs font-semibold text-green-600 bg-red-200 rounded-full">Active</span>
                                        @else
                                            <span class="px-2 py-1 text-xs font-semibold text-red-600 bg-green-200 rounded-full">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><a href="{{route('user-dashboard-login',$user->id)}}">Dashboard</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
               
            </div>
        </div>
    </div>
</x-app-layout>
