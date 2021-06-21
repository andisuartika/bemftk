<div>
    <h2 class="text-gray-700 dark:text-gray-400 mb-2">Kegiatan Berlangsung pada Bulan {{ date('F') }}</h2>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-200 dark:text-gray-400 dark:bg-gray-800"
              >
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">Kegiatan</th>
                <th class="px-4 py-3">Tempat</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Waktu</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            <?php $i=0; ?>
            @foreach($kegiatan as $index => $k)
            <?php  $i++; ?>
               
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">{{ $i }}</td>
                <td class="px-4 py-3 text-sm">{{$k->nama}}</td>
                <td class="px-4 py-3 text-sm">{{$k->tempat}}</td>
                <td class="px-4 py-3 text-sm">{{$k->tanggal}}</td>
                <td class="px-4 py-3 text-sm">{{$k->time_start}} - {{$k->time_end}}</td>
              </tr>
            @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
</div>
