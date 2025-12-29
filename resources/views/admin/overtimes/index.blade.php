<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      Pengajuan Lembur
    </h2>
  </x-slot>

  {{-- Pending approval list --}}
  @livewire('admin.overtime-approval')

  <hr class="my-6">

  {{-- History list --}}
  @livewire('admin.overtime-history')
</x-app-layout>