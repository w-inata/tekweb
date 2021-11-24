@extends('layouts.mainAdmin')

@section('container')
<h1 class="text-3xl text-black pb-6">{{ $title }}</h1>
                
<div class="w-full mt-12">
<div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
    <div class="leading-loose">
        <form action="/update-room/{{ $room->id }}" method="POST" class="p-10 bg-white rounded shadow-xl">
            {{ csrf_field() }}
            <div class="">
                <label class="block text-sm text-gray-600" for="name">Type Room</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="type" name="type" type="text" value="{{ $room->tipe }}" required="" placeholder="Type Room" aria-label="Type">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="price">Price/Night</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="price" name="price" type="number" value="{{ $room->harga }}" required="" placeholder="Price" aria-label="Price">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="amount">Amount</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="amount" name="amount" type="number" value="{{ $room->jumlah }}" required="" placeholder="Amount" aria-label="Amount">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="facilites">Facilites</label>
                <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="facilites" name="facilites" rows="6"  required="" placeholder="Facilites" aria-label="Email">{{ $room->fasilitas }}</textarea>
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="image">Image</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file" value="" required="" >
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection