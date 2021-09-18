<template>
    <h1 v-if="show">{{ one }}</h1>
    <h1 v-else>{{ two }}</h1>
    <button v-on:click="check">Add 1</button>
    <ul>
        <li v-for="list in lists" :key="list.id">
          {{ list.id }}
        </li>
    </ul>
</template>
<script>
//import Vue-axios from 'axios';
//import Vue from 'vue'
import axios from 'axios'
export default {
  name : 'asad',
  data(){
    return {
      one: 'asad',
      two: 'Asad is not',
      lists:null,
      show:true,
    }
  },
  mounted(){
      axios.get('http://localhost:8000/api/list').then(response =>{
				this.lists = response,
        console.log(this.lists)
			})

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