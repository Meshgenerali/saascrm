<x-app-layout>
<x-slot name="header">
<h2 class="text-semibold text-xl text-white leading-tight">
    {{ __('Leads') }}
</h2>
</x-slot>

<div class="py-12">
    <div class="mx-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <a href="{{ route('leads.create') }}">Create</a>
    </div>

    </div>
</div>
</x-app-layout>