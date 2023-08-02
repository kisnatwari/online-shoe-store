@extends('layouts.app')

@section('content')
    @include('layouts.message')

    <div class="container">
        <h2 class="font-bold text-4xl text-blue-700">Dashboard</h2>
        <hr class="h-1 bg-blue-200">

        <div class="mt-8 grid grid-cols-2 gap-8">
            <div class="p-6 rounded-lg bg-indigo-500 text-white">
                <p class="font-bold text-lg">Total Contacts</p>
                <p class="font-bold text-4xl">{{ $contacts }}</p>
            </div>

            <div class="p-6 rounded-lg bg-purple-500 text-white">
                <p class="font-bold text-lg">Total Categories</p>
                <p class="font-bold text-4xl">{{ $categories }}</p>
            </div>

            <div class="p-6 rounded-lg bg-pink-500 text-white">
                <p class="font-bold text-lg">Pending Orders</p>
                <p class="font-bold text-4xl">{{ $orders }}</p>
            </div>

            <div class="p-6 rounded-lg bg-teal-500 text-white">
                <p class="font-bold text-lg">Total Users</p>
                <p class="font-bold text-4xl">{{ $users }}</p>
            </div>
        </div>
    </div>
@endsection
