<template>
    <div class="container col-md-4 bg-light">
        <div class="heading row bg-dark">
            <h2 class="text-white text-center" id="title"> Todo List </h2>
        </div>

        <hr> 

        <div class="row">
            <add-item-form 
                v-on:reloadlist="getList()"
                />
        </div>

        <hr> 
        <div class="row">
            <list-view 
            :items="items"
            v-on:reloadlist="getList()"
            />
        </div>
        
    </div>
</template>
</template>

<script>
import addItemForm from './addItemForm.vue'
import listView from './listView.vue'

export default {
    components: {
        addItemForm,
        listView
    },
    data: function(){
        return {
            items: []
        }
    },
    methods: {
        getList() {
            axios.get('api/items')
            .then(response =>{
                this.items = response.data
            })
            .catch (error =>{
                console.log(error);
            })
        }
    },
    created(){
        this.getList();
    }
}
</script>

<style scoped>
.container{
    margin-top:10px;
}
</style>