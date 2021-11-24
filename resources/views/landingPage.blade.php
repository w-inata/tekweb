@extends('layouts.mainLanding')

@section('Hero')
<div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <p class="uppercase tracking-loose w-full">Find Your Place</p>
        <h1 class="my-4 text-5xl font-bold leading-tight">
          Choose Your Room
        </h1>
        <p class="leading-normal text-2xl mb-8">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, sequi?
        </p>
        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          See More
        </button>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-3/5 py-6 text-center">
        <img class="w-full md:w-4/5 z-50" src="dist/img/kamar2.jpg" />
      </div>
    </div>
  </div>
@endsection

@section('container')
<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
    Room For You
  </h1>
  <div class="w-full mb-4">
    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
  </div>
  <div class="flex flex-wrap">
    <div class="w-5/6 sm:w-1/2 p-6">
      <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
        Standar Room
      </h3>
      <p class="text-gray-600 mb-8">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
        <br />
        <br />

      </p>
    </div>
    <div class="w-full sm:w-1/2 p-6">
      <img src="dist/img/kamar2.jpg" alt="kamar2">
    </div>
  </div>

  <div class="flex flex-wrap flex-col-reverse sm:flex-row">
    <div class="w-full sm:w-1/2 p-6 mt-6">
      <img src="{{ $image }}" alt="kamar">
    </div>
    <div class="w-full sm:w-1/2 p-6 mt-6">
      <div class="align-middle">
        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
          Lux Room
        </h3>
        <p class="text-gray-600 mb-8">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
          <br />
          <br />
          
        </p>
      </div>
    </div>
  </div>
@endsection