<template>
	<h1>Home</h1>
	<p v-for="a in this.prueba">{{a}}</p>
</template>

<script>
export default{
	data() {
		return {
			prueba: [
				 'a',
				 '2',
				 'a',
			]
		}
	}
}
</script>

