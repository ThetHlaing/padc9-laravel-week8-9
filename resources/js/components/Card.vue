<template>
  <div class="row" v-if="isFormShown">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">{{title}}</span>
          <p>
            <slot></slot>
          </p>
        </div>
        
      </div>
    </div>
  </div>
</template>
<script>
export default {
    data(){
        return {
            isFormShown : true
        }
    },
    props : {
        title : {
            required : true
        }
    }

};
</script>