<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Overtime;
use Illuminate\Support\Facades\Auth;


class OvertimeHistory extends Component
{
public $overtimes;

    public function mount()
    {
        // Ambil semua lembur milik user yang login
        $this->overtimes = Overtime::where('user_id', Auth::id())
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.overtime-history');
    }

}
