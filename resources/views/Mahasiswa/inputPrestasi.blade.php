<x-mahasiswa-layout>

    <div class="container px-6 mx-auto grid">
                <h2
                  class="mt-6 mb-2 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                @if(isset($prestasi)) 
                  Ubah Data Prestasi
                @else
                  Tambahkan Data Prestasi 
                @endif
                </h2>
                <div class="flex items-center mb-4 bg-purple-600 text-white text-sm font-bold px-4 py-3 rounded-lg" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>Silahkan input data prestasi anda dengan benar.</p>
                </div>

                {{-- Form --}}
                <div class="mt-5 sm:mt-0 dark:bg-gray-700 rounded-lg">   
                    <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ (isset($prestasi)) ? route('prestasi.update',$prestasi) : route('prestasi.store')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @if(isset($prestasi)) 
                        @method('PUT')
                      @else @method('POST')
                     @endif
                     
                        <div class="shadow overflow-hidden sm:rounded-md">
                          <div class="px-5 py-3">
                            <h4 class="text-lg font-semibold text-gray-600 dark:text-gray-300">
                              Data Prestasi
                            </h4>
                          </div>
                          
                          <div class="px-10 py-5 bg-white sm:p-6 dark:bg-gray-800">
                              <div class="col-span-6 sm:col-span-6 mb-6">
                                <label for="tahun" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Tahun</label>
                                <input type="text" type="text" name="tahun" id="tahun" autocomplete="Tahun" value="{{ (isset($prestasi)) ? $prestasi->tahun : old('tahun')}}" class="@error('tahun') border-red-600 @enderror block w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-lg" placeholder="Tahun Prestasi">
                                <span class="text-xs text-red-600 dark:text-red-400">
                                  @error('tahun') {{$message}} @enderror
                               </span>
                              </div>     
                              
                              <div class="col-span-6 sm:col-span-6 mb-6">
                                <div class="block col-span-6 sm:col-span-3">
                                    <label for="semester" class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                        Semester
                                    </label>
                                    <select id="semester" name="semester"  autocomplete="semester" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
                                        <option value="">
                                        Pilih Semester
                                        </option>
                                        @if(isset($prestasi))
                                          @foreach($semester as $sm)
                                            @if($sm == $prestasi->semester)
                                              <option selected value="{{ $sm }}">{{ $sm }}</option>
                                            @else
                                              <option value="{{ $sm }}">{{ $sm }}</option>
                                            @endif
                                          @endforeach
                                        @else
                                          @foreach($semester as $sm)
                                            <option value="{{ $sm }}">{{ $sm }}</option>
                                          @endforeach
                                        @endif
                                        </select>
                                        <span class="text-xs text-red-600 dark:text-red-400">
                                            @error('semester') {{$message}} @enderror
                                        </span>
                                    </div>
                              </div>
                              
                              <div class="col-span-6 sm:col-span-6 mb-6">
                                    <div class="block col-span-6 sm:col-span-3">
                                      <label for="jenis_prestasi" class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                                        Jenis Prestasi
                                      </label>
                                      <select id="jenis_prestasi" name="jenis_prestasi"  autocomplete="jenis_prestasi" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
                                        <option value="">
                                           Pilih Jenis Prestasi 
                                        </option>
                                        @if(isset($prestasi))
                                          @foreach($jenis_prestasi as $jp)
                                            @if($jp == $prestasi->jenis_prestasi)
                                              <option selected value="{{ $jp }}">{{ $jp }}</option>
                                            @else
                                              <option value="{{ $jp }}">{{ $jp }}</option>
                                            @endif
                                          @endforeach
                                        @else
                                          @foreach($jenis_prestasi as $jp)
                                            <option value="{{ $jp }}">{{ $jp }}</option>
                                          @endforeach
                                        @endif
                                        
                                        </select>
                                        <span class="text-xs text-red-600 dark:text-red-400">
                                            @error('jenis_prestasi') {{$message}} @enderror
                                        </span>
                                    </div>
                              </div>
                              <div class="mb-6">
                                <label for="nama_prestasi" class="block text-sm font-medium text-gray-700">
                                  Nama Prestasi
                                </label>
                                <div class="mt-1">
                                  <textarea id="nama_prestasi" name="nama_prestasi" rows="2" class="@error('nama_prestasi') border-red-600 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md py-2 px-2" placeholder="Masukkan Nama Prestasi">{{ (isset($prestasi)) ?$prestasi->nama_prestasi : old('nama_prestasi')}}</textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                  Isikan nama prestasi, pengalaman berorganisasi, pengalaman kepanitiaan, kontingen, atau lainnya.
                                </p>
                                <span class="text-xs text-red-600 dark:text-red-400">
                                    @error('nama_prestasi') {{$message}} @enderror
                                </span>
                              </div>
                              <div class="mb-6">
                                <label for="keterangan" class="block text-sm font-medium text-gray-700">
                                  Keterangan
                                </label>
                                <div class="mt-1">
                                  <textarea id="keterangan" name="keterangan" rows="3" class="@error('nama_prestasi') border-red-600 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md py-2 px-2" placeholder="Masukkan keterangan Prestasi">{{ (isset($prestasi)) ?$prestasi->keterangan : old('keterangan')}}</textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                  isikan keterangan terkait prestasi yang anda masukkan
                                </p>
                                <span class="text-xs text-red-600 dark:text-red-400">
                                    @error('keterangan') {{$message}} @enderror
                                </span>
                              </div>

                              <div class="mb-6">
                                <label for="keterangan" class="block text-sm font-medium text-gray-700">
                                    Berkas Scan Piagam / SK
                                </label>
                                @if(isset($prestasi))
                                <img src="https://img.icons8.com/color/48/000000/pdf-2.png"/>
                                <a  href="{{ asset('storage/files/validasi/'. $prestasi->file)}}"><p class="text-sm mt-2">{{ $prestasi->file }}</a></p>
                                @endif
                                <div class="mt-1">
                                  <input type="file" name="file" id="file">
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                  Upload Berkas Scan Piagam / SK dalam *PDF
                                </p>
                                <span class="text-xs text-red-600 dark:text-red-400">
                                    @error('keterangan') {{$message}} @enderror
                                </span>
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
                
@section('scripts')
<script>
    // Get a file input reference
    const inputElement = document.querySelector('input[type="file"]');
    const pond = FilePond.create( inputElement );
    FilePond.setOptions({
    server: {
        url: '/upload',
        headers : {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
        }
});
</script>
@endsection
    
</x-mahasiswa-layout>