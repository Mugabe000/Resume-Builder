@extends('layouts.app')

@section('content')
    <div class="p-20 flex-col  justify-center container text-white">
        <div class="text-left  w-9/12 mr-auto ">
            <h2 class="font-bold">Edit User Detail: </h2>
        </div>

        <form class="flex-col w-11/12 ml-auto mr-auto justify-center" action="{{ route('user_detail.update', $userDetail) }}"
            method="POST">
            @csrf
            @method('PUT')

            <label for="fullname" class=" block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">
                FullName:
                <input type="text" placeholder="FullName" name="fullname" id="fullname"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5"
                    value="{{ $userDetail->fullname }}">
            </label>

            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Email:
                <input type="email" placeholder="Email" name="email" id="email"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5" value="{{ $userDetail->email }}">
            </label>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Phone Number:
                <input type="text" placeholder="Phone" name="phone" id="phone"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5" value="{{ $userDetail->phone }}">
            </label>
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Address:
                <input type="text" placeholder="Address" name="address" id="address"
                    class="bg-gray-100  text-gray-900 text-sm rounded block w-1/2 p-2.5" value="{{ $userDetail->address }}">
            </label>


            <button type="submit"
                class="px-12 py-2 mt-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 w-1/2">Save</button>
        </form>
    </div>
@endsection
