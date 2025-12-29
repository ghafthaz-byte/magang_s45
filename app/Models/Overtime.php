<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'start_time',
        'end_time',
        'reason',
        'status',
        'approved_by',
        'approved_at',
    ];

    // Relasi ke karyawan yang mengajukan lembur
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke admin/super admin yang menyetujui/menolak lembur
    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}