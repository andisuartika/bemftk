@php
    $time = date("H:i:s");
    $tanggal= date('d-M-Y');
    $date = date('Y-m-d');
@endphp
<div>
  <div class="flex justify-between my-2">
    <h2 class="mb-2 dark:text-gray-200">Daftar Absensi, {{ $tanggal }}</h2>
  </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-200 dark:text-gray-400 dark:bg-gray-800"
              >
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">Kegiatan</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Waktu</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

            @foreach($absensi as $index => $a)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">{{ $absensi->firstitem() + $index}}</td>
                <td class="px-4 py-3 text-sm">{{ $a->kegiatan()->get()->implode('nama')}}</td>
                <td class="px-4 py-3 text-sm">{{ $a->kegiatan()->get()->implode('tanggal')}}</td>
                <td class="px-4 py-3 text-sm">{{$a->time_start}} - {{$a->time_end}}</td>
                <td class="px-4 py-3 text-sm">
                  {{-- cek absensi --}}
                  @php
                      $absen = DB::table('pointskps')->where('nim', '=', $nim)->where('id_absensi','=',$a->id)->count();
                  @endphp

                  @if($a->kegiatan()->get()->implode('tanggal') == $date)
                      @if($a->time_end < $time )
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100"
                      >
                        Berakhir
                      </span>
                      @elseif($a->time_start > $time)
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-100"
                      >
                        Belum dimulai
                      </span>
                        @else
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Berlangsung
                      </span>
                       @endif
                  @elseif($a->kegiatan()->get()->implode('tanggal') > $date)
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-100"
                      >
                        Belum dimulai
                      </span>
                  @else
                      <span
                      class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                        Berakhir
                      </span>
                  @endif
                      
                </td>
                {{-- button --}}
                <td class="px-4 py-3 text-sm flex">
                  @if($a->kegiatan()->get()->implode('tanggal') == $date)
                      @if($a->time_end < $time )
                      {{-- berakhir hari itu --}}
                        <button
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600focus:outline-none focus:shadow-outline-green cursor-default">
                          <span>Berhasil</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                          </svg>
                        </button>
                      @elseif($a->time_start > $time)
                          {{-- belum mulai hari itu --}}
                          <button
                          class="flex items-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg opacity-60 cursor-not-allowed focus:outline-none">
                            <span>Absensi</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                          </button>
                      @else
                          @if($absen == 0)
                            {{-- sedang berlangsung --}}
                            <button
                            wire:click="store({{ $a->id }})"
                            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                              <span>Absensi</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                              </svg>
                            </button>
                          @else
                            <button
                            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600focus:outline-none focus:shadow-outline-green cursor-default">
                              <span>Berhasil</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                              </svg>
                            </button>
                          @endif
                       @endif
                  @elseif($a->kegiatan()->get()->implode('tanggal') > $date)  
                  {{-- Belum dimulai --}}
                      <button
                      class="flex items-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg opacity-60 cursor-not-allowed focus:outline-none">
                        <span>Absensi</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                      </button>
                  @else
                  {{-- Berakhir --}}

                  {{-- apakah sudah absen atau belum --}}
                  @if($absen == 1)
                  {{-- sudah absen --}}
                    <button
                    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600focus:outline-none focus:shadow-outline-green cursor-default">
                      <span>Berhasil</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                      </svg>
                    </button>
                    @else
                    {{-- tidak absen --}}
                    <button
                    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600focus:outline-none focus:shadow-outline-red cursor-default">
                      <span>Tidak Absensi</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </button>
                    @endif
                  @endif 
                </td>
              </tr>
            @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
</div>
<script>
  window.addEventListener('swal:modal', event => {
    swal({
      title: "Success!",
      text: "Absensi Berhasil!",
      icon: "success",
    });
  });


  $('.absensi-confirm').on('click', function (event) {
      event.preventDefault();
      const url = $(this).attr('href');
      swal({
          title: 'Yakin melakukan Absensi?',
          text: 'Absensi akan dimasukkan ke point SKP!',
          icon: 'warning',
          buttons: true,
          dangerMode: true,
      }).then((willDelete) => {
          if (willDelete) {
            @this.call('store');
          } else {
            swal("Absensi Gagal!");
          }
      });
  });
</script>
