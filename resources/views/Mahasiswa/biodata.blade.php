<x-mahasiswa-layout>
  @include('alert')
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
  <div class="border-t border-gray-200 px-6">
    @if(isset($edit))
    <form action="{{ (isset($mahasiswa)) ? route('biodata.update',$mahasiswa) : route('biodata.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @if(isset($mahasiswa)) 
         @method('PUT')
       @else @method('POST')
      @endif
    @endif
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Nama
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          @if(isset($edit))
              <input type="text" name="name" id="name" autocomplete="name" value="{{ (isset($mahasiswa)) ?$mahasiswa->name : old('name')}}" class="@error('name') border-red-600 @enderror block w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg" placeholder="Example@undiksha.ac.id">
              <span class="text-xs text-red-600 dark:text-red-400">
                 @error('name') {{$message}} @enderror
              </span>
          @else
          {{ $mahasiswa->name }}
          @endif
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          NIM
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          @if(isset($edit))
              <input type="text" name="nim" id="nim" autocomplete="nim" value="{{ (isset($mahasiswa)) ?$mahasiswa->nim : old('nim')}}" class="@error('nim') border-red-600 @enderror block w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg" placeholder="Example@undiksha.ac.id">
              <span class="text-xs text-red-600 dark:text-red-400">
                 @error('nim') {{$message}} @enderror
              </span>
          @else
          {{ $mahasiswa->nim }}
          @endif
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Jurusan
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          @if(isset($edit))
          <select id="jurusan_id" name="jurusan_id"  autocomplete="jurusan_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
              @foreach ($jurusan as $j)
                @if($j->id == $mahasiswa->jurusan_id)
                  <option value="{{ $j->id }}" selected>{{ $j->nama }}</option>
                @else
                  <option value="{{ $j->id }}">{{ $j->nama }}</option>
                @endif
              @endforeach
            </select>
          @else
          {{ $mahasiswa->jurusan()->get()->implode('nama') }}
          @endif
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Program Studi
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          @if(isset($edit))
          <select id="prodi_id" name="prodi_id" wire:model='prodi'  autocomplete="prodi_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
              @foreach ($prodi as $p)
                @if($p->id == $mahasiswa->prodi_id)
                  <option value="{{ $p->id }}" selected>{{ $p->nama }}</option>
                @else
                  <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endif
              @endforeach
            </select>
          @else
          {{ $mahasiswa->prodi()->get()->implode('nama') }}
          @endif
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Email
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          @if(isset($edit))
              <input type="text" name="email" id="email" autocomplete="email" value="{{ (isset($mahasiswa)) ?$mahasiswa->email : old('email')}}" class="@error('email') border-red-600 @enderror block w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg" placeholder="Example@undiksha.ac.id">
              <span class="text-xs text-red-600 dark:text-red-400">
                 @error('email') {{$message}} @enderror
              </span>
          @else
          {{ $mahasiswa->email }}
          @endif
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
      @if(!isset($edit))
      <a href="{{ route('biodata.edit', $mahasiswa->id)}}">
                <button
                  class="flex text-right px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Edit Data
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
                </button>
        </a>
        @else
        <a href="">
          <button
          type="submit"
            class="flex text-right px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
          >
            Simpan
          </button>
        </a>
        @endif
      </div>
    </dl>
    </form>
  </div>
</div>
  </div>
</x-mahasiswa-layout>