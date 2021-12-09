<template>
<div>
    <div class="bg-white overflow-auto">
            <table class="table">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Room</th>
    <th scope="col">Price/Night</th>
    <th scope="col">Facilites</th>
    <th scope="col">Available</th>
    <th scope="col" class="text-center">Action</th>
    </tr>
</thead>
<tbody>
    <tr v-for="(item, index) in rooms" :key="index">
        <th scope="row">{{ index+1  }}</th>
        <td>{{  item.tipe  }}</td>
        <td>{{  item.harga  }}</td>
        <td>{{  item.fasilitas  }}</td>
        <td>{{  item.jumlah  }}</td>
        <td><div class="text-center">
                <a href="" class="btn btn-outline-warning">edit</a>
                <button type="button" class="btn btn-outline-danger">delete</button>
            </div>
        </td>
    </tr>
</tbody>
</table>
    </div>
</div>
</template>

<script>


export default {
    data(){
        return {
            rooms:{}
        }
    },
    mounted(){
        // axios.get("/api/room").then((response)=>{
        //     console.log(response);
        // });
        this.getRoom()
    },
    methods:{
        getRoom:function(){
            axios.get("/api/room").then((response)=>{
                this.rooms=response.data.data
            });
        }
    }

};
</script>

<style scoped>
.product-card {
width: 500px;
margin: auto;
}
</style>
