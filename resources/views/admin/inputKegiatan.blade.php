<x-Template-layout>
<style>
        [x-cloak] {
          display: none;
        }
</style>

<?php  
(empty($kegiatan)) ? $tgl = date('Y-m-d') : $tgl = $kegiatan->tanggal;
?>
<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            {{$title}}
            
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
            <!-- Form Kegiatan-->
           
            <div class="mt-5 sm:mt-0 dark:bg-gray-700 rounded-lg">   
                <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ (isset($kegiatan)) ? route('kegiatan.update',$kegiatan) : route('kegiatan.store')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @if(isset($kegiatan)) 
                    @method('PUT')
                 @endif
                 
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-5 py-3">
                            <h4 class="text-lg font-semibold text-gray-600 dark:text-gray-300">
                            Kegiatan Baru
                            </h4>
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kegiatan</label>
                                    <input type="text" type="text" name="nama" id="nama" autocomplete="Nama" value="{{ (isset($kegiatan)) ?$kegiatan->nama : old('nama')}}" class="@error('nama') border-red-600 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <span class="text-xs text-red-600 dark:text-red-400">
                                    @error('nama') {{$message}} @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tempat" class="block text-sm font-medium text-gray-700">Tempat Kegiatan</label>
                                    <input type="text" type="text" name="tempat" id="tempat" autocomplete="Tempat" value="{{ (isset($kegiatan)) ?$kegiatan->tempat : old('tempat')}}" class="@error('tempat') border-red-600 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <span class="text-xs text-red-600 dark:text-red-400">
                                     @error('tempat') {{$message}} @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                        <div class="mb-5">
                                        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Kegiatan</label>
                                            <div class="relative">
                                            <input type="hidden" name="tanggal" x-ref="date" :value="datepickerValue" />
                                            <input type="text" x-on:click="showDatepicker = !showDatepicker" x-model="datepickerValue" x-on:keydown.escape="showDatepicker = false" class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none text-gray-600 font-medium focus:ring focus:ring-blue-600 focus:ring-opacity-50" placeholder="Select date" readonly />

                                            <div class="absolute top-0 right-0 px-3 py-2">
                                                <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>

                                            <!-- <div x-text="no_of_days.length"></div>
                                                <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                <div x-text="new Date(year, month).getDay()"></div> -->

                                            <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0" style="width: 17rem" x-show.transition="showDatepicker" @click.away="showDatepicker = false">
                                                <div class="flex justify-between items-center mb-2">
                                                <div>
                                                    <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                    <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                </div>
                                                <div>
                                                    <button type="button" class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full" @click="if (month == 0) {
                                                            year--;
                                                            month = 12;
                                                        } month--; getNoOfDays()">
                                                    <svg class="h-6 w-6 text-gray-400 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                    </svg>
                                                    </button>
                                                    <button type="button" class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full" @click="if (month == 11) {
                                                            month = 0; 
                                                            year++;
                                                        } else {
                                                            month++; 
                                                        } getNoOfDays()">
                                                    <svg class="h-6 w-6 text-gray-400 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                    </button>
                                                </div>
                                                </div>

                                                <div class="flex flex-wrap mb-3 -mx-1">
                                                <template x-for="(day, index) in DAYS" :key="index">
                                                    <div style="width: 14.26%" class="px-0.5">
                                                    <div x-text="day" class="text-gray-800 font-medium text-center text-xs"></div>
                                                    </div>
                                                </template>
                                                </div>

                                                <div class="flex flex-wrap -mx-1">
                                                <template x-for="blankday in blankdays">
                                                    <div style="width: 14.28%" class="text-center border p-1 border-transparent text-sm"></div>
                                                </template>
                                                <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                    <div @click="getDateValue(date)" x-text="date" class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100" :class="{
                                                        'bg-indigo-200': isToday(date) == true, 
                                                        'text-gray-600 hover:bg-indigo-200': isToday(date) == false && isSelectedDate(date) == false,
                                                        'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true 
                                                        }"></div>
                                                    </div>
                                                </template>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="time_start" class="block text-sm font-medium text-gray-700">Mulai</label>
                                    <input type="time" name="time_start" id="time_start" autocomplete="time_start" value="{{ (isset($kegiatan)) ?$kegiatan->time_start : old('time_start')}}" class="@error('time_start') border-red-600 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <span class="text-xs text-red-600 dark:text-red-400">
                                    @error('time_start') {{$message}} @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="time_end" class="block text-sm font-medium text-gray-700">Selesai</label>
                                    <input type="time" name="time_end" id="time_end" autocomplete="time_end" value="{{ (isset($kegiatan)) ?$kegiatan->time_end: old('time_end')}}" class="@error('time_end') border-red-600 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <span class="text-xs text-red-600 dark:text-red-400">
                                    @error('time_end') {{$message}} @enderror
                                </div>
                            
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                                    <input type="text" type="text" name="keterangan" id="keterangan" autocomplete="keterangan" value="{{ (isset($kegiatan)) ?$kegiatan->keterangan: old('keterangan')}}" class="@error('keterangan') border-red-600 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <span class="text-xs text-red-600 dark:text-red-400">
                                    @error('keterangan') {{$message}} @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="point_skp" class="block text-sm font-medium text-gray-700">Point SKP</label>
                                    <input type="number" type="number" name="point_skp" id="point_skp" autocomplete="point_skp" value="{{ (isset($kegiatan)) ?$kegiatan->point_skp: old('point_skp')}}" class="@error('point_skp') border-red-600 @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <span class="text-xs text-red-600 dark:text-red-400">
                                    @error('keterangan') {{$message}} @enderror
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
<script>
    const MONTH_NAMES = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
    ];
    const MONTH_SHORT_NAMES = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
    ];
    const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    function app() {
    return {
            showDatepicker: false,
            datepickerValue: "",
            selectedDate: "{{$tgl}}",
            dateFormat: "YYYY-MM-DD",
            month: "",
            year: "",
            no_of_days: [],
            blankdays: [],
            initDate() {
            let today;
            if (this.selectedDate) {
                today = new Date(Date.parse(this.selectedDate));
            } else {
                today = new Date();
            }
            this.month = today.getMonth();
            this.year = today.getFullYear();
            this.datepickerValue = this.formatDateForDisplay(
                today
            );
            },
            formatDateForDisplay(date) {
            let formattedDay = DAYS[date.getDay()];
            let formattedDate = ("0" + date.getDate()).slice(
                -2
            ); // appends 0 (zero) in single digit date
            let formattedMonth = MONTH_NAMES[date.getMonth()];
            let formattedMonthShortName =
                MONTH_SHORT_NAMES[date.getMonth()];
            let formattedMonthInNumber = (
                "0" +
                (parseInt(date.getMonth()) + 1)
            ).slice(-2);
            let formattedYear = date.getFullYear();
            if (this.dateFormat === "DD-MM-YYYY") {
                return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
            }
            if (this.dateFormat === "YYYY-MM-DD") {
                return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
            }
            if (this.dateFormat === "D d M, Y") {
                return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
            }
            return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
            },
            isSelectedDate(date) {
            const d = new Date(this.year, this.month, date);
            return this.datepickerValue ===
                this.formatDateForDisplay(d) ?
                true :
                false;
            },
            isToday(date) {
            const today = new Date();
            const d = new Date(this.year, this.month, date);
            return today.toDateString() === d.toDateString() ?
                true :
                false;
            },
            getDateValue(date) {
            let selectedDate = new Date(
                this.year,
                this.month,
                date
            );
            this.datepickerValue = this.formatDateForDisplay(
                selectedDate
            );
            // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
            this.isSelectedDate(date);
            this.showDatepicker = false;
            },
            getNoOfDays() {
            let daysInMonth = new Date(
                this.year,
                this.month + 1,
                0
            ).getDate();
            // find where to start calendar day of week
            let dayOfWeek = new Date(
                this.year,
                this.month
            ).getDay();
            let blankdaysArray = [];
            for (var i = 1; i <= dayOfWeek; i++) {
                blankdaysArray.push(i);
            }
            let daysArray = [];
            for (var i = 1; i <= daysInMonth; i++) {
                daysArray.push(i);
            }
            this.blankdays = blankdaysArray;
            this.no_of_days = daysArray;
            },
        };
    }                                      
</script>
</x-Template-layout>