<template>
    <layout title="Masuk">
        <div class="border border-black bg-secondary w-1/3 mx-auto p-3 text-center">
            <h1 class="text-3xl mb-5">Selamat datang di Disdukcapil</h1>
            <div class="mb-3">
                <input type="text" class="bg-secondary text-gray-500 border border-black p-2 rounded-lg w-56 max-w-full" placeholder='"Masukkan Nama User"'>
            </div>
            <div class="mb-3">
                <input type="password" class="bg-secondary text-gray-500 border border-black p-2 rounded-lg w-56 max-w-full" placeholder='"Masukkan Kata Sandi"'>
            </div>
            <button class="block bg-tertier hover:bg-green-700 w-32 mx-auto p-3 rounded-lg text-white">Masuk</button>
            <p class="block">atau</p>
            <inertia-link :href="route('register')" class="block bg-tertier hover:bg-green-700 w-32 mx-auto p-3 rounded-lg text-white">Daftar</inertia-link>
            <div class="clearfix mt-8">
                <label class="block float-left">
                    <input type="checkbox"> Ingatkan saya masuk
                </label>
                <div class="block float-right">
                    <inertia-link href="#" class="underline">Lupa Kata Sandi?</inertia-link>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
    components: {
        Layout
    }
}
</script>