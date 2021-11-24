@extends('layouts.mainAdmin')

@section('container')
<h1 class="text-3xl text-black pb-6">{{ $title }}</h1>
                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                    <a href="/add-room"><span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <i class="fas fa-plus mr-3"></i>
                    <span class="relative {{ ($title == "add-room") ? 'text-white' : '' }}">Add {{ $title }}</span></a>
                </span>
<div class="w-full mt-12">
                    
    <div class="bg-white overflow-auto">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Room
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Price/Night
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Facilites
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Available
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full"
                                    src="{{ $room->foto }}"
                                    alt="" />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $room->tipe }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $room->harga }}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{ $room->fasilitas }}
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <span
                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden
                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">{{ $room->jumlah }}</span>
                        </span>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <ul>
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <a href="/edit-room/{{ $room->id }}">
                                    <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                    <i class="fas fa-edit mr-3"></i>
                                    <span class="relative ">Edit</span>
                                </a>
                            </span>
                            <li>
                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <a onclick="return confirm('Anda Yakin')" href="/delete-room/{{ $room->id }}">
                                        <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <i class="fas fa-trash mr-3"></i>
                                        <span class="relative ">Remove</span>
                                    </a>
                                </span>
                            </li>
                        </ul>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    
</div>
@endsection