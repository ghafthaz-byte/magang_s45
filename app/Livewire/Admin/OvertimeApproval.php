<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Overtime;

class OvertimeApproval extends Component
{
        public $overtimes;

    public function mount()
    {
        $this->overtimes = Overtime::where('status', 'pending')->with('user')->get();
    }

    public function approve($id)
    {
        $overtime = Overtime::findOrFail($id);
        $overtime->update(['status' => 'approved']);
        $this->refreshList();
        session()->flash('success', 'Pengajuan lembur disetujui.');
    }

    public function reject($id)
    {
        $overtime = Overtime::findOrFail($id);
        $overtime->update(['status' => 'rejected']);
        $this->refreshList();
        session()->flash('success', 'Pengajuan lembur ditolak.');
    }

    private function refreshList()
    {
        $this->overtimes = Overtime::where('status', 'pending')->with('user')->get();
    }
    public function render()
    {
        return view('livewire.admin.overtime-approval')
            ->layout('layouts.app'); // ✅ bukan components.layouts.app
    }
}
