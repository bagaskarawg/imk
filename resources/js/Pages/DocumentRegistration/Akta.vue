<template>
    <layout title="Pendaftaran Akta">
        <main-menu active="registration" />
        <h1 class="text-3xl text-center uppercase">Pembuatan Akta Kelahiran</h1>
        <card class="w-1/3 mx-auto p-2" face="blue">
            <div class="flex justify-between mb-2">
                <label for="surat_kelahiran" class="w-40 max-w-full text-center rounded p-3 bg-red-600">Surat Kelahiran</label>
                <label for="surat_kelahiran" class="inline-block p-3 bg-green-500">
                    Pilih File
                    <input type="file" id="surat_kelahiran" class="hidden" name="surat_kelahiran" />
                </label>
            </div>
            <div class="flex justify-between mb-2">
                <label for="akta_orang_tua" class="w-40 max-w-full text-center rounded p-3 bg-red-600">Akta Orang Tua</label>
                <label for="akta_orang_tua" class="inline-block p-3 bg-green-500">
                    Pilih File
                    <input type="file" id="akta_orang_tua" class="hidden" name="akta_orang_tua" />
                </label>
            </div>
            <div class="flex justify-between mb-2">
                <label for="kk_orang_tua" class="w-40 max-w-full text-center rounded p-3 bg-red-600">KK Orang Tua</label>
                <label for="kk_orang_tua" class="inline-block p-3 bg-green-500">
                    Pilih File
                    <input type="file" id="kk_orang_tua" class="hidden" name="kk_orang_tua" />
                </label>
            </div>
            <div class="flex justify-between mb-2">
                <label for="ktp_orang_tua" class="w-40 max-w-full text-center rounded p-3 bg-red-600">KTP Orang Tua</label>
                <label for="ktp_orang_tua" class="inline-block p-3 bg-green-500">
                    Pilih File
                    <input type="file" id="ktp_orang_tua" class="hidden" name="ktp_orang_tua" />
                </label>
            </div>
            <div class="flex justify-center">
                <button class="p-3 bg-blue-400" @click="submit()">Cetak Nomor Antrian</button>
            </div>
        </card>
    </layout>
</template>

<script>
import { Layout, MainMenu, Card } from '@/Shared'

export default {
    components: {
        Layout,
        MainMenu,
        Card,
    },
    methods: {
        submit () {
            this.$inertia.visit(route('registration.ticket'))
        }
    }
}
</script>