  @props(['title'])
  <header>
      <div class="px-4 py-2 mx-auto text-2xl text-gray-600 bg-white shadow-sm sm:rounded-lg max-w-7xl ">
          <div class="flex items-center space-x-2">
              {{ $slot }}
              <h1>{{ $title }}</h1>
          </div>
      </div>
  </header>
