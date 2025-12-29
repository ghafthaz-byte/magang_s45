<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Overtime;
use Illuminate\Support\Facades\Auth;

class OvertimeForm extends Component
{
    public $start_time;
    public $end_time;
    public $reason;

    protected $rules = [
        'start_time' => 'required|date_format:H:i',
        'end_time'   => 'required|date_format:H:i|after:start_time',
        'reason'     => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        Overtime::create([
            'user_id'    => Auth::id(),
            'date'       => date('Y-m-d'),
            'start_time' => $this->start_time,
            'end_time'   => $this->end_time,
            'reason'     => $this->reason,
            'status'     => 'pending',
        ]);

        session()->flash('success', 'Pengajuan lembur berhasil dikirim, menunggu persetujuan.');
        $this->reset(['start_time', 'end_time', 'reason']);
    }

public function render()
{
    return view('livewire.overtime-form');
}

}