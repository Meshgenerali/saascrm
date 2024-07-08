<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Leads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('message'))
                  <div class="text-green-500 text-sm">
                      {{ session('message') }}
                  </div>
        @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
               <form action="{{route('leads.update', ['lead' => $lead->id])}}" method="post">
                @csrf
                @method('PUT')
                <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') ?? $lead->name }}" required autofocus />
                @if ($errors->has('name'))
                        <span class="text-red-500 text-sm">{{ $errors->first('name') }}</span>
                @endif
                </div>

                <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') ?? $lead->email }}" required />
                @if ($errors->has('email'))
                        <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                @endif
                </div>

                <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ old('phone') ?? $lead->phone }}" required  />
                @if ($errors->has('phone'))
                        <span class="text-red-500 text-sm">{{ $errors->first('phone') }}</span>
                @endif
                </div>

                <div class="mt-4">
                <x-label for="message" value="{{ __('Message') }}" />
                <x-input id="message" class="block mt-1 w-full" type="text" name="message" value="{{ old('message') ?? $lead->message }}" required  />
                @if ($errors->has('message'))
                        <span class="text-red-500 text-sm">{{ $errors->first('message') }}</span>
                @endif
                </div>

                <div class="mt-4">
                <x-label for="status" value="{{ __('Status') }}" />
                <x-select id="status" class="block mt-1 w-full bg-black" type="text" name="status" :value="old('status')" required  >
    
                <option value="new" @if (old('status') == 'new' || $lead->status == 'new')
                selected = 'selected'
                @endif>New</option>
                <option value="contacted" @if (old('status') == 'contacted' || $lead->status == 'contacted')
                selected = 'selected'
                @endif>Contacted</option>
                <option value="converted" @if (old('status') == 'converted' || $lead->status == 'converted')
                selected = 'selected'
                @endif>Converted</option>
                </x-select>
                @if ($errors->has('status'))
                        <span class="text-red-500 text-sm">{{ $errors->first('status') }}</span>
                @endif
                </div>

                <div class="flex items-center justify-end mt-4">
                <x-button class="ms-4 btn btn-primary">
                    {{ __('Create Lead') }}
                </x-button>
            </div>

               </form>
            </div>
        </div>
    </div>
</x-app-layout>