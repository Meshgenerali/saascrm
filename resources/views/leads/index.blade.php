<x-app-layout>
<x-slot name="header">
<h2 class="text-semibold text-xl text-white leading-tight">
    {{ __('Leads') }}
</h2>
</x-slot>

<div class="py-12">
    <div class="mx-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="bg-slate-700 overflow-hidden shadow-xl sm:rounded-lg p-6">
        <a class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" href="{{ route('leads.create') }}">Create</a>

        @if (session('message'))
                  <div class="text-green-500 text-sm">
                      {{ session('message') }}
                  </div>
        @endif
        
        @foreach ($leads as $lead)

        <div class="mt-4">
            {{ $lead->name }}
            {{ $lead->email }}
            <a class="text-blue-600 hover:underline" href="{{route('leads.edit', $lead = $lead->id)}}">Edit</a>
            <a class="text-red-600 hover:underline cursor-pointer" onclick="document.getElementById('lead{{$lead}}').submit()">Delete</a>
            <form id="lead{{$lead}}" action="{{route('leads.delete', $lead)}}" method="post">
                @csrf
                @method('DELETE')
            </form>
        </div>
            
        @endforeach

        {{ $leads->links() }}

    </div>
    </div>
</div>
</x-app-layout>