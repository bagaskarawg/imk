<template>
    <layout title="Beranda">
        <main-menu active="home" />
        <h1 class="text-3xl text-center w-full">Apa yang ingin Anda buat?</h1>
        <div class="sm:flex md:justify-between md:content-center md:flex-wrap md:h-48 md:mx-40">
            <inertia-link :href="route('registration.akta')" class="text-lg">
                <img src="/img/icon-akta.png" class="h-40 mx-auto" alt="Akta Kelahiran">
                <p class="text-center">Akta Kelahiran</p>
            </inertia-link>
            <inertia-link :href="route('registration.ktp')" class="text-lg">
                <img src="/img/icon-ktp.png" class="h-40 mx-auto" alt="Kartu Tanda Penduduk">
                <p class="text-center">Kartu Tanda Penduduk</p>
            </inertia-link>
            <inertia-link :href="route('registration.kk')" class="text-lg">
                <img src="/img/icon-kk.png" class="h-32 mx-auto my-4" alt="Kartu Keluarga">
                <p class="text-center">Kartu Keluarga</p>
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