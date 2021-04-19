<x-Template-layout>

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Mahasiswa
            </h2>
            <!-- CTA -->
            <div
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span>Hi, Welcome Admin</span>
              </div>
            </div>
            @include('alert')
            <!-- Tambah Mahasiswa-->
            <div class="mb-8">
            
                <button
                  class="flex items-center justify-between px-4 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                 
                >
                  <a href="{{route (('mahasiswa.create'))}}">
                    Tambah Mahasiswa
                    <span class="ml-2" aria-hidden="true">+</span>
                  </a>
                </button>
                
              </div>

            <!-- New Table -->
            <div class="flex justify-between mb-2">
            
              <h2 class="mb-2 dark:text-gray-200">Daftar Mahasiswa</h2>
              <div>
                <!-- Search input -->
                <form method="GET" action="{{ route('mahasiswa.index')}}">
                <div class="flex justify-center flex-1">
                  <div
                    class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
                  >
                    <div class="absolute inset-y-0 flex items-center pl-2">
                      <svg
                        class="w-4 h-4"
                        aria-hidden="true"
                        fill="#201F9D"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </div>
                    <input
                      name="search"
                      class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                      type="text"
                      placeholder="Search..."
                      aria-label="Search"
                    />
                  </div>
                </div>
                </form>
              </div>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">#</th>
                      <th class="px-4 py-3">Nama</th>
                      <th class="px-4 py-3">Jurusan</th>
                      <th class="px-4 py-3">Prodi</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    @foreach($mahasiswa as $index => $mhs)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-sm">{{ $mahasiswa->firstitem() + $index}}</td>
                      <td class="px-4 py-3 text-md">{{$mhs->name}}</td>
                      <td class="px-4 py-3 text-sm">{{ $mhs->jurusan()->get()->implode('nama')}}</td>
                      <td class="px-4 py-3 text-sm">{{ $mhs->prodi()->get()->implode('nama')}}</td>
                      <td class="px-4 py-3 text-sm"><a href="{{ route('mahasiswa.show', $mhs)}}" class="text-indigo-600 hover:text-indigo-900">Detail</a></td>
                    </tr>
                    @endforeach                 
                  </tbody>
                </table>
                
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  Menampilkan {{ $mahasiswa->count() }} Dari {{ $mahasiswa->total() }} Mahasiswa
                </span>
                <span class="col-span-2"></span>
                {{ $mahasiswa->links('components.pagination')}}
              </div>
            </div>       
          </div>

</x-Template-layout>