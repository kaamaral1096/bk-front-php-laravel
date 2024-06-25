<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro Caminhao') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('cadastrar-caminhao') }}">
                        @csrf <!-- token de formulário -->
                        <!-- modelo -->
                        <div>
                            <x-input-label for="modelo" :value="__('Modelo do caminhão (até 15 caracteres')" />
                            <x-text-input id="modelo" class="block mt-1 w-full" type="text" name="modelo"
                                :value="old('modelo')" maxlength="50" autofocus required autocomplete="modelo" />
                            <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
                        </div>

                        <!-- eixos -->
                        <div>
                            <x-input-label for="eixos" :value="__('Quantidade de Eixos')" />
                            <x-text-input id="eixos" class="block mt-1 w-full" type="text" name="eixos"
                                :value="old('eixos')" required autocomplete="eixos" />
                            <x-input-error :messages="$errors->get('eixos')" class="mt-2" />
                        </div>

                        <!-- data de fabricação -->
                        <div>
                            <x-input-label for="dataFabricacao" :value="__('Data de Fabricacao')" />
                            <x-text-input id="dataFabricacao" class="block mt-1 w-full" type="text"
                                name="dataFabricacao" :value="old('dataFabricacao')" required autocomplete="dataFabricacao" />
                            <x-input-error :messages="$errors->get('dataFabricacao')" class="mt-2" />
                        </div>


                        <!-- passageiros -->
                        <div class="mt-4">
                            <x-input-label for="passageiros" :value="__('Quantidade de Passageiros')" />
                            <x-text-input id="passageiros" class="block mt-1 w-full" type="number" name="passageiros"
                                :value="old('passageiros')" required autocomplete="passageiros" />
                            <x-input-error :messages="$errors->get('passageiros')" class="mt-2" />
                        </div>

                        <!-- cor -->
                        <div>
                            <x-input-label for="cor" :value="__('Cor do caminhão (até 15 caracteres')" />
                            <x-text-input id="cor" class="block mt-1 w-full" type="text" name="cor"
                                :value="old('cor')" maxlength="50" autofocus required autocomplete="cor" />
                            <x-input-error :messages="$errors->get('cor')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar Caminhao') }}
                            </x-primary-button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
