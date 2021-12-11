<template>
    <div>
        <div class="container mt-3">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <router-link :to="{ name: 'home' }" class="nav-link my-item">
                        <i class="fa fa-home"></i> Beranda
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{ name: 'tentang' }" class="nav-link my-item">
                        <i class="fa fa-id-card"></i> Tentang
                    </router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-item" href="#">
                        <i class="fa fa-mobile"></i> Mobile App
                    </a>
                </li>
            </ul>

            <div>
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style>
</style>