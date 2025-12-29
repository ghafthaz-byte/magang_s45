<div class="p-6">
    <h3 class="text-lg font-semibold mb-4">Riwayat Lembur Karyawan</h3>

    <!-- <div class="mb-4">
        <label>Status Filter:</label>
        <select wire:model="status" class="border rounded px-2 py-1">
            <option value="all">Semua</option>
            <option value="pending">Pending</option>
            <option value="approved">Approved</option>
            <option value="rejected">Rejected</option>
        </select>
    </div> -->

    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Karyawan</th>
                <th class="border p-2">Tanggal</th>
                <th class="border p-2">Jam</th>
                <th class="border p-2">Alasan</th>
                <th class="border p-2">Status</th>
                <!-- <th class="border p-2">Disetujui/Ditolak oleh</th>
                <th class="border p-2">Waktu</th> -->
            </tr>
        </thead>
        <tbody>
            @forelse($overtimes as $overtime)
                <tr>
                    <td class="border p-2">{{ $overtime->user->name }}</td>
                    <td class="border p-2">{{ $overtime->date }}</td>
                    <td class="border p-2">{{ $overtime->start_time }} - {{ $overtime->end_time }}</td>
                    <td class="border p-2">{{ $overtime->reason }}</td>
                    <td class="border p-2">{{ ucfirst($overtime->status) }}</td>
                    <!-- <td class="border p-2">{{ $overtime->approver?->name ?? '-' }}</td>
                    <td class="border p-2">{{ $overtime->approved_at ?? '-' }}</td> -->
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="border p-2 text-center">Tidak ada riwayat lembur.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>