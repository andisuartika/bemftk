<!DOCTYPE html>
<html :class="{ 'theme-dark': light }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <!-- Scripts -->
    <script src="{{ asset('js/init-alpine.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full"
              src="{{ asset('img/asset/loginftk.jpg') }}"
              alt="Office"
            />
          </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
          <div class="flex items-center justify-center p-6 sm:p-32 md:w-1/2">
            <div class="w-full py-4 px-2">
              <div class="flex justify-center mb-8">
                <img src="{{ asset('img/asset/bemftk.png') }}" alt="BEMFTK" class="h-32" />
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Login
              </h1>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus 
                  placeholder="Email Address"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"
                  placeholder="***************"
                  type="password"
                />
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button
               type="submit"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                href="../index.html"
              >
                Log in
              </button>
              </form>
              <hr class="my-8" />

              <p class="mt-4">
                
                @if (Route::has('password.request'))
                    <a
                  class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:underline"
                  href="{{ route('password.request') }}"
                >
                  Lupa Password ?
                </a>
                @endif
              </p>
              <p class="mt-1">
                <a
                  class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:underline"
                  href="mailto:bemftkundiksha@gmail.com"
                >
                  Belum Punya Akun?
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
