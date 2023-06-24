<x-app-layout>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('vehicle.partials.vehicle-list')
                </div>
            </div>
        </div>
        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class=""></div>
                        <div class="">
                            <form class="form-horizontal" method="POST" action="{{ route('vehicle.store') }}">
                                @csrf

                                <div class="mt-3">
                                    <x-input-label for="name" :value="__('Merek Kendaraan')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div class="mt-3">
                                    <x-input-label for="plate_number" :value="__('Nomor Polisi')" />
                                    <x-text-input id="plate_number" class="block mt-1 w-full" type="text"
                                        name="plate_number" :value="old('plate_number')" required autocomplete="plate_number" />
                                    <x-input-error :messages="$errors->get('plate_number')" class="mt-2" />
                                </div>

                                <div class="mt-3">
                                    <x-input-label for="type" :value="__('Tipe Kendaraan')" />
                                    <x-text-input id="type" class="block mt-1 w-full" type="text" name="type"
                                        :value="old('type')" required autocomplete="type" />
                                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                                </div>

                                <div class="mt-3">
                                    <x-input-label for="service_schedule" :value="__('Jam Terbang')" />
                                    <x-text-input id="service_schedule" class="block mt-1 w-full" type="date"
                                        min="0" name="service_schedule" :value="old('service_schedule')" required
                                        autocomplete="service_schedule" />
                                    <x-input-error :messages="$errors->get('service_schedule')" class="mt-2" />
                                </div>

                                <!-- Submit Button -->
                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ml-4">
                                        Tambah Vehicle Baru
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
