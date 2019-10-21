<template>
    <layout title="Pendaftaran KK">
        <main-menu active="registration" />
        <h1 class="text-3xl text-center uppercase">Pembuatan Kartu Keluarga (KK)</h1>
        <card class="w-1/3 mx-auto p-2" face="blue">
            <input-file name="surat_kelahiran" label="Surat Kelahiran" />
            <input-file name="buku_nikah" label="Buku Nikah" />
            <input-file name="surat_cerai" label="Surat Cerai" />
            <div class="flex justify-center">
                <button class="p-3 bg-blue-400" @click="submit()">Cetak Nomor Antrian</button>
            </div>
        </card>
    </layout>
</template>

<script>
import { Layout, MainMenu, Card } from '@/Shared'
import { InputFile } from '@/Shared/Input'

export default {
    components: {
        Layout,
        MainMenu,
        Card,
        InputFile
    },
    methods: {
        submit () {
            this.$inertia.visit(route('registration.ticket'))
        }
    }
}
</script>