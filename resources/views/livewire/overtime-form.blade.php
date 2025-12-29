<div class="p-6 max-w-xl mx-auto">

    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">

        <h2 class="text-lg font-semibold text-gray-800 mb-4">
            Pengajuan Lembur
        </h2>

        <form wire:submit.prevent="submit" class="space-y-5">

            <!-- Jam Mulai -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Jam Mulai
                </label>
                <input
                    type="time"
                    wire:model="start_time"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2
                           focus:outline-none focus:ring-2 focus:ring-amber-400"
                >
                @error('start_time')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Jam Selesai -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Jam Selesai
                </label>
                <input
                    type="time"
                    wire:model="end_time"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2
                           focus:outline-none focus:ring-2 focus:ring-amber-400"
                >
                @error('end_time')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Alasan -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Alasan
                </label>
                <textarea
                    wire:model="reason"
                    rows="4"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2
                           focus:outline-none focus:ring-2 focus:ring-amber-400"
                    placeholder="Contoh: Deadline project, deploy malam hari..."
                ></textarea>
                @error('reason')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit -->
            <div class="pt-2">
                <button
                    type="submit"
                    class="w-full bg-amber-500 hover:bg-amber-600 text-white
                           font-medium py-2.5 rounded-lg transition"
                >
                    Ajukan Lembur
                </button>
            </div>

        </form>
    </div>
</div>
