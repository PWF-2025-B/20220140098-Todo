<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 rounded shadow">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label class="block text-white-700 dark:text-b-200">Category Name</label>
                    <input type="text" name="title" id="title"
                        class="w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-white">
                    @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                    <a href="{{ route('category.index') }}"
                        class="inline-flex  items-center px-4 py-2 text-xs fonst-semibold tracking-widest
                                text-gray-700 uppercase transition duration-150 ease-in-out bg-white border
                                border-gray-300 rounded-md shadow-sm dark:bg-gray-800 dark:border-gray-500
                                dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2
                                focus:ring-indigo-500 focus:ring-ffset-2 dark:focus:ring-offset-gray-800
                                disabled:opacity-25">{{ __('Cancel') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>