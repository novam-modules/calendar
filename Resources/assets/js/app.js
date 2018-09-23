import FullCalendar from 'vue-full-calendar'
Vue.use(FullCalendar)

Vue.component('BasicCalendar', require('../components/BasicCalendar.vue'));

const calendar = new Vue({
    el: "#calendar"
});
