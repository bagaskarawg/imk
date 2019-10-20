<template>
    <div class="bg-primary p-2 sm:p-5 clearfix text-white">
        <div class="w-full sm:w-2/3 sm:float-left">
            <inertia-link :href="route('welcome')">
                <img src="/img/logo.png" alt="Logo" class="float-left mr-2 sm:mr-5" />
            </inertia-link>
            <div class="w-auto">
                <p>Selamat datang
                <p>Di Dinas Kependudukan dan Pencatatan Sipil</p>
                <p>Kabupaten Cianjur</p>
            </div>
        </div>
        <hr class="my-1 sm:hidden" />
        <div class="text-center sm:float-right">
            <inertia-link :href="route('home')" class="hover:underline">
                <img src="/img/home.png" alt="Beranda" class="w-4 h-4 -mt-1 inline-block" /> Beranda
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