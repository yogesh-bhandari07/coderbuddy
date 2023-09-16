<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Category


        </h2>


    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">

                    <form method="POST" action="{{ route('category.store') }}" class="p-4">
                        @csrf
                        <div class="form-control w-full ">
                            <label class="label">
                                <span class="label-text">What is your name?</span>

                            </label>
                            <input type="text" placeholder="Type here" name="name" value="{{ old('name') }}"
                                class="input input-bordered w-full " />
                            <label class="label">
                                <span class="label-text-alt"> @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </span>
                            </label>

                        </div>

                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Parent Category</span>

                            </label>
                            <select class="select select-bordered" name="parent_id" id="parent_id">
                                <option value="" selected>Parent Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <span class="label-text-alt"> @error('parent_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </span>
                        </div>


                </div>
                <center> <button type="submit" class="btn btn-primary btn-sm my-2">Submit</button></center>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
