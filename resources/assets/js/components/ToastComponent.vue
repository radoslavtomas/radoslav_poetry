<template>
	<div class="toast"></div>
</template>

<script>
    export default {
        mounted() {
            this.$toast.open({
				message: this.msg,
                type: 'is-success'
            });
        },
		props: ['msg']
    }
</script>