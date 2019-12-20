<template>
    <layout title="Pendaftaran Akta">
        <main-menu active="registration" />
        <h1 class="text-3xl text-center uppercase">Pembuatan Akta Kelahiran</h1>
        <card class="w-full sm:w-1/2 md:w-2/5 mx-auto p-2" face="blue">
            <input-file name="surat_kelahiran" label="Surat Kelahiran" />
            <input-file name="akta_ayah" label="Akta Ayah" />
            <input-file name="akta_ibu" label="Akta Ibu" />
            <input-file name="kk_orang_tua" label="KK Orang Tua" />
            <input-file name="ktp_ayah" label="KTP Ayah" />
            <input-file name="ktp_ibu" label="KTP Ibu" />
            <input-file name="buku_nikah" label="Buku Nikah" />
            <div class="flex justify-center">
                <button class="p-3 bg-blue-400" @click="submit()">
                    Cetak Nomor Antrian
                </button>
            </div>
        </card>
    </layout>
</template>

<script>
import { Layout, MainMenu, Card } from "@/Shared";
import { InputFile } from "@/Shared/Input";

export default {
    components: {
        Layout,
        MainMenu,
        Card,
        InputFile
    },
    methods: {
        submit() {
            this.$inertia.visit(route("registration.ticket"));
        }
    }
};
</script>
