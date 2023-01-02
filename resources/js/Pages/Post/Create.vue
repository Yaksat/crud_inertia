<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Create</h1>
        <form>
            <div class="mb-4">
                <input class="w-full rounded-full border-gray-400" type="text" placeholder="title">
            </div>
            <div>
                <textarea class="w-full rounded-full border-gray-400" placeholder="content"></textarea>
            </div>
            <div>
                <button class="hover:bg-white hover:text-sky-500 border border-sky-500 block text-white p-2 bg-sky-500 rounded-full text-center w-32" type="submit">Store</button>
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
    }
}
</script>

<style scoped>

</style>
