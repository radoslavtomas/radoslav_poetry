<template>
	<section>
		<b-field>
			<b-upload v-model="dropFiles"
					  :name=id_name
					  multiple
					  drag-drop>
				<section class="section">
					<div class="content has-text-centered">
						<p>
							<i class="fa fa-upload"></i>
						</p>
						<p>Drop your file or click to upload</p>
					</div>
				</section>
			</b-upload>
		</b-field>

		<div class="tags">
            <span v-for="(file, index) in dropFiles"
				  :key="index"
				  class="tag is-primary" >
                {{file.name}}
                <button class="delete is-small"
						type="button"
						@click="deleteDropFile(index)">
                </button>
            </span>
		</div>
	</section>
</template>

<script>
    export default {
        data() {
            return {
                dropFiles: []
            }
        },
        methods: {
            deleteDropFile(index) {
                this.dropFiles.splice(index, 1)
            }
        },
		props: ['id_name']
    }
</script>

<style scoped>
	.upload .upload-draggable .section {
		padding: 1rem 0.5rem;
	}

	.tag {
		margin: 0.5rem auto 0.5rem auto;
	}
</style>
