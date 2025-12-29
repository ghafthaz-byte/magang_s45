<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Overtime;

class OvertimeHistory extends Component
{
    public $status = 'all';

    public function render()
    {
        $query = Overtime::with(['user','approver'])->latest();

        if ($this->status !== 'all') {
            $query->where('status', $this->status);
        }

        return view('livewire.admin.overtime-history', [
            'overtimes' => $query->get(),
        ]);
    }
}