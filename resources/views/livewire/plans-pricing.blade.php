<section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="bg-gray-800 text-4xl font-bold text-center mb-12 rounded">Our Plans</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($plans as $plan)
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 transform hover:-translate-y-2 transition duration-300">
                        <h3 class="text-2xl font-semibold mb-4">{{ $plan->name }}</h3>
                        <p class="text-gray-400 mb-6">{{ $plan->description }}</p>
                        <div class="mb-6">
                            <span class="text-3xl font-bold">{{ $plan->currency }} {{ number_format($plan->price, 2) }}</span>
                            <span class="text-gray-400">/ {{ $plan->interval }} days</span>
                        </div>
                        @if ($plan->trial_period_days)
                            <p class="text-sm text-gray-400 mb-4">Free trial for {{ $plan->trial_period_days }} days</p>
                        @endif
                        <a wire:click="selectPlan('{{ $plan->id }}')" class="block w-full bg-blue-600 text-white text-center py-2 rounded hover:bg-blue-700">Choose Plan</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
