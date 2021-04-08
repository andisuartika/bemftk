<div>
                        <div class="block col-span-6 sm:col-span-3">
                            <label for="jurusan_id" class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                               Jurusan
                            </label>
                            <select id="jurusan_id" name="jurusan_id" wire:model='jurusan' autocomplete="jurusan_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
                            @foreach ($jurusans as $jrs)
                                <option value="{{ $jrs->id }}">{{ $jrs->nama }}</option>
                            @endforeach
                            </select>
                          </div>

                         
                          <div class="block col-span-6 sm:col-span-3 mt-4">
                            <label for="prodi_id" class="block text-sm font-medium text-gray-700 dark:text-gray-400">
                              Program Studi
                            </label>
                            <select id="prodi_id" name="prodi_id" wire:model='prodi'  autocomplete="prodi_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded-lg">
                            @foreach ($prodies as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                            </select>
                          </div>

</div>
