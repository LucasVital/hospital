<div>
    @include('livewire.paciente.navigation')
    <div>

        <div class="grid grid-cols-12 gap-6 mt-6">

            <div class="col-span-12 sm:col-span-6">
                <label for="nome_mae" class="block text-sm font-medium text-gray-700">Nome da mãe
                    <x-asterisk/>
                </label>
                <input type="text" wire:model.lazy="nome_mae" id="nome_mae"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @error('nome_mae') <span
                    class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label for="nome_pai" class="block text-sm font-medium text-gray-700">Nome do
                    pai</label>
                <input type="text" wire:model.lazy="nome_pai" id="nome_pai"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @error('nome_pai') <span
                    class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>


            <div class="col-span-12 sm:col-span-6">
                <label for="responsavel" class="block text-sm font-medium text-gray-700">Nome do
                    responsável pelo paciente</label>
                <input type="text" wire:model.lazy="responsavel" id="responsavel"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @error('responsavel') <span
                    class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>

        </div>

    </div>

    <div class="flex justify-end space-x-4 py-6">
        <button type="button" wire:click="previousStep"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Anterior
        </button>

        <button type="button" wire:click="submit"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Próximo
        </button>
    </div>

</div>
