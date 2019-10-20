<template>
    <layout title="Masuk">
        <div class="flex">
            <div class="w-1/3"></div>
            <div class="border border-black border-2 shadow-lg bg-secondary w-1/3 p-3 text-center">
                <h1 class="text-3xl mb-5">Selamat datang di Disdukcapil</h1>
                <div class="mb-3">
                    <input type="text" class="bg-secondary border border-black p-2 rounded-lg w-56 max-w-full placeholder-gray-600 text-center" placeholder='"Masukkan Nama User"'>
                </div>
                <div class="mb-3">
                    <input type="password" class="bg-secondary border border-black p-2 rounded-lg w-56 max-w-full placeholder-gray-600 text-center" placeholder='"Masukkan Kata Sandi"'>
                </div>
                <button class="block bg-tertier hover:bg-green-700 w-32 mx-auto p-3 rounded-lg text-white uppercase">
                    <img src="/img/icon-login.png" alt="Masuk" class="inline w-6 h-6">
                    Masuk
                </button>
                <p class="block">atau</p>
                <inertia-link :href="route('register')" class="block bg-tertier hover:bg-green-700 w-32 mx-auto p-3 rounded-lg text-white uppercase">
                    <img src="/img/icon-signup.png" alt="Daftar" class="inline w-6 h-6">
                    Daftar
                </inertia-link>
                <div class="clearfix mt-8">
                    <label class="block float-left">
                        <label class="underline">
                            <input type="checkbox"> Ingatkan saya masuk
                        </label>
                    </label>
                    <div class="block float-right">
                        <inertia-link href="#" class="underline">Lupa Kata Sandi?</inertia-link>
                    </div>
                </div>
            </div>
            <div class="w-1/3 mx-3 px-3 border-l border-blue-400 h-full pb-3 text-xl">
                <h1 class="text-blue-700 mb-3">Informasi</h1>
                <p class="mb-3">
                    <span class="text-red-600">*</span>
                    Anda dapat masuk menggunakan nomor ponsel yang terhubung dengan akun Anda.
                </p>
                <p class="mb-3">
                    <span class="text-red-600">*</span>
                    Pastikan Anda menulis dengan benar.
                </p>
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