<template>
    <div>
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">
                    {{ judul }}
                    <br />
                    <small>{{ count }} bahasan</small>
                    <small>{{ slug }} bahasan</small>
                </h3>
                <router-link
                    :to="{ name: 'kitab.all', params: { slug: slug } }"
                    class="btn btn-success"
                >Buka Selengkapnya</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["judul", "count", "slug"],
};
</script>

<style>
</style>