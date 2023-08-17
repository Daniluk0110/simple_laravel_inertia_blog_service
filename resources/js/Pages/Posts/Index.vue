<script setup>
import {Head, Link} from "@inertiajs/vue3";

defineProps({posts: Object})
</script>

<template>
    <Head title="Posts"/>

    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg text-center pb-4 mb-5">Posts</h1>
        <div class="mb-8">
            <Link :href="route('posts.create')" class="hover:bg-white hover:text-sky-500 border border-sky-500 block p-2 w-32 bg-sky-500 rounded-full text-center text-white"
            >Add post</link>
        </div>
        <div v-if="posts">
            <div v-for="post in posts" class="mt-4 pt-4 border-t border-gray-400">
                <div>id: {{ post.id }}</div>
                <div>title: {{ post.title }}</div>
                <div>content: {{ post.content }}</div>
                <div class="text-sm text-right">date: {{ post.date }}</div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
