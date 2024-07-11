<?php

namespace App\Livewire;

use App\Models\Plan;
use Livewire\Component;

class PlansPricing extends Component
{
    public $selectedPlan;

    public function selectPlan(Plan $plan) {
        
        $this->selectedPlan = $plan;
    }
    public function render()
    {
        $plans = Plan::all();
        return view('livewire.plans-pricing', compact('plans'));
    }
}
