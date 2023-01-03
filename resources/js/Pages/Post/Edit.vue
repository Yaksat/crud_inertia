<template>
        <h1 class="text-lg mb-2">Update</h1>
        <div class="mb-8">
            <Link :href="route('post.index')" class="text-sky-500 text-sm mb-8">Back</Link>
        </div>
        <form @submit.prevent="update">
            <div class="mb-4">
                <input v-model="title" class="w-full rounded-full border-gray-400" type="text" placeholder="title">
            </div>
            <div class="mb-4">
                <textarea v-model="content" class="w-full rounded-full border-gray-400" placeholder="content"></textarea>
            </div>
            <div>
                <button class="ml-auto hover:bg-white hover:text-sky-500 border border-sky-500 block text-white p-2 bg-sky-500 rounded-full text-center w-32" type="submit">Update</button>
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
        'post'
    ],

    data() {
      return {
          title: this.post.title,
          content: this.post.content,
      }
    },

    methods: {
        update() {
            this.$inertia.patch(`/posts/${this.post.id}`, {title: this.title, content: this.content})
        }
    }
}
</script>

<style scoped>

</style>
