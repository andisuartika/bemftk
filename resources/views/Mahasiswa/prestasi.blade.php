<x-mahasiswa-layout>
  @include('alert')
    <div class="container px-6 mx-auto grid">
                <h2
                  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                  Prestasi Mahasiswa
                </h2>
                <!-- CTA -->
    
                <!-- New Table -->
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                      <div>
                        <p class="font-bold">Petunjuk!</p>
                        <p>
                            <ol class="list-decimal ml-6">
                                <li class="text-sm">Silahkan masukkan data prestasi anda dengan benar</li>
                                <li class="text-sm">Setelah diinput, kirim data prestasi dengan menggunakan tombol <b>Submit</b> agar dapat divalidasi</li>
                                <li class="text-sm">Apabila data telah divalidasi, secara automatis data akan masuk ke point skp</li>
                                <li class="text-sm">Jika ada data yang tidak/belum divalidasi mohon segera menghubungi BEM FTK Undiksha</li>
                              </ol>
                        </p>
                        <p class="text-sm text-green-500 mt-4"> Data Validasi dapat berupa, Piagam Prestasi, SK Organisasi, SK Kepanitian, dan Berkas lainnya yang termasuk kedalam point SKP</p>
                      </div>
                    </div>
                  </div>
                
                <!-- Tambah Prestasi-->
                <div class="mt-6 mb-4">
                    <button
                    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <a href="{{route (('prestasi.create'))}}">
                    Tambah Prestasi
                    <span class="ml-2" aria-hidden="true">+</span>
                    </a>
                    </button>
                </div>
              
              @livewire('mahasiswa.prestasi-mahasiswa')
    </div>
    </x-mahasiswa-layout>