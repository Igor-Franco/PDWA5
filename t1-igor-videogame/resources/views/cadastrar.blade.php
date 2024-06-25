<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="/cadastrar" method="post">
                        @csrf

                            <!-- Nome do Jogo -->
                            <div>
                                <x-input-label for="name" :value="__('Nome')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Plataforma -->
                            <div>
                                <x-input-label for="platform" :value="__('Plataforma')" />
                                <x-text-input id="platform" class="block mt-1 w-full" type="text" name="platform" :value="old('platform')" required autocomplete="platform" />
                                <x-input-error :messages="$errors->get('platform')" class="mt-2" />
                            </div>

                            <!-- Gênero -->
                            <div>
                                <x-input-label for="genre" :value="__('Gênero')" />
                                <x-text-input id="genre" class="block mt-1 w-full" type="text" name="genre" :value="old('genre')" required autocomplete="genre" />
                                <x-input-error :messages="$errors->get('genre')" class="mt-2" />
                            </div>

                            <!-- Ano de Lançamento -->
                            <div>
                                <x-input-label for="year" :value="__('Ano de Lançamento')" />
                                <x-text-input id="year" class="block mt-1 w-full" type="number" name="year" :value="old('year')" required autocomplete="year" />
                                <x-input-error :messages="$errors->get('year')" class="mt-2" />
                            </div>

                            <!-- Desenvolvedora -->
                            <div>
                                <x-input-label for="developer" :value="__('Desenvolvedora')" />
                                <x-text-input id="developer" class="block mt-1 w-full" type="text" name="developer" :value="old('developer')" required autocomplete="developer" />
                                <x-input-error :messages="$errors->get('developer')" class="mt-2" />
                            </div>

                            <!-- Botão de Envio -->
                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ml-4">
                                    {{ __('Cadastrar') }}
                                </x-primary-button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
