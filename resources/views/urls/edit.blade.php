<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 bg-gray-50 shadow-md rounded-lg">
        <form method="POST" action="{{ route('urls.update', $url) }}">
            @csrf
            @method('patch')
            <div class="mb-4">
                <input type="text"
                    name="title"
                    required
                    maxlength="255"
                    placeholder="{{ __('Title') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm p-2"
                    value="{{ old('title', $url->title) }}"
                />
                <x-input-error :messages="$errors->store->get('title')" class="mt-2" />
            </div>
            <div class="mb-4">
                <input type="text"
                    name="original_url"
                    required
                    maxlength="255"
                    placeholder="{{ __('Original Url') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm p-2"
                    value="{{ old('original_url', $url->original_url) }}"
                />
                <x-input-error :messages="$errors->store->get('original_url')" class="mt-2" />
            </div>
            <div class="flex justify-between items-center mt-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('urls.index') }}" class="text-gray-600 hover:text-gray-900">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
