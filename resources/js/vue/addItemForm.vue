<template>
    <div>
    <form>
      <div class="form-row align-items-center input-group inputdata">
        <div class="col-auto">
          <input
            type="text"
            v-model="item.name"
            v-on:keyup.enter="addItem()" 
            class="form-control"
            id="inputItem"
            placeholder="Typ hier"
          />
        </div>

        <div class="col-auto">
          <button type="submit" class="btn btn-secondary">
            <font-awesome-icon
              icon="plus-square"
              @click="addItem()"
              :class="[item.name ? 'active' : 'inactive', 'plus']"
            />
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
    data: function(){
        return {
            item: {
                name: ""
            }
        }
    },

    methods: {
        addItem(){
            if(this.item.name == ''){
                return;
            }

            axios.post('api/item/store', {
                item: this.item
            })
            .then(response => {
                if(response.status == 201){
                    this.item.name = "";
                    this.$emit('reloadlist');
                }
            })
            .catch ( error=>{
                console.log(error);
            })
        }
    }
}
</script>

<style scoped>
button {
    margin-left:10px;
}

.active {
  color: #00ce25;
}

.inactive {
  color: #999999;
}

</style>