@php
    $date = date('d-M-Y');
@endphp
<x-Template-layout>

    <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                  Absensi
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
                <!-- Tambah Absensi-->
                <div class="mb-8">
                    <button
                  class="modal-open flex items-center justify-between px-4 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple shadow-lg"
                 
                >
                    Tambah Absensi
                    <span class="ml-2" aria-hidden="true">+</span>
                </button> 
                  </div>
    
                <!-- New Table -->
                <div class="flex justify-between mb-2">
                
                <h2 class="mb-2 dark:text-gray-200">Daftar Absensi, {{ $date }}</h2>
              </div>
                @livewire('admin.daftar-kegiatan')      
              </div>
    
        {{-- modal --}}
      <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        
        <div class="modal-container bg-white w-full md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
          
          <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
          </div>

          <!-- Add margin if you want to see some of the overlay behind the modal-->
          <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
              <p class="text-2xl font-bold">Tambah Absensi</p>
              <div class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                  <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
              </div>
            </div>

            <!--Body-->
            <form action="{{ (isset($absensi)) ? route('absensi.update',$absensi) : route('absensi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($absensi)) 
                   @method('PUT')
                 @else @method('POST')
                @endif
                     <div class="bg-white sm:p-6 dark:bg-gray-800">
                       <div class="grid grid-cols-6 gap-6">
                         <div class="col-span-6 sm:col-span-6">
                           <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Kegiatan</label>
                           <select id='id_kegiatan' name="id_kegiatan" class=" px-2 py-6 block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
                            <option>Pilih Kegiatan</option> 
                            @foreach ($kegiatan as $k)
                              <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                            
                          </select>
                           <span class="text-xs text-red-600 dark:text-red-400">
                             @error('id_kegiatan') {{$message}} @enderror
                          </span>
                         </div> 
                         
                         <div class="col-span-6 sm:col-span-3">
                            <label for="time_start" class="block text-sm font-medium text-gray-700">Mulai</label>
                            <input type="time" name="time_start" id="time_start" autocomplete="time_start" value="{{ (isset($absensi)) ?$absensi->time_start : old('time_start')}}" class="@error('time_start') border-red-600 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <span class="text-xs text-red-600 dark:text-red-400">
                            @error('time_start') {{$message}} @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="time_end" class="block text-sm font-medium text-gray-700">Selesai</label>
                            <input type="time" name="time_end" id="time_end" autocomplete="time_end" value="{{ (isset($absensi)) ?$absensi->time_end: old('time_end')}}" class="@error('time_end') border-red-600 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <span class="text-xs text-red-600 dark:text-red-400">
                            @error('time_end') {{$message}} @enderror
                        </div>

                        
                         
                     </div>
                     <div class="py-4 text-right dark:bg-gray-700">
                       <button type="submit" name="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                         Submit
                       </button>
                     </div>
                 </form>         
          </div>
        </div>
      </div>
        {{-- akhir modal --}}

    </x-Template-layout>

    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
          openmodal[i].addEventListener('click', function(event){
          event.preventDefault()
          toggleModal()
          })
        }
        
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        
        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
          closemodal[i].addEventListener('click', toggleModal)
        }
        
        document.onkeydown = function(evt) {
          evt = evt || window.event
          var isEscape = false
          if ("key" in evt) {
          isEscape = (evt.key === "Escape" || evt.key === "Esc")
          } else {
          isEscape = (evt.keyCode === 27)
          }
          if (isEscape && document.body.classList.contains('modal-active')) {
          toggleModal()
          }
        };
        
        
        function toggleModal () {
          const body = document.querySelector('body')
          const modal = document.querySelector('.modal')
          modal.classList.toggle('opacity-0')
          modal.classList.toggle('pointer-events-none')
          body.classList.toggle('modal-active')
        }
        
        $(document).ready(function(){
 
        // Initialize select2
        $("#id_kegiatan").select2();

        // Read selected option
        $('#but_read').click(function(){
        var username = $('#id_kegiatan option:selected').text();
        var userid = $('#id_kegiatan').val();

        $('#result').html("id : " + userid + ", name : " + username);

        });
});
         
      </script>