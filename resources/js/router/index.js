import Dashboard from "../views/mahasiswa/Dashboard.vue";

export default {
    mode: "history",
    linkActiveClass: "active",

    routes: [
        {
            path: "/dashboard",
            name: "dashboard",
            component: Dashboard,
        },
    ],
};
