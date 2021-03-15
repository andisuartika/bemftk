<x-Template-layout>

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Tambah Mahasiswa
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
            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Elements
            </h4>
            <form action="{{ route('mahasiswa.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div
                class="grid grid-cols-6 gap-6 px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
                >
                    <div class="col-span-6 sm:col-span-4">
                        <label for="nama" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Nama</span>
                            <input 
                            type="text" name="nama" id="nama" value="{{ old('nama')}}"
                            class="@error('nama') border-red-600 @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Nama Mahasiswa"
                            />
                        </label>
                        <span class="text-xs text-red-600 dark:text-red-400">
                            @error('nama') {{$message}} @enderror
                        </span>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="nim" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">NIM</span>
                            <input 
                            type="text" name="nim" id="nim" value="{{ old('nim')}}"
                            class="@error('nim') border-red-600 @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="NIM Mahasiswa"
                            />
                        </label>
                        <span class="text-xs text-red-600 dark:text-red-400">
                            @error('nim') {{$message}} @enderror
                        </span>
                    </div>

                <label for="jurusan_id" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                    Jurusan
                    </span>
                    <select
                        name="jurusan_id" id="jurusan_id" 
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    >
                    @foreach ($jurusan as $jrs)
                        <option value="{{ $jrs->id }}">{{ $jrs->nama }}</option>
                    @endforeach
                    </select>
                </label>

                <label for="prodi_id" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                    Program Studi
                    </span>
                    <select
                        name="prodi_id" id="prodi_id"
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    >
                    @foreach ($prodi as $ps)
                        <option value="{{ $ps->id }}">{{ $ps->nama }}</option>
                    @endforeach
                    </select>
                </label>

                <div class="col-span-6 sm:col-span-4">
                        <label for="email" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Email</span>
                            <input 
                            type="email" name="email" id="email" value="{{ old('email')}}"
                            class="@error('email') border-red-600 @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Example@undiksha.ac.id"
                            />
                        </label>
                        <span class="text-xs text-red-600 dark:text-red-400">
                            @error('nim') {{$message}} @enderror
                        </span>
                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button
                        type="submit" name="submit" 
                        class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                        Save
                        </button>
                    </div>
                </div>
            </form>     
          </div>

</x-Template-layout>