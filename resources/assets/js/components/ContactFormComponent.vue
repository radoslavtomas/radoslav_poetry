<template>

	<section>
		<b-field label="Name">
			<b-input value=""></b-input>
		</b-field>

		<b-field label="Email">
			<b-input type="email"
					 value="">
			</b-input>
		</b-field>

		<b-field label="Message">
			<b-input type="textarea"></b-input>
		</b-field>
	</section>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
