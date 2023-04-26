
@extends('Home.index')

@section('content')


<div
class="max-w-screen-xl mt-16 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
<div class="flex flex-col justify-between">
  <div>
    <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Lets talk about everything!</h2>
    <div class="text-gray-700 mt-8">
      Hate forms? Send us an <span class="underline">email</span> instead.
    </div>
  </div>
 <img src="{{ asset('images/home/contact.png') }}" class="mb-16" width="90%" alt="">
</div>
<form action="{{route('messageSend')}}" method="POST" class="" data-parsley-validate="">
    @csrf
  <div>
    <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
      type="text" placeholder="" name="name"  required="">
  </div>
  <div class="mt-8">
    <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
      type="text" name="email" required data-parsley-validate>
  </div>
  <div class="mt-8">
    <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
    <textarea
      class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" name="message"></textarea>
  </div>
  <div class="mt-8">
    <button
      class="uppercase text-sm font-bold tracking-wide bg-blue-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline hover:bg-blue-400">
      Send Message
    </button>
  </div>
</form>
</div>

@endsection