<template>
    <div class="bg-primary p-5 clearfix text-white">
        <div class="logo float-left">
            <img src="/img/logo.png" alt="Logo" class="float-left mr-5" />
            <div class="float-left">
                <p>Selamat datang</p>
                <p>Di Dinas Kependudukan dan Pencatatan Sipil</p>
                <p>Kabupaten Cianjur</p>
            </div>
        </div>
        <div class="navbar float-right">
            <inertia-link :href="route('home')" class="hover:underline">
                <img src="/img/home.png" alt="Beranda" class="w-4 h-4 mt-1 mr-1 float-left" /> Beranda
            </inertia-link>
            |
            <inertia-link :href="route('login')" class="hover:underline">Masuk</inertia-link>
            |
            <inertia-link :href="route('register')" class="hover:underline">Daftar</inertia-link>
        </div>
    </div>
</template>

<script>
export default {
}
</script>