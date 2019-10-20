<template>
    <layout title="Masuk">
        <div class="flex">
            <div class="border border-black border-2 shadow-lg w-2/3 sm:ml-auto sm:w-1/3 p-3 text-center">
                <h1 class="font-bold text-xl sm:text-3xl mb-5 uppercase">Selamat datang di Disdukcapil</h1>
                <input-text class="w-56 mb-3 p-2 text-center placeholder-gray-600" type="text" name="nama_user" v-model="nama_user" placeholder='"Masukkan Nama User"' />
                <input-text class="w-56 mb-3 p-2 text-center placeholder-gray-600" type="password" name="kata_sandi" v-model="kata_sandi" placeholder='"Masukkan Kata Sandi"' />
                <input-button class="bg-tertier hover:bg-green-700">
                    <img src="/img/icon-login.png" alt="Masuk" class="inline w-6 h-6">
                    Masuk
                </input-button>
                <p class="block">atau</p>
                <input-button :href="route('register')">
                    <img src="/img/icon-signup.png" alt="Daftar" class="inline w-6 h-6">
                    Daftar
                </input-button>
                <div class="clearfix mt-8">
                    <label class="block sm:float-left">
                        <label class="underline">
                            <input type="checkbox"> Ingatkan saya masuk
                        </label>
                    </label>
                    <div class="sm:float-right">
                        <inertia-link href="#" class="underline">Lupa Kata Sandi?</inertia-link>
                    </div>
                </div>
            </div>
            <div class="w-1/3 mx-3 px-3 border-l border-blue-400 h-full pb-3 sm:text-xl">
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
import { InputText, InputButton } from '@/Shared/Input'

export default {
    components: {
        Layout,
        InputText,
        InputButton,
    },
    data: () => {
        return {
            nama_user: '',
            kata_sandi: '',
        }
    }
}
</script>