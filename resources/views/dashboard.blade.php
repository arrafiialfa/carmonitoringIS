<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto my-2 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-2 text-gray-900">
                    <div class="text-right text-sm m-2">
                        @include('booking.partials.new-booking-form')
                    </div>
                    @include('booking.partials.booking-list')
                    <div class="text-right my-4 mx-2">
                        <form method="POST" action="{{ route('export-to-excel') }}">
                            <x-primary-button>Export To Excel</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto my-2 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-2 text-gray-900">
                    <div>Grafik Pemakaian Kendaraan</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
