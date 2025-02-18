<div class="space-y-6">

    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $tier?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="price" :value="__('Price')"/>
        <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" :value="old('price', $tier?->price)" autocomplete="price" placeholder="Price"/>
        <x-input-error class="mt-2" :messages="$errors->get('price')"/>
    </div>

    <div class="flex items-center gap-4 ml-[5px]">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
