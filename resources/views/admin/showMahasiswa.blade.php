<x-Template-layout>

<div class="container px-6 mx-auto grid">
     
<div class="mt-16 bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      {{$title}}
    </h3>
    <div class=" py-2">
        <a href="{{ route('mahasiswa.edit', $mahasiswa->id)}}">
                 <button
                  class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
                >
                  Edit Mahasiswa
                </button>
        </a>

        <a href="{{ route('mahasiswa.destroy', $mahasiswa->id)}}">
                 <button
                  class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                >
                  Hapus Mahasiswa
                </button>
        </a>
      </div>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Nama
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{$mahasiswa->nama}}
        </dd>
      </div>
      <div class="bg-white px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          NIM
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{$mahasiswa->nim}}
        </dd>
      </div>
      <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Jurusan
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{ $mahasiswa->jurusan()->get()->implode('nama')}}
        </dd>
      </div>
      <div class="bg-white px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Program Studi
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{ $mahasiswa->prodi()->get()->implode('nama')}}
        </dd>
      </div>
      <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Email
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{$mahasiswa->email}}
        </dd>
      </div>
    
      <div class="px-10 py-5">
        <a href="{{ route('mahasiswa.index')}}">
                <button
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  Kembali
                </button>
        </a>
      </div>
      
  </div>
</div>

</div>

</x-Template-layout>