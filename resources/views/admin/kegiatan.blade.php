<x-Template-layout>

<div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Kegiatan
            </h2>
            <!-- CTA -->
            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="https://github.com/estevanmaito/windmill-dashboard">
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
                <span>Hi, Wellcome Admin</span>
              </div>
            </div>
            @include('alert')
            <!-- Tambah Kegiatan-->
            <div class="mb-8">
                <button
                  class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  <a href="{{route (('kegiatan.create'))}}">
                  Tambah Kegiatan
                  <span class="ml-2" aria-hidden="true">+</span>
                  </a>
                </button>
              </div>

            <!-- New Table -->
            <h2 class="mb-2 dark:text-gray-200">Daftar Kegiatan</h2>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">#</th>
                      <th class="px-4 py-3">Kegiatan</th>
                      <th class="px-4 py-3">Tempat</th>
                      <th class="px-4 py-3">Tanggal</th>
                      <th class="px-4 py-3">Waktu</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                  @foreach($kegiatan as $index => $k)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-sm">{{ $kegiatan->count() * ($kegiatan->currentPage() - 1) + $loop->iteration}}</td>
                      <td class="px-4 py-3 text-sm">{{$k->nama}}</td>
                      <td class="px-4 py-3 text-sm">{{$k->tempat}}</td>
                      <td class="px-4 py-3 text-sm">{{$k->tanggal}}</td>
                      <td class="px-4 py-3 text-sm">{{$k->time_start}} - {{$k->time_start}}</td>
                      <td class="px-4 py-3 text-sm">Detail</td>
                    </tr>
                  @endforeach
                    
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  Menampilkan {{ $kegiatan->count() }} Dari {{ $kegiatan->total() }} Kegiatan
                </span>
                <span class="col-span-2"></span>
                {{ $kegiatan->links('components.pagination')}}
              </div>
            </div>       
          </div>

</x-Template-layout>