<template>
<div class="row">
        <div class="col-md-4 col-lg-3">
            <ul class="list-group">
                <li class="list-group-item" v-for="(evt,k) in events" :key="k">
                    <a href="#">{{evt.title}}</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <full-calendar :events="events" :config="config" @event-selected="eventSelected"></full-calendar>
        </div>
    </div>
</template>
<script>
export default {
    name: "basic-calendar",
    props: [

    ],
    data() {
        return {
            config: {
                themeSystem : 'bootstrap4',
                editable: true,
                droppable: true
            },
        events: [
            {
                title  : 'event1',
                start  : '2018-09-16',
                color  : 'darkblue',
                textColor: 'white'
            },
            {
                title  : 'event2',
                start  : '2018-09-16',
                end    : '2018-09-21',
            },
            {
                title  : 'event3',
                start  : '2018-09-09T12:30:00',
                allDay : false,
            },
        ]
        }
    },
    methods: {
        next(){
            this.$refs.calendar.$emit('refetch-events')
        },
        eventSelected(evt, view){

        },
        drop(ev, oth){
            console.log(ev, oth);
        }
    }
}
</script>

