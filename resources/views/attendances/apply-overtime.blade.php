<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      Pengajuan Izin Lembur
    </h2>
  </x-slot>

  {{-- Form pengajuan lembur --}}
  @livewire('overtime-form')

  <hr class="my-6">

  {{-- Riwayat lembur karyawan --}}
  @livewire('overtime-history')
</x-app-layout>