<x-mahasiswa-layout>
  <div class="continer px-10 py-10">
  <div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="flex justify-start px-10 py-10 sm:px-6">
    <div class="mr-5">
        <!-- user profile -->
      @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <img class="h-20 w-20 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
      @else
          <span class="inline-flex rounded-md">
                  {{ Auth::user()->name }}
                  <svg class="ml-2 -mr-0.5 h-20 w-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
              </button>
          </span>
      @endif
    </div>
    <div class="">
      <h1 class="font-bold text-2xl">{{ Auth::user()->name }}</h1>
      <p class="font-thin">Manajemen Informatika</p>
      <p class="font-thin">Teknik Informatika</p>
    </div>

  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Nama
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          Putu Andi Suartika
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Jurusan
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          Teknik Informatika
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Program Studi
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          Manajemen Informatika
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Email
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          andi.suartika@undiksha.ac.id
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          About
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptas excepturi quae cumque laboriosam sequi nobis libero quidem perferendis nisi, omnis architecto impedit repudiandae nostrum?
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
      <a href="{{ route('biodata.create')}}">
                <button
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Ubah
                </button>
        </a>
      </div>
    </dl>
  </div>
</div>
  </div>
</x-mahasiswa-layout>