<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('chirps.store') }}" method="POST">
            @csrf
            <textarea name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo200 focus:ring-opacity-50 rounded-md shadow-sm"
                placeholder="{{ __('What\'s on your mind?') }}">
                {{ old('message') }}
            </textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2"></x-input-error>
            <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>