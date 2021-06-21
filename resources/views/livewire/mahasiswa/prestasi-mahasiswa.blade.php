<div class="row flex justify-between mb-2">
    <div class="col">
        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"></svg>
        <select wire:model="paginate" name="paginate" id="paginate" class="border border-gray-300 rounded-md text-gray-600 h-9 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 focus:placeholder-gray-500 dark:border-gray-800 dark:text-gray-600">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
        </select>
    </div>
    <div class="col">
        <!-- Search input -->
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
                  wire:model="search"
                  name="search"
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search..."
                  aria-label="Search"
                />
              </div>
            </div>
    </div>
</div>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <thead>
          <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-200 dark:text-gray-400 dark:bg-gray-800"
          >
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Nama</th>
            <th class="px-4 py-3">Jenis Prestasi</th>
            <th class="px-4 py-3">Tahun</th>
            <th class="px-4 py-3">Semester</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
          @foreach($validasi as $index => $valid)
               
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">{{ $validasi->firstitem() + $index}}</td>
                <td class="px-4 py-3 text-sm">{{ $valid->nama_prestasi}}</td>
                <td class="px-4 py-3 text-sm">{{ $valid->jenis_prestasi}}</td>
                <td class="px-4 py-3 text-sm">{{ $valid->tahun}}</td>
                <td class="px-4 py-3 text-sm">{{ $valid->semester}}</td>
                <td class="px-4 py-3 text-sm">
                   {{-- cek status --}}
                    @if($valid->status == 'Pending')
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                        >
                          Pending
                        </span>
                    @elseif($valid->status == 'Diterima')
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                            >
                            Diterima
                        </span>
                    @else
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
                            >
                            Ditolak
                        </span>
                    @endif
                </td>
                <td class="px-4 py-3 text-sm flex">
                    <a href="{{ route('prestasi.edit', $valid->id) }}">
                        <button class="text-indigo-600 hover:text-indigo-900 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                          </svg>
                        </button>
                    </a>
                    <form action="{{ route('prestasi.destroy', $valid->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button  class="text-indigo-600 hover:text-indigo-900 button delete-confirm" onclick="confirmDelete('delete')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                        </button>
                    </form>  
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    <div
      class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
    >
      <span class="flex items-center col-span-3">
        Menampilkan {{ $validasi->count() }} Dari {{ $validasi->total() }} Point
      </span>
      <span class="col-span-2"></span>
      {{ $validasi->links('components.pagination')}}
    </div>
  </div>

</div>

<script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Yakin Hapus Prestasi?',
            text: 'Data Prestasi akan dihapus permanen!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
              $(this).closest('form').submit();
            } else {
              swal("Data tidak dihapus!");
            }
        });
    });
</script>