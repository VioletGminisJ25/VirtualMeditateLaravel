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
        <x-input-label for="tiers_id" :value="__('Tiers Id')"/>
        <x-text-input id="tiers_id" name="tiers_id" type="text" class="mt-1 block w-full" :value="old('tiers_id', $glass?->tiers_id)" autocomplete="tiers_id" placeholder="Tiers Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('tiers_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>