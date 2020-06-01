<template>
    <div>
        <div class="w-100 h-64 overflow-hidden">
            <img src="/img/lauren-fleischmann-R2aodqJn3b8-unsplash.jpg" alt="" class="object-cover w-full">
        </div>
    </div>
</template>

<script>
    export default {
        name: "Show",
        data() {
            return {
                user: null,
                loading: true,
            }
        },
        mounted() {
            axios.get('/api/users/'.this.$route.params.userId)
                .then(res => {
                    this.user = res.data;
                })
                .catch(err => {
                    console.log('Unable to fetch the user from the server')
                })
                .finally(() => {
                    this.loading = false;
                });
            axios.get('/api/posts/' + this.$route.params.userId)
            .then(res => {
                this.posts = res.data;
                this.loading = false;
            })
            .catch(err => {
                console.log('Unable to fetch posts');
                this.loading = false
            })
        }
    }
</script>

<style scoped>

</style>
