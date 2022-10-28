<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Pacientes
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">


                <!-- component -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6">
                    <div class="text-left mb-6 sm:mb-0 sm:mr-20">
                        <h2 class="text-gray-600 font-semibold">Pacientes</h2>
                        <span class="text-xs">todos os pacientes</span>
                    </div>
                    <div class="flex flex-col flex-col-reverse sm:flex-row sm:items-center">
                        <div class="flex bg-gray-50 items-center p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <input class="bg-gray-50 sm:w-[15rem] md:w-[25rem] outline-none ml-1 block border-none focus:ring-0" type="text"
                                   wire:model="searching" id="searching" placeholder="procurar...">
                        </div>
                        <div class="lg:ml-40 sm:ml-10 mb-6 sm:mb-0">
                            <a href="{{ route('paciente.create') }}"
                               class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Cadastrar</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Nome do paciente
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Telefone
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Cartão SUS
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Última atualização
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($pacientes as $paciente)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    @if($paciente->foto)
                                                        <img class="w-full h-full rounded-full"
                                                             src="{{ $paciente->fotoUrl() }}"
                                                             alt=""/>
                                                    @else
                                                        <span
                                                            class="inline-block w-full overflow-hidden rounded-full bg-gray-100">
                                                            <svg class="h-full w-full text-gray-300" fill="currentColor"
                                                                 viewBox="0 0 24 24">
                                                                <path
                                                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                                                            </svg>
                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $paciente->nomeCompleto }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $paciente->telefone }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $paciente->cartao_sus }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $paciente->updated_at->diffForHumans() }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                                            <div class="flex items-center space-x-6 justify-end">
                                                <a href="{{ route('paciente.edit', $paciente) }}"
                                                   class="text-white bg-yellow-600 px-3 py-2 rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                                    </svg>
                                                </a>

                                                <button wire:click.prevent="confirmDeletePaciente({{$paciente->id}})"
                                                   class="text-white bg-red-600 px-3 py-2 rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                                    </svg>
                                                </button>
                                            </div>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-500 p-8 text-center tracking-wide">Nenhum registro
                                                encontrado...</p>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>


                            <div class="p-6 hidden sm:block">
                                {{ $pacientes->links('vendor.livewire.tailwind') }}
                            </div>



                        </div>
                    </div>

                    <div class="p-3 sm:hidden">
                        {{ $pacientes->links('vendor.livewire.simple-tailwind') }}
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Delete Paciente Modal -->
    <form wire:submit.prevent="delete">
        <x-modal.confirmation wire:model.defer="showConfirmModal">
            <x-slot name="title">Remover Cadastro</x-slot>
            <x-slot name="content">
                <div class="py-2 text-cool-gray-700">
                    Tem certeza de que deseja remover este paciente? Todos os dados serão removidos permanentemente. Essa ação não pode ser desfeita
                </div>
            </x-slot>

            <x-slot name="footer">
                <div class="flex justify-end space-x-6">
                    <button wire:click.prevent="$set('showConfirmModal', false)" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Não remover</button>
                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Remover paciente</button>
                </div>
            </x-slot>
        </x-modal.confirmation>
    </form>

</div>
