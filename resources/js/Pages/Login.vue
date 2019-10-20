<template>
    <layout title="Masuk" :auth="false">
        <div class="flex">
            <div class="w-2/3 md:w-1/3 break-word sm:break-normal border border-black border-2 shadow-lg sm:ml-auto p-3 text-center">
                <h1 class="font-bold text-xl sm:text-3xl mb-5 uppercase">Selamat datang di Disdukcapil</h1>
                <input-text class-name="w-56 mb-3 p-2 text-center placeholder-gray-600" type="text" name="nama_user" v-model="nama_user" placeholder='"Masukkan Nama User"' />
                <input-text class-name="w-56 mb-3 p-2 text-center placeholder-gray-600" type="password" name="kata_sandi" v-model="kata_sandi" placeholder='"Masukkan Kata Sandi"' />
                <input-button @click="login()" class-name="block w-32 uppercase"><img src="/img/icon-login.png" alt="Masuk" class="inline w-6 h-6"> Masuk</input-button>
                <p>atau</p>
                <input-button class-name="block w-32 uppercase" :href="route('register')"><img src="/img/icon-signup.png" alt="Daftar" class="inline w-6 h-6"> Daftar</input-button>
                <div class="clearfix mt-8">
                    <label class="block sm:float-left underline"><input type="checkbox"> Ingatkan saya masuk</label>
                    <div class="sm:float-right"><inertia-link href="#" class="underline">Lupa Kata Sandi?</inertia-link></div>
                </div>
            </div>
            <div class="w-1/3 mx-3 px-3 border-l border-blue-400 h-full pb-3 sm:text-xl">
                <h1 class="text-blue-700 mb-3">Informasi</h1>
                <p class="mb-3"><span class="text-red-600">*</span> Anda dapat masuk menggunakan nomor ponsel yang terhubung dengan akun Anda.</p>
                <p class="mb-3"><span class="text-red-600">*</span> Pastikan Anda menulis dengan benar.</p>
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
    },
    methods: {
        login () {
            this.$inertia.visit(route('home'))
        }
    }
}
</script>