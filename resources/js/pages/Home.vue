<template>
    <div>
        <div class="jumbotron" style="margin-top: 25px">
            <center>
                <img src="/images/logo-kitab.png" alt class="img-fluid mb-3" />
                <h1>KitabMuslim.id</h1>
                <p style="color: #37474f">
                    Assalamualaikum. Selamat membaca.. Anda dapat menikmati segala fitur yang
                    terdapat pada website ini maupun pada Aplikasi Mobile tanpa iklan, pungutan biaya apapun
                </p>
                <form class="mt-3">
                    <input
                        type="text"
                        placeholder="Lakukan Pencarian Kata Kunci disini"
                        class="form-control"
                    />
                    <button type="submit" class="mt-3 btn btn-success">
                        <i class="fa fa-search"></i> Search
                    </button>
                </form>
            </center>
        </div>

        <div class="row">
            <div class="col-md-4" v-for="k in kitab" :key="k.id">
                <KitabCard
                    :judul="k.judul"
                    :count="k.count"
                    :deskripsi="k.deskripsi"
                    :slug="k.slug"
                />
            </div>
        </div>
    </div>
</template>

<script>
import KitabCard from "./components/KitabCard.vue";

export default {
    components: {
        KitabCard,
    },

    data: () => ({
        kitab: [],
    }),

    mounted() {
        this.getKitab();
    },

    methods: {
        getKitab: function () {
            axios.get("/api/kitab").then((res) => {
                this.kitab = res.data;
            });
        },
    },
};
</script>

<style>
</style>