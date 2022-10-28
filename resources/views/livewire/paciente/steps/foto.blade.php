<div>
    @include('livewire.paciente.navigation')
    <div>
        <div class="grid grid-cols-12 gap-6 mt-6">
            <div class="col-span-12 sm:col-span-12">
                <label class="block text-sm font-medium text-gray-700">Foto do paciente</label>
                <div class="mt-1 flex items-center">

                    @if(is_object($foto))
                        <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                            <img src="{{ $foto->temporaryUrl() }}" alt="foto paciente temp">
                        </span>
                    @elseif(is_object($uploadUpdate))
                        <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                            <img src="{{ $uploadUpdate->temporaryUrl() }}" alt="foto paciente temp">
                        </span>
                    @else
                        @unless($foto)
                            <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor"
                                 viewBox="0 0 24 24">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </span>


                        @else
                            <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                            <img src="{{ asset("fotos/$foto") }}" alt="foto paciente">
                        </span>
                        @endif
                    @endif


                    <div>
                        @if($foto_edit)
                            <input wire:model="uploadUpdate" type="file" id="foto" class="hidden">
                        @else
                            <input wire:model="foto" type="file" id="foto" class="hidden">
                        @endif

                        <label for="foto"
                               class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Alterar
                        </label>
                        @error('foto') <span
                            class="text-red-700 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end space-x-4 py-6">
        <button type="button" wire:click="previousStep"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Anterior
        </button>

        <button type="button" wire:click="save"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Salvar
        </button>
    </div>
</div>
