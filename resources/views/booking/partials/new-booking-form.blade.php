<section>
    <x-secondary-button class="shadow-md" x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-new-booking')">
        {{ __('Buat Pemesanan Baru') }}
    </x-secondary-button>
    <x-modal name="create-new-booking" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="container p-6">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Klik plus untuk menambah pilihan baru</div>
                        <div class="panel-body text-left">
                            <form class="form-horizontal" method="POST" action="{{ route('booking.store') }}">
                                @csrf
                                <!-- Select Vehicle -->
                                <div class="mt-3">
                                    <x-input-label for="vehicle" :value="__('Pilih Kendaraan')" />
                                    <div class="flex justify-between gap-2 items-center">
                                        <select name="vehicle" :value="old('vehicle')"
                                            class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full'>
                                            <option value="">Pilih Kendaraan</option>
                                            @foreach ($vehicles as $vehicle)
                                                <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-blue-700 text-2xl font-bold cursor-pointer">
                                            +
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('vehicle')" class="mt-2" />
                                </div>

                                <!-- Select Driver -->
                                <div class="mt-3">
                                    <div class="grow">
                                        <x-input-label for="driver" :value="__('Pilih Supir')" />
                                        <div class="flex justify-between gap-2 items-center">
                                            <select name="driver" :value="old('driver')"
                                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full'>
                                                <option value="">Pilih Supir</option>
                                                @foreach ($drivers as $driver)
                                                    <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-blue-700 text-2xl font-bold cursor-pointer">
                                                +
                                            </div>
                                        </div>
                                        <x-input-error :messages="$errors->get('driver')" class="mt-2" />
                                    </div>

                                </div>

                                <!-- Nama Pemesan -->
                                <div class="mt-3">
                                    <x-input-label for="bookedBy" :value="__('Masukkan Nama Pemesan')" />
                                    <x-text-input id="bookedBy" class="block mt-1 w-full" type="text"
                                        name="bookedBy" :value="old('bookedBy')" required autocomplete="bookedBy" />
                                    <x-input-error :messages="$errors->get('bookedBy')" class="mt-2" />
                                </div>

                                <!-- Tanngal Pemakaian -->
                                <div class="mt-3">
                                    <x-input-label for="scheduledDate" :value="__('Tanggal Pemakaian')" />
                                    <x-text-input id="scheduledDate" class="block mt-1 w-full" type="date"
                                        name="scheduledDate" :value="old('scheduledDate')" required autocomplete="scheduledDate" />
                                    <x-input-error :messages="$errors->get('scheduledDate')" class="mt-2" />
                                </div>

                                <!-- Tanngal Pengembalian -->
                                <div class="mt-3">
                                    <x-input-label for="returnedDate" :value="__('Tanggal Pengembalian')" />
                                    <x-text-input id="returnedDate" class="block mt-1 w-full" type="date"
                                        name="returnedDate" :value="old('returnedDate')" required autocomplete="returnedDate" />
                                    <x-input-error :messages="$errors->get('returnedDate')" class="mt-2" />
                                </div>

                                <!-- Submit Button -->
                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ml-4">
                                        Buat Pemesanan Baru
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-modal>
</section>
