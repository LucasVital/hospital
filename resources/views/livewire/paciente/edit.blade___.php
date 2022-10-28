<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Paciente
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <form wire:submit.prevent="save">
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6">
                    <livewire:paciente.paciente-wizard-component/>
                </div>
            </div>
        </form>
    </div>
</div>
