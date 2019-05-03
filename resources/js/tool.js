Nova.booting((Vue, router, store) => {
    Vue.component('custom-detail-toolbar', require('./components/CustomDetailToolbar'));
    Vue.component('users-detail-toolbar', require('./components/UsersDetailToolbar'));
});
