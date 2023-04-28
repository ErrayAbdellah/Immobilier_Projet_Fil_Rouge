<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Page</title>
    <!-- Load Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" integrity="sha512-KNz4JdQUlQnZt8eu3tq3jFhEZgAhGGmYtL+lJzC64XmKjELvQ2tM+RSATdJotK0xGt1fDg+luPxNGJzC9XHbrw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="bg-gray-100">
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <a href="#" class="font-bold text-2xl text-gray-900">Real Estate Co.</a>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <a href="#" class="hover:text-gray-700 text-gray-500">Homes</a>
                <a href="#" class="hover:text-gray-700 text-gray-500">Apartments</a>
                <a href="#" class="hover:text-gray-700 text-gray-500">Commercial</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 transition duration-150 ease-in-out">
                <span class="sr-only">Search</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-5-5m0 0L10 9m-5 5h12"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <button class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!-- Icon when menu is closed. -->
              <!--
                Heroicon name: menu

                Menu open: "hidden", Menu closed: "block"
              -->
              <svg class="block h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4