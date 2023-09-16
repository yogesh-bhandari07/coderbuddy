<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard

            @if (session()->has('last_admin_id'))
                <a href="{{ route('user-dashboard-login', session('last_admin_id')) }}"
                    class="rounded-lg px-4 py-2 bg-gray-600 text-gray-100 hover:bg-gray-700 duration-300"><button>Go to
                        Admin</button></a>
            @endif
        </h2>


    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome {{ ucfirst(Auth::user()->name) }}!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
