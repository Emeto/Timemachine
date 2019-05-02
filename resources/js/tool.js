Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'timemachine',
            path: '/timemachine',
            component: require('./components/Tool'),
        },
    ]);

    Vue.component('custom-detail-toolbar', require('./components/CustomDetailToolbar'));
    Vue.component('users-detail-toolbar', require('./components/UsersDetailToolbar'));
});
