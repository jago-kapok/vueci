<template>
  <div class="about">
    <button class="btn btn-primary" @click="getCount">Press me</button>
  </div>
</template>

<script>
	export default {
	  data() {
	  	return {
	  		count: 1
	  	}
	  },
	  mounted() {
	  	this.count = 2
	  },
	  methods: {
	  	getCount() {
	  		console.log(this.count)
	  	}
	  }
	}
</script>