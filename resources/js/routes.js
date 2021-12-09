import Room from './components/pages/Room.vue';
import addRoom from './components/pages/addRoom.vue';
export const routes = [{
    name: 'room',
    path: 'vue/room',
    component: Room
},
{
    name: 'room.create',
    path: 'vue/room/create',
    component: addRoom
}]