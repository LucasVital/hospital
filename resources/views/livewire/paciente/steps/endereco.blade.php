<div>
    @include('livewire.paciente.navigation')

    <div class="grid grid-cols-12 gap-6 mt-6">
        <div class="col-span-6 sm:col-span-12">
            <label for="cep" class="block text-sm font-medium text-gray-700">CEP
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="cep" id="cep" autocomplete="email"
                   class="mt-1 block w-[120px] rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('cep') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-12 sm:col-span-8">
            <label for="logradouro" class="block text-sm font-medium text-gray-700">Rua
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="logradouro" id="logradouro"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('logradouro') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-3 sm:col-span-2">
            <label for="numero" class="block text-sm font-medium text-gray-700">Número
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="numero" id="numero"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('numero') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-9 sm:col-span-7">
            <label for="bairro" class="block text-sm font-medium text-gray-700">Bairro
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="bairro" id="bairro"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('bairro') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-12 sm:col-span-4">
            <label for="complemento"
                   class="block text-sm font-medium text-gray-700">Complemento</label>
            <input type="text" wire:model.lazy="complemento" id="complemento"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="col-span-6 sm:col-span-6">
            <label for="cidade" class="block text-sm font-medium text-gray-700">Cidade
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="cidade" id="cidade"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('cidade') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-2">
            <label for="estado" class="block text-sm font-medium text-gray-700">UF
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="estado" maxlength="2" id="estado"
                   class="mt-1 block w-[55px] rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('estado') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
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
