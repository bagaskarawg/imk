<template>
    <div class="w-full h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('/img/background.jpg')">
        <div class="p-5 clearfix text-white">
            <img src="/img/logo.png" alt="Logo" class="float-left mr-5" />
            <div class="navbar float-right">
                <!-- <inertia-link :href="route('home')" class="hover:underline">
                    <img src="/img/home.png" alt="Beranda" class="w-4 h-4 mt-1 mr-1 float-left" /> Beranda
                </inertia-link>
                | -->
                <inertia-link :href="route('login')" class="hover:underline">Masuk</inertia-link>
                |
                <inertia-link :href="route('register')" class="hover:underline">Daftar</inertia-link>
            </div>
        </div>
        <div class="text-center text-white mb-8">
            <h1 class="text-3xl sm:text-6xl md:leading-tight md:text-8xl" style="font-family: freehand521;">Selamat Datang</h1>
            <h2 class="text-2xl sm:text-5xl md:leading-tight" style="font-family: calibri;">Di Disdukcapil Kabupaten Cianjur</h2>
        </div>
        <div class="flex justify-center mx-auto my-24 sm:my-auto w-3/6">
            <inertia-link :href="route('login')" class="text-center text-white mr-10">
                <img src="/img/login.png" alt="Masuk" class="max-w-full w-32 mb-3" />
                <p class="font-bold text-xl font-broadsheet">Masuk</p>
            </inertia-link>
            <inertia-link href="/daftar" class="text-center text-white">
                <img src="/img/register.png" alt="Daftar" class="max-w-full w-32 mb-3" />
                <p class="font-bold text-xl font-broadsheet">Daftar</p>
            </inertia-link>
        </div>
        <div class="md:w-4/6 text-white p-5 absolute bottom-0 text-sm sm:text-base">
            <h4 class="font-bold underline text-lg sm:text-xl mb-5">Informasi</h4>
            <p>Silakan pilih masuk (jika sudah pernah daftar).</p>
            <p>Jika belum, silakan pilih daftar (pastikan anda mengisi formulir dengan benar).</p>
        </div>
    </div>
</template>

<script>
export default {
    components: {
    },
    mounted () {
        document.title = `Selamat Datang - ${this.$page.app.name}`
    }
}
</script>