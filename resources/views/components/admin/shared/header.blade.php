  @props(['title'])
  <header>
      <div class="px-4 py-2 mx-auto text-3xl font-bold text-gray-600 bg-white rounded-lg max-w-7xl flex justify-between">
          <div class="flex items-center space-x-2">
              {{ $slot }}
              <h1>{{ $title }}</h1>
          </div>
          <div class="flex items-center space-x-2">
              {{ $actions }}
          </div>
      </div>
  </header>
