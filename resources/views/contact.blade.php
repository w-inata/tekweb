@extends('layouts.mainLanding')

@section('Hero')
<div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">

    </div>
  </div>
@endsection

@section('container')
<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
    Contact Us
</h1>
<div class="w-full mb-4">
    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
</div>
<div class="flex flex-wrap">
    <div class="flex-1">
        <p class="uppercase text-gray-500 md:mb-6">Social</p>
        <ul class="list-reset mb-6">
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
          </li>
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
          </li>
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
          </li>
          <li class="mt-2 inline-block mr-2 md:block md:mr-0">
              <p class="text-gray-800">Email: <a href="#" class="no-underline underline text-gray-800 text-pink-500">HotelLorem@gmail.com</a></p>
            
          </li>
        </ul>
      </div>
</div>
@endsection