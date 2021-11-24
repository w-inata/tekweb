@extends('layouts.mainLanding')

@section('Hero')
<div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
     
    </div>
  </div>
@endsection

@section('container')
<div class="container max-w-5xl mx-auto m-8">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
      Room & Facilities
    </h1>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div class="flex flex-wrap">
      <div class="w-5/6 sm:w-1/2 p-6">
        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
          Deluxe Room
        </h3>
        <p class="text-gray-600 mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
          <br />
          <br />
          Facilites
            <li class="text-gray-600 mb-4">
                enclosed bathroom with shower, air conditioner, hot & cold water, King size bed, minibar, balcony, safety box, free Wi-Fi, coffee kettle
            </li>
        </p>
      </div>
      <div class="w-full sm:w-1/2 p-6">
        <img src="dist/img/kamar2.jpg" alt="freepick.com">
      </div>
    </div>

    <div class="flex flex-wrap flex-col-reverse sm:flex-row">
      <div class="w-full sm:w-1/2 p-6 mt-6">
        <img src="dist/img/kamar1.jpg" alt="freepick.com">
      </div>
      <div class="w-full sm:w-1/2 p-6 mt-6">
        <div class="align-middle">
          <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
            Standar Room
          </h3>
          <p class="text-gray-600 mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
            <br />
            <br />
            Facilities
            <li class="text-gray-600 mb-4">
                enclosed bathroom with shower, fan, hot & cold water, King size bed, minibar, balcony, safety box, free Wi-Fi, coffee kettle.
            </li>
            
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection