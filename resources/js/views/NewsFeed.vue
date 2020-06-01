<template>
    <div class="flex flex-col items-center py-4">
        <NewPost/>
    </div>
</template>

<script>
    import NewPost from "./NewPost";
    export default {
        name: "NewsFeed",
        components: {
            NewPost,
        }
    }
</script>

<style scoped>

</style>
