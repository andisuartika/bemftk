<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf" />
    <meta name="msapplication-TileColor" content="#0ed3cf" />
    <meta name="theme-color" content="#0ed3cf" />

    <meta property="og:image" content="https://tailwindcomponents.com/storage/917/temp66505.png?v=2021-06-20 16:10:57" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:url" content="https://tailwindcomponents.com/component/landing-page-with-tailwind-css-2/landing" />
    <meta property="og:title" content="Landing Page with Tailwind CSS 2 by mithicher" />
    <meta property="og:description" content="Inspired from a dribble shot by https://dribbble.com/shots/8807920-Quickpay-Hero-section/attachments/1015863?mode=media &amp;bull; https://codepen.io/mithicher/pen/JjorVyb" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Landing Page with Tailwind CSS 2 by mithicher" />
    <meta name="twitter:description" content="Inspired from a dribble shot by https://dribbble.com/shots/8807920-Quickpay-Hero-section/attachments/1015863?mode=media &amp;bull; https://codepen.io/mithicher/pen/JjorVyb" />
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/917/temp66505.png?v=2021-06-20 16:10:57" />

    <title>BEM FTK UNDIKSHA</title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css" />
  </head>
  <body class="bg-gray-200">
    <!-- This is an example component -->
    <div>
      <div class="bg-indigo-900 px-4 py-4">
        <div class="md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between">
          <div class="flex justify-between items-center">
            <a href="#" class="inline-block py-2 text-white text-xl font-bold">E-SKP BEMFTK UNDIKSHA</a>
            <div class="inline-block cursor-pointer md:hidden">
              <div class="bg-gray-400 w-8 mb-2" style="height: 2px"></div>
              <div class="bg-gray-400 w-8 mb-2" style="height: 2px"></div>
              <div class="bg-gray-400 w-8" style="height: 2px"></div>
            </div>
          </div>

          <div></div>
          <div class="hidden md:block">
        @if (Route::has('login'))
        @auth
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
              <a
                class="inline-block py-2 px-4 text-gray-700 bg-white hover:bg-gray-100 rounded-lg"
                href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                            this.closest('form').submit();">
                <span> Log out </span>    
            </a>
      </form>
            
        @else
            <a href="{{ route('login') }}" class="inline-block py-2 px-4 text-gray-700 bg-white hover:bg-gray-100 rounded-lg">Login</a>
        @endauth
        @endif
          </div>
        </div>
      </div>

      <div class="bg-indigo-900 md:overflow-hidden">
        <div class="px-4 py-20 md:py-4">
          <div class="md:max-w-6xl md:mx-auto">
            <div class="md:flex md:flex-wrap">
              <div class="md:w-1/2 text-center md:text-left md:pt-16">
                <h1 class="font-bold text-white text-2xl md:text-5xl leading-tight mb-4">Sistem Kredit Point Mahasiswa Elektronik</h1>

                <p class="text-indigo-200 md:text-xl md:pr-60">E-SKP adalah Sistem Kredit Point Mahasiswa dalam bentuk digital yang memudahkan mahasiswa untuk melakukan pengumpulan point.</p>

                <a href="{{ route('dashboard.index') }}" class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-blue-500 hover:bg-blue-600 rounded-lg shadow">Get Started</a>
              </div>
              <div class="md:w-1/2 relative">
                <div class="hidden md:block">
                  <div class="-ml-24 -mb-40 absolute left-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-6 py-8" style="transform: rotate(-8deg)">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="110" height="110" viewBox="0 0 172 172" style="fill: #000000">
                      <g
                        fill="none"
                        fill-rule="nonzero"
                        stroke="none"
                        stroke-width="1"
                        stroke-linecap="butt"
                        stroke-linejoin="miter"
                        stroke-miterlimit="10"
                        stroke-dasharray=""
                        stroke-dashoffset="0"
                        font-family="none"
                        font-weight="none"
                        font-size="none"
                        text-anchor="none"
                        style="mix-blend-mode: normal"
                      >
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#5960b6">
                          <path
                            d="M20.64,6.88v158.24h96.32c0.02688,0.01344 0.08063,-0.01344 0.1075,0c5.73781,4.3 12.83281,6.88 20.5325,6.88c18.96031,0 34.4,-15.43969 34.4,-34.4c0,-14.05562 -8.53281,-26.16281 -20.64,-31.4975v-99.2225zM27.52,13.76h116.96v90.1925c-2.23062,-0.45687 -4.515,-0.7525 -6.88,-0.7525c-7.69969,0 -14.79469,2.58 -20.5325,6.88h-48.2675v6.88h41.3875c-4.35375,5.76469 -6.9875,12.88656 -6.9875,20.64c0,7.75344 2.63375,14.87531 6.9875,20.64h-82.6675zM44.72,48.16v6.88h13.76v-6.88zM68.8,48.16v6.88h58.48v-6.88zM44.72,68.8v6.88h13.76v-6.88zM68.8,68.8v6.88h58.48v-6.88zM44.72,89.44v6.88h13.76v-6.88zM68.8,89.44v6.88h58.48v-6.88zM44.72,110.08v6.88h13.76v-6.88zM137.6,110.08c15.23813,0 27.52,12.28188 27.52,27.52c0,15.23813 -12.28187,27.52 -27.52,27.52c-15.23812,0 -27.52,-12.28187 -27.52,-27.52c0,-15.23812 12.28188,-27.52 27.52,-27.52zM134.16,120.4v13.76h-13.76v6.88h13.76v13.76h6.88v-13.76h13.76v-6.88h-13.76v-13.76z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                    <div class="text-gray-800 text-center">Point<br />E-SKP</div>
                  </div>

                  <div class="ml-24 mb-16 absolute left-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-6 py-8" style="transform: rotate(-8deg); z-index: 2">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 172 172" style="fill: #000000">
                      <g
                        fill="none"
                        fill-rule="nonzero"
                        stroke="none"
                        stroke-width="1"
                        stroke-linecap="butt"
                        stroke-linejoin="miter"
                        stroke-miterlimit="10"
                        stroke-dasharray=""
                        stroke-dashoffset="0"
                        font-family="none"
                        font-weight="none"
                        font-size="none"
                        text-anchor="none"
                        style="mix-blend-mode: normal"
                      >
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#474ba8">
                          <path
                            d="M32.25,16.125v139.75h43v-10.75h-32.25v-118.25h53.75v32.25h32.25v32.25h10.75v-39.85059l-35.39942,-35.39941zM107.5,34.47559l13.89942,13.89941h-13.89942zM129,102.125v53.75h10.75v-53.75zM107.5,118.25v37.625h10.75v-37.625zM86,134.375v21.5h10.75v-21.5z"
                          ></path>
                        </g>
                      </g>
                    </svg>

                    <div class="text-gray-800 text-center">Validasi Prestasi</div>
                  </div>

                  <div class="ml-32 absolute left-0 bottom-0 w-48 bg-white rounded-lg shadow-lg px-10 py-8" style="transform: rotate(-8deg); z-index: 2; margin-bottom: -220px">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="120" height="120" viewBox="0 0 172 172" style="fill: #000000">
                      <g
                        fill="none"
                        fill-rule="nonzero"
                        stroke="none"
                        stroke-width="1"
                        stroke-linecap="butt"
                        stroke-linejoin="miter"
                        stroke-miterlimit="10"
                        stroke-dasharray=""
                        stroke-dashoffset="0"
                        font-family="none"
                        font-weight="none"
                        font-size="none"
                        text-anchor="none"
                        style="mix-blend-mode: normal"
                      >
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#234a9f">
                          <path
                            d="M89.06375,11.66375c-12.6592,0.2408 -21.9464,4.09306 -27.5536,11.48906c-6.6392,8.772 -7.87867,22.05121 -3.68187,39.52641c-1.548,1.892 -2.68455,4.8152 -2.23735,8.6336c0.9288,7.6024 3.85146,10.6941 6.36266,11.9325c1.1696,5.9512 4.40723,12.65866 7.57203,15.78906l0.03359,1.61922c0,3.5088 0.03413,6.53358 -0.27547,10.42078c-2.1328,4.8504 -9.116,7.60536 -17.2,10.77016c-13.4504,5.2976 -30.17095,11.86639 -31.44375,32.74719l-0.20828,3.64828h81.39094c-1.2728,-2.1672 -2.30534,-4.472 -3.13094,-6.88h-70.72156c2.58,-13.6568 14.78609,-18.44163 26.61969,-23.08563c9.4256,-3.7152 18.34004,-7.21782 21.29844,-15.16422l0.20156,-0.90031c0.3784,-4.5064 0.34937,-7.94264 0.34937,-11.62344l-0.03359,-3.16453l0.06719,-2.06265l-1.8611,-0.9675c-1.5136,-0.9976 -5.53437,-7.94345 -6.18797,-14.16985l-0.30906,-2.82187l-2.82187,-0.24187c-0.4472,-0.0344 -2.20187,-1.27092 -2.85547,-6.67172c-0.344,-2.752 0.99437,-3.74906 0.99437,-3.74906l2.20375,-1.34375l-0.65172,-2.43891c-4.1624,-16.0992 -3.47413,-28.41897 1.99547,-35.64297c4.3,-5.6072 11.76292,-8.56157 22.15172,-8.76797c6.4328,0 11.21091,1.6168 12.75891,4.3l0.8264,1.47812l1.6864,0.24188c4.6096,0.6536 7.84455,2.61521 9.97735,5.98641c5.2632,8.4968 2.20455,24.21626 -0.40985,32.16266l-0.72562,2.58l2.17015,1.44453c0.0344,0 1.37197,0.99706 1.02797,3.74906c-0.6192,5.4008 -2.40827,6.63732 -2.85547,6.67172l-2.82187,0.24187l-0.30906,2.82187c-0.688,6.2608 -4.5701,13.17305 -5.9461,14.13625l-1.86109,0.9675v5.29437c-0.0344,3.6464 -0.07015,7.08345 0.34265,11.58985l0.20828,0.90031c0.1376,0.344 0.27815,0.68397 0.45015,1.02797c1.72,-2.4768 3.6765,-4.78241 5.9125,-6.84641v-0.03359c-0.0688,-2.236 -0.06799,-4.30054 -0.03359,-6.57094v-1.65281c3.096,-3.1648 6.26134,-9.87065 7.43094,-15.85625c2.408,-1.2384 5.43466,-4.33171 6.32906,-11.86531c0.4472,-3.7496 -0.64984,-6.64081 -2.16344,-8.53281c2.0296,-6.8112 6.11729,-24.49253 -0.90031,-35.84453c-2.9584,-4.7816 -7.46104,-7.77306 -13.34344,-8.94266c-3.2336,-4.0936 -9.45892,-6.32906 -17.81812,-6.32906zM137.6,103.2c-18.92,0 -34.4,15.48 -34.4,34.4c0,18.92 15.48,34.4 34.4,34.4c18.92,0 34.4,-15.48 34.4,-34.4c0,-18.92 -15.48,-34.4 -34.4,-34.4zM137.6,110.08c15.136,0 27.52,12.384 27.52,27.52c0,15.136 -12.384,27.52 -27.52,27.52c-15.136,0 -27.52,-12.384 -27.52,-27.52c0,-15.136 12.384,-27.52 27.52,-27.52zM155.10906,127.29344c-0.87634,-0.07998 -1.78353,0.17722 -2.51281,0.7861l-18.22797,15.18437l-8.0961,-8.09609c-1.34504,-1.34504 -3.51933,-1.34504 -4.86437,0c-1.34504,1.34504 -1.34504,3.51933 0,4.86437l10.32,10.32c0.66736,0.66736 1.54811,1.00781 2.43219,1.00781c0.78088,0 1.56063,-0.26633 2.19703,-0.79953l20.64,-17.2c1.45856,-1.21432 1.6612,-3.38566 0.44344,-4.84422c-0.60888,-0.72928 -1.45506,-1.14283 -2.3314,-1.22281z"
                          ></path>
                        </g>
                      </g>
                    </svg>

                    <div class="text-gray-800 text-center">Absensi <br />Kegiatan</div>
                  </div>

                  <div class="mt-10 w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow-lg" style="transform: rotate(-8deg); margin-right: -250px; z-index: 1">
                    <div class="w-32 bg-gray-200" style="height: 560px"></div>
                    <div class="flex-1 p-6">
                      <h2 class="text-lg text-gray-700 font-bold mb-3">Dashboard E-SKP</h2>
                      <div class="flex mb-5">
                        <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                          <div class="p-1 rounded-full bg-gray-300"></div>
                        </div>
                        <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                          <div class="p-1 rounded-full bg-gray-300"></div>
                        </div>
                        <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                          <div class="p-1 rounded-full bg-gray-300"></div>
                        </div>
                        <div class="w-16 rounded-full bg-gray-100 py-2 px-4">
                          <div class="p-1 rounded-full bg-gray-300"></div>
                        </div>
                      </div>

                      <div class="flex flex-wrap -mx-4 mb-5">
                        <div class="w-1/3 px-4">
                          <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                            <div class="w-16 h-16 rounded-full bg-gray-200 mb-6"></div>
                            <div class="h-2 w-16 bg-gray-200 mb-2 rounded-full"></div>
                            <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                          </div>
                        </div>
                        <div class="w-1/3 px-4">
                          <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                            <div class="w-16 h-16 rounded-full bg-gray-200 mb-6"></div>
                            <div class="h-2 w-16 bg-gray-200 mb-2 rounded-full"></div>
                            <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                          </div>
                        </div>
                        <div class="w-1/3 px-4">
                          <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                            <div class="w-16 h-16 rounded-full bg-gray-200 mb-6"></div>
                            <div class="h-2 w-16 bg-gray-200 mb-2 rounded-full"></div>
                            <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                          </div>
                        </div>
                      </div>

                      <h2 class="text-lg text-gray-700 font-bold mb-3">Point SKP Mahasiswa</h2>

                      <div class="w-full flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3">
                        <div class="w-1/3">
                          <div class="flex">
                            <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                            <div>
                              <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                              <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                            </div>
                          </div>
                        </div>
                        <div class="w-1/3">
                          <div class="w-16 rounded-full bg-green-100 py-2 px-4 mx-auto">
                            <div class="p-1 rounded-full bg-green-200"></div>
                          </div>
                        </div>
                        <div class="w-1/3">
                          <div class="h-2 w-10 bg-gray-100 rounded-full mx-auto"></div>
                        </div>
                      </div>

                      <div class="flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3">
                        <div class="w-1/3">
                          <div class="flex">
                            <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                            <div>
                              <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                              <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                            </div>
                          </div>
                        </div>
                        <div class="w-1/3">
                          <div class="w-16 rounded-full bg-orange-100 py-2 px-4 mx-auto">
                            <div class="p-1 rounded-full bg-orange-200"></div>
                          </div>
                        </div>
                        <div class="w-1/3">
                          <div class="h-2 w-16 bg-gray-100 rounded-full mx-auto"></div>
                        </div>
                      </div>

                      <div class="flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3">
                        <div class="w-1/3">
                          <div class="flex">
                            <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                            <div>
                              <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                              <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                            </div>
                          </div>
                        </div>
                        <div class="w-1/3">
                          <div class="w-16 rounded-full bg-blue-100 py-2 px-4 mx-auto">
                            <div class="p-1 rounded-full bg-blue-200"></div>
                          </div>
                        </div>
                        <div class="w-1/3">
                          <div class="h-2 w-8 bg-gray-100 rounded-full mx-auto"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="w-full absolute left-0 bottom-0 ml-1" style="transform: rotate(-8deg); z-index: 1; margin-bottom: -360px">
                    <div class="grid--gray h-48 w-48"></div>
                  </div>
                </div>

                <div class="md:hidden w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow">
                  <div class="h-4 bg-gray-200 absolute top-0 left-0 right-0 rounded-t-lg flex items-center">
                    <span class="h-2 w-2 rounded-full bg-red-500 inline-block mr-1 ml-2"></span>
                    <span class="h-2 w-2 rounded-full bg-orange-400 inline-block mr-1"></span>
                    <span class="h-2 w-2 rounded-full bg-green-500 inline-block mr-1"></span>
                  </div>
                  <div class="w-32 bg-gray-100 px-2 py-8" style="height: 340px">
                    <div class="h-2 w-16 bg-gray-300 rounded-full mb-4"></div>
                    <div class="flex items-center mb-4">
                      <div class="h-5 w-5 rounded-full bg-gray-300 mr-3 flex-shrink-0"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-300 rounded-full"></div>
                      </div>
                    </div>

                    <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                    <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                    <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                    <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                    <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                    <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                    <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                    <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                  </div>
                  <div class="flex-1 px-4 py-8">
                    <h2 class="text-xs text-gray-700 font-bold mb-1">Popular Payments</h2>
                    <div class="flex mb-5">
                      <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                      <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                      <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                      <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                    </div>

                    <div class="flex flex-wrap -mx-2 mb-5">
                      <div class="w-1/3 px-2">
                        <div class="p-3 rounded-lg bg-white shadow">
                          <div class="w-6 h-6 rounded-full bg-gray-200 mb-2"></div>
                          <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3 px-2">
                        <div class="p-3 rounded-lg bg-white shadow">
                          <div class="w-6 h-6 rounded-full bg-gray-200 mb-2"></div>
                          <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3 px-2">
                        <div class="p-3 rounded-lg bg-white shadow">
                          <div class="w-6 h-6 rounded-full bg-gray-200 mb-2"></div>
                          <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                    </div>

                    <h2 class="text-xs text-gray-700 font-bold mb-1">Popular Payments</h2>

                    <div class="w-full flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3">
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="h-5 w-5 rounded-full bg-gray-200 mr-3 flex-shrink-0"></div>
                          <div>
                            <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                            <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div class="w-16 rounded-full bg-green-100 py-2 px-4 mx-auto">
                          <div class="p-1 rounded-full bg-green-200"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div class="h-2 w-10 bg-gray-100 rounded-full mx-auto"></div>
                      </div>
                    </div>

                    <div class="flex flex-wrap justify-between items-center py-3">
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="h-5 w-5 rounded-full bg-gray-200 mr-3 flex-shrink-0"></div>
                          <div>
                            <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                            <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div class="w-16 rounded-full bg-orange-100 py-2 px-4 mx-auto">
                          <div class="p-1 rounded-full bg-orange-200"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div class="h-2 w-16 bg-gray-100 rounded-full mx-auto"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-3 md:hidden absolute right-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-10 py-6" style="z-index: 2; margin-bottom: -380px">
                  <div class="bg-indigo-800 mx-auto rounded-lg w-20 pt-3 mb-12 relative">
                    <div class="h-3 bg-white"></div>

                    <div class="text-right my-2">
                      <div class="inline-flex w-3 h-3 rounded-full bg-white -mr-2"></div>
                      <div class="inline-flex w-3 h-3 rounded-full bg-indigo-800 border-2 border-white mr-2"></div>
                    </div>

                    <div class="-ml-4 -mb-6 absolute left-0 bottom-0 w-16 bg-green-700 mx-auto rounded-lg pb-2 pt-3">
                      <div class="h-2 bg-white mb-2"></div>
                      <div class="h-2 bg-white w-6 ml-auto rounded mr-2"></div>
                    </div>
                  </div>

                  <div class="text-gray-800 text-center text-sm">Payment for <br />Internet</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg class="fill-current text-white hidden md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill-opacity="1" d="M0,224L1440,32L1440,320L0,320Z"></path>
        </svg>
      </div>
    </div>
  </body>
</html>
