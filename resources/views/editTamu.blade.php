@extends('layouts.mainAdmin')

@section('container')
<h1 class="text-3xl text-black pb-6">{{ $title }}</h1>
                
<div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center bg-white text-black h-900px">
    <section class="w-full lg:w-4/5">
        <div id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

            <form action="/update-tamu/{{ $tamu->id }}" method="POST">
                {{ csrf_field() }}
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="nama">
                            Name
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="form-input block w-full focus:bg-gey" id="nama" type="text" name="nama" placeholder="Your Name" required="" value="{{ $tamu->nama }}">
                        {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="email">
                            Email
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input required="" class="form-input block w-full focus:bg-gey" id="email" type="text" name="email" placeholder="Your Email" value="{{ $tamu->email }}">
                        {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="telp">
                            Phone Number
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input required="" class="form-input block w-full focus:bg-gey" id="telp" type="number" name="telp" placeholder="Your Number" value="{{ $tamu->telp }}">
                        {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="tipe_kamar">
                            Room Type
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select  class="form-select block w-full focus:bg-white" id="tipe_kamar" name="tipe_kamar" >
                            
                            @foreach ($rooms as $room)
                                
                                <option {{ ($tamu->tipe_kamar == $room->tipe)? 'selected': '' }} value="{{ $room->tipe }}">{{ $room->tipe }}</option>
                            @endforeach
                            
                            
                            
                        </select>

                        {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="person">
                            Person
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select class="form-select block w-full focus:bg-white" id="person" name="person" >
                            
                            <option {{ ($tamu->person == 1)? 'selected': '' }} value=1>1 Person</option>
                            <option {{ ($tamu->person == 2)? 'selected': '' }} value=2>2 Person</option>
                            <option {{ ($tamu->person == 3)? 'selected': '' }} value=3>3 Person</option>
                            
                        </select>

                        {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="tgl_datang">
                            Arrival Date
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input required="" class="form-input block w-full focus:bg-gey" id="tgl_datang" type="date" name="tgl_datang" placeholder="Your Arrival" value="{{ $tamu->datang }}">
                        {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="tgl_pergi">
                            Departure Date
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input required="" class="form-input block w-full focus:bg-gey" id="tgl_pergi" type="date" name="tgl_pergi" placeholder="Your Arrival" value="{{ $tamu->pergi }}">
                        {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="pesan">
                            Message
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <textarea class="form-textarea block w-full focus:bg-white" id="pesan" name="pesan" placeholder="Type Your Message" rows="8">{{ $tamu->pesan }}</textarea>
                        {{-- <p class="py-2 text-sm text-gray-600">add notes about populating the field</p> --}}
                    </div>
                </div>

                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-yellow-700 shadow-outline hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Save
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <!--/Card-->
    </section>
</div>
@endsection