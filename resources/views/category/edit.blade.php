<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 rounded shadow">
            <form action="{{ route('category.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-200">Category Name</label>
                    <input type="text" name="title" value="{{ old('title', $category->title) }}"
                        class="w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-white">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <x-primary-button>Update</x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
