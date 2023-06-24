<section>
    <form class="form-horizontal" method="POST" action="{{ route('driver.store') }}">
        @csrf
        <!-- Nama Pemesan -->
        <div class="mt-3">
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Age -->
        <div class="mt-3">
            <x-input-label for="age" :value="__('Umur')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" min="0" max="100"
                name="age" :value="old('age')" required autocomplete="age" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>
        <!-- Sex -->
        <div class="mt-3">
            <x-input-label for="sex" :value="__('Jenis Kelamin')" />
            <div class="flex justify-between gap-2 items-center">
                <select name="sex" :value="old('sex')"
                    class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full'>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="male">Laki - Laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </div>
            <x-input-error :messages="$errors->get('vehicle')" class="mt-2" />
        </div>
        <!-- Driving Hours/jam terbang -->
        <div class="mt-3">
            <x-input-label for="driving_hours" :value="__('Jam Terbang')" />
            <x-text-input id="driving_hours" class="block mt-1 w-full" type="number" min="0"
                name="driving_hours" :value="old('driving_hours')" required autocomplete="driving_hours" />
            <x-input-error :messages="$errors->get('driving_hours')" class="mt-2" />
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                Tambah Driver Baru
            </x-primary-button>
        </div>
    </form>
</section>
