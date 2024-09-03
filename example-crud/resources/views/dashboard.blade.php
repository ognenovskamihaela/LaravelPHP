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
                    <a href="{{route('product.index')}}" class="text-blue-500 hover:text-blue-950">Create a Product</a><br>
                    <a href="{{route('employee.index')}}" class="text-red-500 hover:text-red-950">New Employee? Register Them!</a>
                    <a href="{{route('petshop.index')}}" class="text-green-500 hover:text-red-950">View Petshops!</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
