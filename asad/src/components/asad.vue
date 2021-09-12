<template>
    <h1 v-if="show">{{ one }}</h1>
    <h1 v-else>{{ two }}</h1>
    <button v-on:click="check">Add 1</button>
</template>
<script>
export default {
  name : 'asad',
  data(){
    return {
      one: 'asad',
      two: 'Asad is not',
      show:true
    }
  },
  methods:{
    check(){
      this.show = !this.show
      //this.counter += 1;
      /*     
      if (this.show == false){
          this.show = true
      } else {
          this.show = false
      }
      */
    }
  }
}
</script>
