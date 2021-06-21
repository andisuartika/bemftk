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
                 Tambah
               </button>
             </div>
         </form>   
</div>
