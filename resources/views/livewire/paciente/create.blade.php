<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Paciente') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <form wire:submit.prevent="save">
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6">
                    <div class="py-4">
                        <h1 class="text-xl font-semibold">{{ $paginas[$paginaAtual]['titulo'] }}</h1>
                        <h2 class="text-md text-gray-500">{{ $paginas[$paginaAtual]['descricao'] }}</h2>
                    </div>
                    <div class="grid grid-cols-6 gap-6">
                        @if($paginaAtual == 1)
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                                <input type="text" wire:model.lazy="nome" id="nome"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('nome') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="sobrenome"
                                       class="block text-sm font-medium text-gray-700">Sobrenome</label>
                                <input type="text" name="sobrenome" id="sobrenome"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                                <input type="email" id="email"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                                <input type="tel" id="telefone"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                                <input type="text" name="cpf" id="cpf"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="rg" class="block text-sm font-medium text-gray-700">RG</label>
                                <input type="text" name="rg" id="rg"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="orgao_emissor" class="block text-sm font-medium text-gray-700">Órgão
                                    Emissor</label>
                                <input type="text" id="orgao_emissor"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="nacionalidade"
                                       class="block text-sm font-medium text-gray-700">Nacionalidade</label>
                                <input type="text" id="nacionalidade"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="cartao_sus" class="block text-sm font-medium text-gray-700">Cartão do
                                    SUS</label>
                                <input type="text" id="cartao_sus"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Data de
                                    Nascimento</label>
                                <input type="date" id="data_nascimento"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="estado_civil" class="block text-sm font-medium text-gray-700">Estado
                                    Civil</label>
                                <select id="estado_civil" wire:model.lazy="estado_civil"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value="" disabled>Selecione...</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                    <option value="União Estável">União Estável</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Viúvo(a)">Viúvo(a)</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="genero" class="block text-sm font-medium text-gray-700">Gênero</label>
                                <select id="genero" wire:model.lazy="genero"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value="" disabled>Selecione...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tipo_sanguineo" class="block text-sm font-medium text-gray-700">Tipo
                                    Sanguíneo</label>
                                <select id="tipo_sanguineo" wire:model.lazy="tipo_sanguineo"
                                        class="mt-1 block w-20 rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value="" disabled>...</option>
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

                            <div class="col-span-6 sm:col-span-4">
                                <label for="nome_pai" class="block text-sm font-medium text-gray-700">Nome do
                                    pai</label>
                                <input type="text" id="nome_pai"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="nome_mae" class="block text-sm font-medium text-gray-700">Nome da
                                    mãe</label>
                                <input type="text" id="nome_mae"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                        @elseif($paginaAtual == 2)
                            <div class="col-span-12">
                                adfad
                            </div>
                        @elseif($paginaAtual == 3)
                            <div class="col-span-6 sm:col-span-4">
                                <label for="cep" class="block text-sm font-medium text-gray-700">CEP</label>
                                <input type="text" wire:model.lazy="cep" id="cep" autocomplete="email"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('cep') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                        @elseif($paginaAtual == 4)
                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                <select id="country" name="country" autocomplete="country-name"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>

                            <div class="col-span-6">
                                <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                    address</label>
                                <input type="text" name="street-address" id="street-address"
                                       autocomplete="street-address"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" name="city" id="city" autocomplete="address-level2"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="region" class="block text-sm font-medium text-gray-700">State /
                                    Province</label>
                                <input type="text" name="region" id="region" autocomplete="address-level1"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                    Postal code</label>
                                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        @endif

                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <div class="flex space-x-6 justify-end">
                        @if($paginaAtual == 1)
                            <button type="button" wire:click.prevent="nextStep"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Próximo
                            </button>
                        @elseif($paginaAtual == 2)
                            <button type="button" wire:click.prevent="prevStep"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Voltar
                            </button>
                            <button type="button" wire:click.prevent="nextStep"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Próximo
                            </button>
                        @elseif($paginaAtual == 3)

                            <button type="button" wire:click.prevent="prevStep"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Voltar
                            </button>
                            <button type="button"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Cadastrar
                            </button>
                        @endif
                    </div>


                </div>
            </div>
        </form>
    </div>
</div>
