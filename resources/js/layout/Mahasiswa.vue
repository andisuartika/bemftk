<template>
    <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
        <sidebar />
        <navbar />
        <div class="relative ml-4 bg-blueGray-100">
            <div class="px-4 md:px-10 mx-auto w-full m-24">
                <router-view />
            </div>
        </div>
    </div>
</template>
<script>
import Sidebar from "../components/Sidebar.vue";
import Navbar from "../components/Navbar.vue";

export default {
    name: "layout",
    components: {
        Sidebar,
        Navbar,
    },
};
</script>

<style></style>
