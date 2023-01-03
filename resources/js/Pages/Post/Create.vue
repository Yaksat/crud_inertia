<template>
        <h1 class="text-lg mb-2">Create</h1>
        <div class="mb-8">
            <Link :href="route('post.index')" class="text-sky-500 text-sm mb-8">Back</Link>
        </div>
        <form @submit.prevent="store">
            <div class="mb-4">
                <input v-model="title" class="w-full rounded-full border-gray-400" type="text" placeholder="title">
                <div class="text-red-600 text-sm" v-if="errors.title">{{ errors.title }}</div>
            </div>
            <div class="mb-4">
                <textarea v-model="content" class="w-full rounded-full border-gray-400" placeholder="content"></textarea>
                <div class="text-red-600 text-sm" v-if="errors.content">{{ errors.content }}</div>
            </div>
            <div>
                <button class="ml-auto hover:bg-white hover:text-sky-500 border border-sky-500 block text-white p-2 bg-sky-500 rounded-full text-center w-32" type="submit">Store</button>
            </div>
        </form>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Index",

    layout: MainLayout,

    components: {
        Link
    },

    props: [
        'errors'
    ],

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
