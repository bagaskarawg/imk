<template>
    <layout title="Aktivasi Akun" :auth="false">
        <card title="Aktivasi Akun">
            <div class="flex">
                <div class="w-2/3">
                    <input-text label="Kode Aktivasi" container-class="justify-center content-center" name="kode_aktivasi" v-model="fields.kode_aktivasi">
                        <p class="text-gray-500 text-sm">
                            Belum mendapatkan kode aktivasi?
                            <a href="#" class="underline text-blue-500">Kirim Ulang</a>
                        </p>
                    </input-text>
                    <div class="sm:flex mb-2">
                        <label class="sm:w-2/6 sm:text-right sm:pr-3" for="captcha">Captcha</label>
                        <div class="sm:w-4/6">
                            <img class="mb-1" :src="$page.captcha" />
                            <input type="text" id="captcha" name="captcha" v-model="fields.captcha" class="border border-black p-1 w-full sm:w-40">
                            <p class="text-gray-500 text-sm">Masukkan 4 kode huruf yang tampak pada layar.</p>
                        </div>
                    </div>
                    <div class="sm:flex mb-2">
                        <div class="sm:w-4/6 sm:ml-auto">
                            <input-button @click="submit()" class-name="inline-block" face="info">Aktifkan</input-button>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 mx-3 px-3 border-l border-blue-400 h-full pb-3 sm:text-xl">
                    <h1 class="text-blue-700 mb-3">Informasi</h1>
                    <p class="mb-3">
                        <span class="text-red-600">*</span>
                        Masukan kode aktifasi yang diterima melalui nomor ponsel yang telah Anda daftarkan.
                    </p>
                    <p class="mb-3">
                        <span class="text-red-600">*</span>
                        Pastikan anda menulis dengan benar.
                    </p>
                </div>
            </div>
        </card>
    </layout>
</template>

<script>
import { Card, Layout } from '@/Shared'
import { InputText, InputButton } from '@/Shared/Input'

export default {
    components: {
        Layout,
        Card,
        InputText,
        InputButton,
    },
    data: () => {
        return {
            kode_aktivasi: '',
            fields: {
                kode_aktivasi: '',
                captcha: '',
            }
        }
    },
    methods: {
        submit () {
            this.$inertia.visit(route('home'))
        }
    }
}
</script>