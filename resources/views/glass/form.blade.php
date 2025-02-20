<div class="space-y-6">

    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $glass?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="quality" :value="__('Quality')"/>
        <x-text-input id="quality" name="quality" type="text" class="mt-1 block w-full" :value="old('quality', $glass?->quality)" autocomplete="quality" placeholder="Quality"/>
        <x-input-error class="mt-2" :messages="$errors->get('quality')"/>
    </div>
    <div>
        <x-input-label for="experience" :value="__('Experience')"/>
        <x-text-input id="experience" name="experience" type="text" class="mt-1 block w-full" :value="old('experience', $glass?->experience)" autocomplete="experience" placeholder="Experience"/>
        <x-input-error class="mt-2" :messages="$errors->get('experience')"/>
    </div>
    <div>
        {{-- <x-text-input id="tiers_id" name="tiers_id" type="text" class="mt-1 block w-full" :value="old('tiers_id', $glass?->tiers_id)" autocomplete="tiers_id" placeholder="Tiers Id"/> --}}
       <div x-data="{ open: false, selectedTier: '{{ old('tiers_id', $glass?->tiers_id) }}' }" class="relative">
        <x-input-label for="tiers_id" :value="__('Tiers')" />

        {{-- Botón que abre el dropdown --}}
        <button type="button" @click="open = ! open"
            class="w-full px-4 py-2 border border-gray-100 rounded-md text-sm font-medium text-gray-500 dark:text-gray-100 bg-white dark:bg-gray-800 focus:outline-none flex justify-between items-center">
            <span x-text="selectedTier ? {{ json_encode($tiers) }}[selectedTier] : 'Seleccione un nivel'"></span>
            <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        {{-- Dropdown con opciones --}}
        <div x-show="open" @click.away="open = false"
            x-transition
            class="absolute mt-2 w-full bg-white dark:bg-gray-800 border border-gray-300 rounded-md shadow-lg z-50">
            <div class="py-1">
                @foreach($tiers as $id => $name)
                    <a href="#" @click.prevent="selectedTier = '{{ $id }}'; open = false"
                       class="block px-4 py-2 text-sm text-gray-500 dark:text-gray-100  ">
                        {{ $name }}
                    </a>
                @endforeach
            </div>
        </div>
        {{ Form::hidden('tiers_id', old('tiers_id', $glass?->tiers_id), ['x-model' => 'selectedTier']) }}
        {{-- {{Form::select('tiers_id', $tiers, $glass->tiers_id, ['class' => 'mt-1 block w-full', 'placeholder' => 'Tiers Id'])}} --}}

        <x-input-error class="mt-2" :messages="$errors->get('tiers_id')"/>
    </div>

    <div class="flex items-center gap-4 mt-4 ml-[5px]">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
