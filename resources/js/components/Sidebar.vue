<template>
    <nav
        class="
            h-screen
            md:left-0
            md:block
            md:fixed
            md:top-0
            md:bottom-0
            md:overflow-y-auto
            md:flex-row md:flex-nowrap
            md:overflow-hidden
            bg-white
            flex flex-wrap
            justify-between
            items-center
            relative
            md:w-64
            z-10
        "
    >
        <div
            class="
                md:flex-col
                md:items-stretch
                md:min-h-full
                md:flex-nowrap
                px-0
                flex flex-wrap
                justify-between
                w-full
            "
        >
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a
                    class="
                        ml-6
                        text-lg
                        font-bold
                        text-gray-800
                        dark:text-gray-200
                    "
                    href=""
                >
                    E-SKP FTK
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <a
                            class="
                                text-gray-800
                                inline-flex
                                items-center
                                w-full
                                text-sm
                                font-semibold
                                transition-colors
                                duration-150
                                hover:text-gray-800
                                dark:hover:text-gray-200
                                dark:text-gray-100
                            "
                            href="#"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                ></path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <router-link
                            class="
                                inline-flex
                                items-center
                                w-full
                                text-sm
                                font-semibold
                                transition-colors
                                duration-150
                                hover:text-gray-800
                                dark:hover:text-gray-200
                            "
                            :to="{ name: 'dashboard' }"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                                ></path>
                            </svg>
                            <span class="ml-4">Point SKP</span>
                        </router-link>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="
                                inline-flex
                                items-center
                                w-full
                                text-sm
                                font-semibold
                                transition-colors
                                duration-150
                                hover:text-gray-800
                                dark:hover:text-gray-200
                            "
                            href="#"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                ></path>
                            </svg>
                            <span class="ml-4">Biodata</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="
                                inline-flex
                                items-center
                                w-full
                                text-sm
                                font-semibold
                                transition-colors
                                duration-150
                                hover:text-gray-800
                                dark:hover:text-gray-200
                            "
                            href="#"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                                ></path>
                            </svg>
                            <span class="ml-4">Data Prestasi</span>
                        </a>
                    </li>
                    <div class="px-6 my-6">
                        <button
                            class="
                                flex
                                items-center
                                justify-between
                                px-10
                                py-2
                                text-sm
                                font-medium
                                leading-5
                                text-white
                                transition-colors
                                duration-150
                                bg-purple-600
                                border border-transparent
                                rounded-lg
                                active:bg-purple-600
                                hover:bg-purple-700
                                focus:outline-none
                                focus:shadow-outline-purple
                            "
                        >
                            Absensi
                            <span class="ml-2" aria-hidden="true">+</span>
                        </button>
                    </div>
                </ul>
            </div>
            <!-- Mobile sidebar -->
            <!-- Backdrop -->
            <div
                x-show="isSideMenuOpen"
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="
                    fixed
                    inset-0
                    z-10
                    flex
                    items-end
                    bg-black bg-opacity-50
                    sm:items-center
                    sm:justify-center
                "
            ></div>
            <aside
                class="
                    fixed
                    inset-y-0
                    z-20
                    flex-shrink-0
                    w-64
                    mt-16
                    overflow-y-auto
                    bg-white
                    dark:bg-gray-800
                    md:hidden
                "
                x-show="isSideMenuOpen"
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-x-20"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 transform -translate-x-20"
                @click.away="closeSideMenu"
                @keydown.escape="closeSideMenu"
            >
                <div class="py-4 text-gray-500 dark:text-gray-400">
                    <a
                        class="
                            ml-6
                            text-lg
                            font-bold
                            text-gray-800
                            dark:text-gray-200
                        "
                        href="#"
                    >
                        E-SKP FTK
                    </a>
                    <ul class="mt-6">
                        <li class="relative px-6 py-3">
                            <span
                                class="
                                    absolute
                                    inset-y-0
                                    left-0
                                    w-1
                                    bg-purple-600
                                    rounded-tr-lg rounded-br-lg
                                "
                                aria-hidden="true"
                            ></span>
                            <a
                                class="
                                    inline-flex
                                    items-center
                                    w-full
                                    text-sm
                                    font-semibold
                                    transition-colors
                                    duration-150
                                    hover:text-gray-800
                                    dark:hover:text-gray-200
                                "
                                href="{{route('dashboardMahasiswa')}}"
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                    ></path>
                                </svg>
                                <span class="ml-4">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li class="relative px-6 py-3">
                            <a
                                class="
                                    inline-flex
                                    items-center
                                    w-full
                                    text-sm
                                    font-semibold
                                    transition-colors
                                    duration-150
                                    hover:text-gray-800
                                    dark:text-gray-100
                                "
                                href="{{route('pointskp.index')}}"
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                                    ></path>
                                </svg>
                                <span class="ml-4">Point SKP</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="
                                    inline-flex
                                    items-center
                                    w-full
                                    text-sm
                                    font-semibold
                                    transition-colors
                                    duration-150
                                    hover:text-gray-800
                                    dark:text-gray-100
                                "
                                href="{{ route('biodata.index')}}"
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                    ></path>
                                </svg>
                                <span class="ml-4">Biodata</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            <a
                                class="
                                    inline-flex
                                    items-center
                                    w-full
                                    text-sm
                                    font-semibold
                                    transition-colors
                                    duration-150
                                    hover:text-gray-800
                                    dark:hover:text-gray-200
                                "
                                href="#"
                            >
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                                    ></path>
                                </svg>
                                <span class="ml-4">Data Prestasi</span>
                            </a>
                        </li>
                    </ul>
                    <div class="px-6 my-6">
                        <button
                            class="
                                flex
                                items-center
                                justify-between
                                px-10
                                py-2
                                text-sm
                                font-medium
                                leading-5
                                text-white
                                transition-colors
                                duration-150
                                bg-purple-600
                                border border-transparent
                                rounded-lg
                                active:bg-purple-600
                                hover:bg-purple-700
                                focus:outline-none
                                focus:shadow-outline-purple
                            "
                        >
                            Absensi
                            <span class="ml-2" aria-hidden="true">+</span>
                        </button>
                    </div>
                </div>
            </aside>
        </div>
    </nav>
</template>

<script>
export default {};
</script>
