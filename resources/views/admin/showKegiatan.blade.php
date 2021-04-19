<x-Template-layout>

<div class="container px-6 mx-auto grid">    
<div class="mt-16 bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 sm:px-6">
    
    <div class="flex justify-between flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4">
      <div class="">
          <h2 class="text-lg leading-6 text-gray-900 font-semibold">
             {{$title}}
          </h2>
      </div>

      <div class="flex">
          <!-- Edit -->
        <div class="px-3">
        <a href="{{ route('kegiatan.edit', $kegiatan->id)}}">
          <button
            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
          >
            <span>Edit</span>
            
            <svg
              class="w-4 h-4 ml-2 -mr-1"
              fill="currentColor"
              aria-hidden="true"
              viewBox="0 0 20 20"
            >        
              <path
                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </a>
        </div>

        <!-- Hapus -->
        <div>
        <form action="{{ route('kegiatan.destroy', $kegiatan->id)}}" method="POST">
        @csrf
        @method('delete')
          <button type="submit"
            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
            onclick="return confirm('Apakah Yakin?') || event.stopImmediatePropagation()" 
          >
            <span>Hapus</span>
            <svg
              class="w-4 h-4 ml-2 -mr-1"
              fill="currentColor"
              aria-hidden="true"
              viewBox="0 0 20 20"
            >
              <path
                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </form>
        </div>
      </div>
        
    </div>
    
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Nama Kegiatan
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{$kegiatan->nama}}
        </dd>
      </div>
      <div class="bg-white px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Tempat
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{$kegiatan->tempat}}
        </dd>
      </div>
      <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Tanggal
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{ $kegiatan->tanggal}}
        </dd>
      </div>
      <div class="px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Mulai
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{ $kegiatan->time_start}}
        </dd>
      </div>
      <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Selesai
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{ $kegiatan->time_start}}
        </dd>
      </div>
      <div class=" px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Keterangan
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{$kegiatan->keterangan}}
        </dd>
      </div>
      <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Point SKP
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{ $kegiatan->point_skp}}
        </dd>
      </div>
    
      <div class="px-10 py-5">
        <a href="{{ route('kegiatan.index')}}">
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