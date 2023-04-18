
<style>
  .scrollComement{
      
      ::-webkit-scrollbar-track{
              background: #ffffff6b
          }
      ::-webkit-scrollbar-thumb{
          /* background: linear-gradient(to right,); */
          background: #83838389;
          border-radius:20px;
      }
      ::-webkit-scrollbar-thumb:hover{
          background: #000000da;
          /* background: linear-gradient(to right,#02a1dbda,#a8cf45ce); */
      }
      ::-webkit-scrollbar{
          width: 7px;
          height: 4px;
      }
  }
  .nav .nav-item.active {
    background-color: #007bff;
    color: #fff;
  }
  .bg-blue-500 {
    background-color: #007bff;
  }
  </style>
<nav class="bg-white border-gray-200 fixed z-30" style="width: 100%;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <button data-drawer-target="filtrePr" data-drawer-toggle="filtrePr" aria-controls="filtrePr" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
           <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
     
    <a href="#" class="flex items-center">
        <img src="{{ URL::asset('images/home/admin-roles.png') }}" class="h-8 mr-3" alt="reale State.Logo" />
        <h4 class=" text-2xl font-extrabold text-gray-700 md:text-2xl lg:text-2xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Reale </span>State</h4>
        <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap ">Reale State</span> -->

    </a>
    
<!-- <p class="text-lg font-normal text-gray-500 lg:text-xl ">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p> -->

@if (Route::has('login'))
{{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
    @auth
          <div class="flex items-center md:order-2">
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="{{asset('images/logo/admin-roles.png ')}}" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-800 ">{{Auth::user()->name}}</span>
            <span class="block text-sm  text-gray-400 truncate ">{{Auth::user()->email}}</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">My profile</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">My Stor</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Earnings</a>
            </li>
            <li>
              <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-dropdown-link href="{{ route('logout') }}"
                             @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    @else
        <div class="flex items-center md:order-2">
          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
          @endif
        </div>
    @endauth
{{-- </div> --}}
@endif
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
      <ul class="flex">
        {{-- @dd(request()) --}}
        <li class="mr-6 {{(request()->is('/home')) ? 'active' : '' }}">
          <a href="/home" class="text-gray-500 hover:text-gray-400 {{ (request()->is('/home')) ? 'bg-blue-500' : '' }}">Home</a>
        </li>
        <li class="mr-6 {{(request()->is('about')) ? 'active' : '' }}">
          <a href="/about" class="text-gray-500 hover:text-gray-400 {{(request()->is('about')) ? 'bg-blue-500' : '' }}">About</a>
        </li>
        <li class="mr-6 {{(request()->is('contact')) ? 'active' : '' }}">
          <a href="/contact" class="text-gray-500 hover:text-gray-400 {{(request()->is('contact')) ? 'bg-blue-500' : '' }}">Contact</a>
        </li>
    </ul>
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
        <li>
          <a href="{{route('home')}}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 " aria-current="page">Home</a>
        </li>
        <li>
          <a href="{{route('product')}}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Product</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">About</a>
        </li>
        <li>
          <a href="pages/contactUs.html" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>