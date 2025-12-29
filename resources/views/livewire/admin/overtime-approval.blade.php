<div class="p-6 space-y-6">

    @if(session('success'))
        <div class="bg-green-100 text-green-700 border border-green-300 p-4 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @forelse($overtimes as $overtime)
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 hover:shadow-md transition">

            <!-- Header -->
            <div class="flex justify-between items-center mb-3">
                <h3 class="text-lg font-semibold text-gray-800">
                    {{ $overtime->user->name }}
                </h3>
                <span class="text-sm text-gray-500">
                    {{ $overtime->date }}
                </span>
            </div>

            <!-- Content -->
            <div class="text-sm text-gray-700 space-y-1">
                <p>
                    <span class="font-medium">Jam:</span>
                    {{ $overtime->start_time }} - {{ $overtime->end_time }}
                </p>
                <p>
                    <span class="font-medium">Alasan:</span>
                    {{ $overtime->reason }}
                </p>
            </div>

            <!-- Actions -->
            <div class="flex gap-3 mt-4">
                <button
                    wire:click="approve({{ $overtime->id }})"
                    class="flex-1 bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg text-sm font-medium transition"
                >
                    Approve
                </button>

                <button
                    wire:click="reject({{ $overtime->id }})"
                    class="flex-1 bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg text-sm font-medium transition"
                >
                    Reject
                </button>
            </div>
        </div>
    @empty
        <div class="text-center text-gray-500 py-10">
            Tidak ada pengajuan lembur pending saat ini.
        </div>
    @endforelse

</div>
