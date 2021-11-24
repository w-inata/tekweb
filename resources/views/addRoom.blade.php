@extends('layouts.mainAdmin')

@section('container')
<div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
    <div class="leading-loose">
        <form action="{{ route('save-room') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
            {{ csrf_field() }}
            <div class="">
                <label class="block text-sm text-gray-600" for="name">Type Room</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tipe" name="tipe" type="text"  placeholder="Type Room" aria-label="Type">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="price">Price/Night</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="harga" name="harga" type="number" placeholder="Price" aria-label="Price">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="amount">Amount</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="jumlah" name="jumlah" type="number"  placeholder="Amount" aria-label="Amount">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="facilites">Facilites</label>
                <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="fasilitas" name="fasilitas" rows="6"  placeholder="Facilites"></textarea>
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="image">Image</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="foto" name="fot" type="file">
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection