<template>
    <layout title="Beranda">
        <main-menu class="mb-5" />
        <h1 class="text-3xl text-center w-full">Apa yang ingin Anda buat?</h1>
        <div class="sm:flex sm:justify-between sm:content-center sm:flex-wrap sm:h-48 mx-40">
            <inertia-link :href="route('home')" class="text-center text-lg">
                <img src="/img/icon-akta.png" class="h-40" alt="Akta Kelahiran">
                Akta Kelahiran
            </inertia-link>
            <inertia-link :href="route('home')" class="text-center text-lg">
                <img src="/img/icon-ktp.png" class="h-40" alt="Kartu Tanda Pendu">
                Kartu Tanda Penduduk
            </inertia-link>
            <inertia-link :href="route('home')" class="text-center text-lg">
                <img src="/img/icon-kk.png" class="h-32 my-4" alt="Kartu Keluarga">
                Kartu Keluarga
            </inertia-link>
        </div>
    </layout>
</template>

<script>
import { Layout, MainMenu } from '@/Shared'

export default {
    components: {
        Layout,
        MainMenu,
    }
}
</script>