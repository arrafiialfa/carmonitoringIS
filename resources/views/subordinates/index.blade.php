<x-app-layout>

    <main class="p-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="mx-auto">
                @include('subordinates.partials.subordinates-list')
            </div>
        </div>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mt-4">
            <div class="mx-auto">
                @include('subordinates.partials.new-subordinates-form')
            </div>
        </div>
    </main>
</x-app-layout>
