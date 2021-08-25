<x-guest-layout>
    <section class="w-full min-h-screen p-6 bg-gray-100 shadow-lg rounded-xl">
        <h2 class="py-6 text-2xl font-semibold">Livewire Contact Form</h2>

        <form action="#" class="space-y-4">
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input name="name" id="name" type="text" />
                <x-jet-input-error for='name' />
            </div>

            <div>
                <x-jet-label for="email" value="{{ __('Email Address') }}" />
                <x-jet-input name="email" id="email" type="email" />
                <x-jet-input-error for='email' />
            </div>

            <div>
                <x-jet-label for="email" value="{{ __('Message') }}" />
                <textarea class="w-full" name="" id="" cols="30" rows="10"></textarea>
                <x-jet-input-error for='body' />
            </div>

            <x-jet-button type="submit" class="mt-5">
                {{ _('Send') }}
            </x-jet-button>
        </form>

    </section>
</x-guest-layout>
