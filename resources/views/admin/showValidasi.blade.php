<x-Template-layout>

    <div class="container px-6 mx-auto grid">
        <div class="mt-16 bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
              
            <div class="flex justify-between flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4">
                <div class="">
                    <h2 class="text-lg leading-6 text-gray-900 font-semibold">
                       {{$title}}
                    </h2>
                </div>
          
                <div class="flex">
                    <!-- Edit -->
                  <div class="px-3">
                  <a href="{{ route('validasi.edit', $validasi->id)}}">
                    <button
                      class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
                    >
                      <span class="mr-2">Valid</span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                          width="20" height="20"
                          viewBox="0 0 172 172"
                          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,14.33333c-39.517,0 -71.66667,32.14967 -71.66667,71.66667c0,39.517 32.14967,71.66667 71.66667,71.66667c39.517,0 71.66667,-32.14967 71.66667,-71.66667c0,-8.06967 -1.40478,-15.80821 -3.87728,-23.05371l-11.60384,11.60384c0.7525,3.698 1.14778,7.5297 1.14778,11.44987c0,31.61217 -25.72117,57.33333 -57.33333,57.33333c-31.61217,0 -57.33333,-25.72117 -57.33333,-57.33333c0,-31.61217 25.72117,-57.33333 57.33333,-57.33333c11.70317,0 22.58877,3.53955 31.67611,9.58822l10.26009,-10.26009c-11.81067,-8.557 -26.27703,-13.66146 -41.93619,-13.66146zM152.59961,23.59961l-73.76628,73.76628l-23.59961,-23.59961l-10.13411,10.13411l33.73372,33.73372l83.90039,-83.90039z"></path></g></g>
                      </svg>
                    </button>
                  </a>
                  </div>
          
                  <!-- Invalid -->
                  <div>
                <form action="{{ route('validasi.destroy', $validasi->id)}}" method="POST">
                        @csrf
                        @method('delete')
                  <button type="submit"
                  class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red "
                >
                  <span class="mr-2">Tidak Valid</span>
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      width="20" height="20"
                      viewBox="0 0 172 172"
                      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,14.33333c-39.63167,0 -71.66667,32.035 -71.66667,71.66667c0,39.63167 32.035,71.66667 71.66667,71.66667c39.63167,0 71.66667,-32.035 71.66667,-71.66667c0,-39.63167 -32.035,-71.66667 -71.66667,-71.66667zM121.83333,111.72833l-10.105,10.105l-25.72833,-25.72833l-25.72833,25.72833l-10.105,-10.105l25.72833,-25.72833l-25.72833,-25.72833l10.105,-10.105l25.72833,25.72833l25.72833,-25.72833l10.105,10.105l-25.72833,25.72833z"></path></g></g>
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
                    Nama Mahasiswa
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{$mahasiswa->name}}
                  </dd>
                </div>
                <div class="bg-white px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    NIM Mahasiswa
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$mahasiswa->nim}}
                  </dd>
                </div>
                <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Jenis Prestasi
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $validasi->jenis_prestasi}}
                  </dd>
                </div>
                <div class="bg-white px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Nama Prestasi
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $validasi->nama_prestasi}}
                  </dd>
                </div>
                <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Keterangan
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      {{ $validasi->keterangan}}
                  </dd>
                </div>
                <div class="bg-white px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Tahun / Semester
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $validasi->tahun}} / {{ $validasi->tahun}}
                  </dd>
                </div>
                <div class="bg-gray-50 px-10 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                  <dt class="text-sm font-medium text-gray-500">
                    Berkas Piagam / SK Kepanitiaan / SK Kepengurusan
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                      <a  href="{{ asset('storage/files/validasi/'. $validasi->file)}}">
                      <button
                        class="px-3 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                      >
                        Download Berkas
                      </button>
                      </a>
                  </dd>
              </div>
              
                <div class="px-10 py-5">
                  <a href="{{ route('validasi.index')}}">
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
    