<x-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto pb-2" />

        <x-splade-table :for="$users" class="min-w-full" />
            <x-splade-cell actions>
                <Link modal href="/users/{{ $item->id }}"> Show </Link>
            </x-splade-cell>
    </x-panel>
</x-layout>
