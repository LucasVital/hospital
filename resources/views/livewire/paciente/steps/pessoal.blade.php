<div>

    @include('livewire.paciente.navigation')

    <input type="hidden" wire:model.lazy="paciente_id" class="hidden">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-5 sm:col-span-4">
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="nome" id="nome"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('nome') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-7 sm:col-span-6">
            <label for="sobrenome" class="block text-sm font-medium text-gray-700">Sobrenome
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="sobrenome" id="sobrenome"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('sobrenome') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-12 sm:col-span-5">
            <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
            <input type="email" wire:model.lazy="email" id="email"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('email') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
            <input type="tel" wire:model.lazy="telefone" id="telefone"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm phone">
            @error('telefone') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="cpf" class="block text-sm font-medium text-gray-700">CPF
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="cpf" id="cpf"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm cpf">
            @error('cpf') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="rg" class="block text-sm font-medium text-gray-700">RG
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="rg" id="rg"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('rg') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="rg_emissor" class="block text-sm font-medium text-gray-700">Órgão
                Emissor
                <x-asterisk/>
            </label>
            <input type="text" wire:model.lazy="rg_emissor" id="rg_emissor"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('rg_emissor') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="nacionalidade"
                   class="block text-sm font-medium text-gray-700">Nacionalidade</label>
            <input type="text" wire:model.lazy="nacionalidade" id="nacionalidade"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('nacionalidade') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="cartao_sus" class="block text-sm font-medium text-gray-700">Cartão do
                SUS</label>
            <input type="text" wire:model.lazy="cartao_sus" id="cartao_sus"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('cartao_sus') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Data de
                Nascimento
                <x-asterisk/>
            </label>
            <input type="date" wire:model.lazy="data_nascimento" id="data_nascimento"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('data_nascimento') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="estado_civil" class="block text-sm font-medium text-gray-700">Estado
                Civil
                <x-asterisk/>
            </label>
            <select id="estado_civil" wire:model.lazy="estado_civil"
                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option value="" disabled>Selecione...</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="União Estável">União Estável</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viúvo(a)">Viúvo(a)</option>
            </select>
            @error('estado_civil') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="genero" class="block text-sm font-medium text-gray-700">Gênero
                <x-asterisk/>
            </label>
            <select id="genero" wire:model.lazy="genero"
                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option value="" disabled>Selecione...</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            @error('genero') <span
                class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="tipo_sanguineo" class="block text-sm font-medium text-gray-700">Tipo
                Sanguíneo</label>
            <select id="tipo_sanguineo" wire:model.lazy="tipo_sanguineo"
                    class="mt-1 block w-20 rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option value="Selecione..." disabled>...</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>

        <div class="col-span-12">

            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-3 sm:col-span-2">
                    <label for="peso" class="block text-sm font-medium text-gray-700">Peso (kg)</label>
                    <input type="text" wire:model.lazy="peso" id="peso"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm peso">
                    @error('peso') <span
                        class="text-red-700 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-3 sm:col-span-2">
                    <label for="altura" class="block text-sm font-medium text-gray-700">Altura (m)</label>
                    <input type="text" wire:model.lazy="altura" id="altura"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm altura">
                    @error('altura') <span
                        class="text-red-700 text-xs">{{ $message }}</span> @enderror
                </div>

            </div>

        </div>

    </div>

    <div class="flex justify-end py-6">
        <button type="button" wire:click="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Próximo
        </button>
    </div>

</div>
