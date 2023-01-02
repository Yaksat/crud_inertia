<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Create</h1>
        <form @submit.prevent="store">
            <div class="mb-4">
                <input v-model="title" class="w-full rounded-full border-gray-400" type="text" placeholder="title">
            </div>
            <div class="mb-4">
                <textarea v-model="content" class="w-full rounded-full border-gray-400" placeholder="content"></textarea>
            </div>
            <div>
                <button class="ml-auto hover:bg-white hover:text-sky-500 border border-sky-500 block text-white p-2 bg-sky-500 rounded-full text-center w-32" type="submit">Store</button>
            </div>
        </form>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Index",
    components: {
        Link
    },

    data() {
      return {
          title: '',
          content: '',
      }
    },

    methods: {
        store() {
            this.$inertia.post('/posts', {title: this.title, content: this.content})
        }
    }
}
</script>

<style scoped>

</style>
