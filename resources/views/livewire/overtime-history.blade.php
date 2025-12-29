<div class="p-6">
    <h3 class="text-lg font-semibold mb-4">Riwayat Lembur Saya</h3>

    @forelse($overtimes as $overtime)
      <div class="border p-4 mb-4 rounded">
        <p><strong>Tanggal:</strong> {{ $overtime->date }}</p>
        <p><strong>Jam:</strong> {{ $overtime->start_time }} - {{ $overtime->end_time }}</p>
        <p><strong>Alasan:</strong> {{ $overtime->reason }}</p>
        <p><strong>Status:</strong>
          @if($overtime->status === 'pending')
            <span class="text-yellow-600">Pending</span>
          @elseif($overtime->status === 'approved')
            <span class="text-green-600">Approved</span>
          @else
            <span class="text-red-600">Rejected</span>
          @endif
        </p>
      </div>
    @empty
      <p>Belum ada riwayat lembur.</p>
    @endforelse
</div>