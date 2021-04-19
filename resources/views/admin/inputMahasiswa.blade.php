<x-Template-layout>

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            @if(isset($mahasiswa)) 
            Update Mahasiswa
            @else Tambah Mahasiswa
            @endif
            
            </h2>
            <!-- CTA -->
            <div
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="https://github.com/estevanmaito/windmill-dashboard"
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
                <span>Hi, Wellcome Admin</span>
              </div>
            </div>
            <!-- Tambah Mahasiswa-->
           
            <div class="mt-5 sm:mt-0 dark:bg-gray-700 rounded-lg">   
                <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ (isset($mahasiswa)) ? route('mahasiswa.update',$mahasiswa) : route('mahasiswa.store')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @if(isset($mahasiswa)) 
                    @method('PUT')
                  @else @method('POST')
                 @endif
                 
                    <div class="shadow overflow-hidden sm:rounded-md">
                      <div class="px-5 py-3">
                        <h4 class="text-lg font-semibold text-gray-600 dark:text-gray-300">
                          Data Mahasiswa
                        </h4>
                      </div>
                      
                      <div class="px-10 py-5 bg-white sm:p-6 dark:bg-gray-800">
                        <div class="grid grid-cols-6 gap-6">
                          <div class="col-span-6 sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Nama</label>
                            <input type="text" type="text" name="name" id="name" autocomplete="Nama" value="{{ (isset($mahasiswa)) ?$mahasiswa->name : old('name')}}"class="@error('name') border-red-600 @enderror block w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg" placeholder="Nama Mahasiswa">
                            <span class="text-xs text-red-600 dark:text-red-400">
                              @error('name') {{$message}} @enderror
                           </span>
                          </div>                

                          <div class="col-span-6 sm:col-span-6">
                            <label for="nim" class="block text-sm font-medium text-gray-700 dark:text-gray-400">NIM</label>
                            <input  type="text" name="nim" id="nim" autocomplete="nim" value="{{ (isset($mahasiswa)) ?$mahasiswa->nim : old('nim')}}" class="@error('nim') border-red-600 @enderror block w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg" placeholder="NIM Mahasiswa">
                            <span class="text-xs text-red-600 dark:text-red-400">
                            @error('nim') {{$message}} @enderror
                           </span>
                          </div>
                          
                          <div class="col-span-6 sm:col-span-6">
                            @if(!isset($mahasiswa))
                              @livewire('select')
                            @else 
                                  <div class="block col-span-6 sm:col-span-3">
                                  <label for="jurusan_id" class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                    Jurusan
                                  </label>
                                  <select id="jurusan_id" name="jurusan_id" wire:model='jurusan' autocomplete="jurusan_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
                                  @foreach ($jurusans as $jrs)
                                    @if($jrs ==$mahasiswa->jurusan)
                                      <option value="{{ $jrs->id }}" selected>{{ $jrs->nama }}</option>
                                    @else 
                                      <option value="{{ $jrs->id }}">{{ $jrs->nama }}</option>
                                    @endif
                                  @endforeach
                                  </select>
                                </div>

                              
                                <div class="block col-span-6 sm:col-span-3 mt-4">
                                  <label for="prodi_id" class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                    Program Studi
                                  </label>
                                  <select id="prodi_id" name="prodi_id" wire:model='prodi'  autocomplete="prodi_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
                                  @foreach ($prodies as $p)
                                    @if($p == $mahasiswa->prodi)
                                      <option value="{{ $p->id }}" selected>{{ $p->nama }}</option>
                                    @else
                                      <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endif
                                  @endforeach
                                  </select>
                                </div>
                            @endif
                          </div>
                          <div class="col-span-6 sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                            <input type="text" name="email" id="email" autocomplete="email" value="{{ (isset($mahasiswa)) ?$mahasiswa->email : old('email')}}" class="@error('email') border-red-600 @enderror block w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg" placeholder="Example@undiksha.ac.id">
                            <span class="text-xs text-red-600 dark:text-red-400">
                             @error('email') {{$message}} @enderror
                             </span>
                          </div>
                        </div>
                      </div>
                      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 dark:bg-gray-700">
                        <button type="submit" name="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
 </div>
        

</x-Template-layout>