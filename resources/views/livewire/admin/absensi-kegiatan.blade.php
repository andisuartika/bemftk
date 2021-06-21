@php
    $time = date("H:i:s");
    $tanggal= date('d-M-Y');
    $date = date('Y-m-d');
@endphp
<div>
  
  {{-- Form --}}
    <div>
      <form wire:submit.prevent="store" method="POST" enctype="multipart/form-data">
              <div class="bg-white sm:p-6 dark:bg-gray-800">
                  <h2 class="block pb-4 text-2xl font-medium text-gray-700 dark:text-gray-400">
                      Tambah Absensi
                  </h2>
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Kegiatan</label>
                    <select wire:model="id_kegiatan" id='id_kegiatan' name="id_kegiatan" class="@error('id_kegiatan') is-invalid @enderror block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
                      <option>Pilih Kegiatan</option>  
                      @foreach ($kegiatan as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}, {{ $k->tanggal }}</option>
                      @endforeach  
                    </select>
                    @error('id_kegiatan') <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
                    </span>
                  </div> 
                  <div class="col-span-6 sm:col-span-3">
                      <label for="time_start" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Mulai</label>
                      <input wire:model="time_start" type="time" name="time_start" id="time_start" autocomplete="time_start" class="@error('time_start') is-invalid @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:border-gray-600 dark:focus:shadow-outline-gray dark:border-gray-600 dark:bg-gray-700">
                      @error('time_start') <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
                    </span>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                      <label for="time_end" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Selesai</label>
                      <input wire:model="time_end" type="time" name="time_end" id="time_end" autocomplete="time_end" class="@error('time_end') is-invalid @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:border-gray-600 dark:focus:shadow-outline-gray dark:border-gray-600 dark:bg-gray-700">
                      @error('time_end') <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
                    </span>
                  </div>
              </div>
              <div class="py-4 text-right ">
                <button type="submit" name="submit" class="inline-flex justify-center px-6 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  Simpan
                </button>
              </div>
          </form>   
  </div>

  {{-- Akhir Form --}}

  <div class="flex justify-between my-2">
    <h2 class="mb-2 dark:text-gray-200">Daftar Absensi, {{ $tanggal }} {{ $time }}</h2>
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
                <td class="px-4 py-3 text-sm flex">
                    <button wire:click="edit({{ $a->id }})" class="text-indigo-600 hover:text-indigo-900 mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                      </svg>
                    </button>
                    <button wire:click="delete_id({{ $a->id }})" class="text-indigo-600 hover:text-indigo-900 button delete-confirm" onclick="confirmDelete('delete')" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>
                    </button>
                </td>
              </tr>
            @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
</div>
<script>
  window.addEventListener('swal:modalCreate', event => {
    swal({
      title: "Success!",
      text: "Absensi Berhasil ditambahkan!",
      icon: "success",
    });
  });

  window.addEventListener('swal:modalUpdate', event => {
    swal({
      title: "Success!",
      text: "Absensi Berhasil diubah!",
      icon: "success",
    });
  });

  window.addEventListener('swal:modalDelete', event => {
    swal({
      title: "Success!",
      text: "Absensi Berhasil dihapus!",
      icon: "success",
    });
  });

  $('.delete-confirm').on('click', function (event) {
      event.preventDefault();
      const url = $(this).attr('href');
      swal({
          title: 'Yakin Hapus Kegiatan?',
          text: 'Data Kegiatan akan dihapus permanen!',
          icon: 'warning',
          buttons: true,
          dangerMode: true,
      }).then((willDelete) => {
          if (willDelete) {
            @this.call('delete');
          } else {
            swal("Data tidak dihapus!");
          }
      });
  });
</script>