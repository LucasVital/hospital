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
                    <div class="py-4">
                        <h1 class="text-xl font-semibold">{{ $paginas[$paginaAtual]['titulo'] }}</h1>
                        <h2 class="text-md text-gray-500">{{ $paginas[$paginaAtual]['descricao'] }}</h2>
                        <p class="text-xs text-gray-500 mt-2">( <x-asterisk/> ) campo com preenchimento obrigatório</p>
                    </div>
                    @if($paginaAtual === 1)
                        <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-5 sm:col-span-4">
                                <label for="nome" class="block text-sm font-medium text-gray-700">Nome <x-asterisk/></label>
                                <input type="text" wire:model.lazy="nome" id="nome"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('nome') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-7 sm:col-span-6">
                                <label for="sobrenome" class="block text-sm font-medium text-gray-700">Sobrenome <x-asterisk/></label>
                                <input type="text" wire:model.lazy="sobrenome" id="sobrenome"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('sobrenome') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-12 sm:col-span-5">
                                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                                <input type="email" wire:model.lazy="email" id="email"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('email') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                                <input type="tel" wire:model.lazy="telefone" id="telefone"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('telefone') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="cpf" class="block text-sm font-medium text-gray-700">CPF <x-asterisk/></label>
                                <input type="text" wire:model.lazy="cpf" id="cpf"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('cpf') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="rg" class="block text-sm font-medium text-gray-700">RG <x-asterisk/></label>
                                <input type="text" wire:model.lazy="rg" id="rg"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('rg') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="rg_emissor" class="block text-sm font-medium text-gray-700">Órgão
                                    Emissor <x-asterisk/></label>
                                <input type="text" wire:model.lazy="rg_emissor" id="rg_emissor"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('rg_emissor') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="nacionalidade"
                                       class="block text-sm font-medium text-gray-700">Nacionalidade</label>
                                <input type="text" wire:model.lazy="nacionalidade" id="nacionalidade"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('nacionalidade') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="cartao_sus" class="block text-sm font-medium text-gray-700">Cartão do
                                    SUS</label>
                                <input type="text" wire:model.lazy="cartao_sus" id="cartao_sus"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('cartao_sus') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Data de
                                    Nascimento <x-asterisk/></label>
                                <input type="date" wire:model.lazy="data_nascimento" id="data_nascimento"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('data_nascimento') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="estado_civil" class="block text-sm font-medium text-gray-700">Estado
                                    Civil <x-asterisk/></label>
                                <select id="estado_civil" wire:model.lazy="estado_civil"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value="" disabled>Selecione...</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                    <option value="União Estável">União Estável</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Viúvo(a)">Viúvo(a)</option>
                                </select>
                                @error('estado_civil') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="genero" class="block text-sm font-medium text-gray-700">Gênero <x-asterisk/></label>
                                <select id="genero" wire:model.lazy="genero"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value="" disabled>Selecione...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                                @error('genero') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
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
                                <label for="peso" class="block text-sm font-medium text-gray-700">Peso</label>
                                <input type="text" wire:model.lazy="peso" id="peso"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('peso') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="altura" class="block text-sm font-medium text-gray-700">Altura</label>
                                <input type="text" wire:model.lazy="altura" id="altura"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('altura') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                        </div>

                    @elseif($paginaAtual === 2)

                       <div>

                           <div class="grid grid-cols-12 gap-6 mt-6">

                               <div class="col-span-12 sm:col-span-12">
                                   <label class="block text-sm font-medium text-gray-700">Foto do paciente</label>
                                   <div class="mt-1 flex items-center">
                                        <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor"
                                                 viewBox="0 0 24 24">
                                                <path
                                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                                            </svg>
                                        </span>
                                       <button type="button"
                                               class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                           Mudar
                                       </button>
                                   </div>

                               </div>

                               <div class="col-span-12 sm:col-span-6">
                                   <label for="nome_mae" class="block text-sm font-medium text-gray-700">Nome da mãe <x-asterisk/></label>
                                   <input type="text" wire:model.lazy="nome_mae" id="nome_mae"
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                   @error('nome_mae') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                               </div>

                               <div class="col-span-12 sm:col-span-6">
                                   <label for="nome_pai" class="block text-sm font-medium text-gray-700">Nome do
                                       pai</label>
                                   <input type="text" wire:model.lazy="nome_pai" id="nome_pai"
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                   @error('nome_pai') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                               </div>


                               <div class="col-span-12 sm:col-span-6">
                                   <label for="nome_mae" class="block text-sm font-medium text-gray-700">Nome do
                                       responsável pelo paciente</label>
                                   <input type="text" id="nome_mae"
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                               </div>

                           </div>

                       </div>

                    @elseif($paginaAtual === 3)

                        <div class="grid grid-cols-12 gap-6 mt-6">

                            <div class="col-span-6 sm:col-span-12">
                                <label for="cep" class="block text-sm font-medium text-gray-700">CEP <x-asterisk/></label>
                                <input type="text" wire:model.lazy="cep" id="cep" autocomplete="email"
                                       class="mt-1 block w-[120px] rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('cep') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-12 sm:col-span-8">
                                <label for="logradouro" class="block text-sm font-medium text-gray-700">Rua <x-asterisk/></label>
                                <input type="text" wire:model.lazy="logradouro" id="logradouro"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('logradouro') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-3 sm:col-span-2">
                                <label for="numero" class="block text-sm font-medium text-gray-700">Número <x-asterisk/></label>
                                <input type="text" wire:model.lazy="numero" id="numero"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('numero') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-9 sm:col-span-7">
                                <label for="bairro" class="block text-sm font-medium text-gray-700">Bairro <x-asterisk/></label>
                                <input type="text" wire:model.lazy="bairro" id="bairro"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('bairro') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label for="complemento"
                                       class="block text-sm font-medium text-gray-700">Complemento</label>
                                <input type="text" wire:model.lazy="complemento" id="complemento"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="cidade" class="block text-sm font-medium text-gray-700">Cidade <x-asterisk/></label>
                                <input type="text" wire:model.lazy="cidade" id="cidade"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('cidade') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="estado" class="block text-sm font-medium text-gray-700">UF <x-asterisk/></label>
                                <input type="text" wire:model.lazy="estado" maxlength="2" id="estado"
                                       class="mt-1 block w-[55px] rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('estado') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
                            </div>

                        </div>
                    @endif

                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <div class="flex space-x-6 justify-end">
                        @if($paginaAtual === 1)
                            <div></div>
                        @else
                            <button type="button" wire:click.prevent="prevStep" wire:key="prev-{{$paginaAtual}}"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Voltar
                            </button>


                        @endif

                        @if($paginaAtual === count($paginas))
                                <button type="submit" wire:key="submit-{{$paginaAtual}}"
                                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Cadastrar
                                </button>
                            @else

                                <button type="button" wire:click.prevent="nextStep" wire:key="next-{{$paginaAtual}}"
                                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Próximo
                                </button>

                        @endif
                    </div>


                </div>
            </div>
        </form>
    </div>
</div>
