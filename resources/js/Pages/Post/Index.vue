<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Posts</h1>
        <div>
            <Link :href="route('post.create')" class="hover:bg-white hover:text-sky-500 border border-sky-500 block text-white p-2 bg-sky-500 rounded-full text-center w-32"> Add post </Link>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Index",
    components: {
        Link
    }
}
</script>

<style scoped>

</style>
