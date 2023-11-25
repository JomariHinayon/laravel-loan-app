<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Loan Details') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex p-2 flex-row-reverse">
                <a href="{{route('apply_loan')}}" class="p-2 bg-green-700 text-white">Apply Loan</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-5">
                <h1 class="text-center p-5 ">No Loans.</h1>
            </div>
        </div>
    </div>
</x-app-layout>
