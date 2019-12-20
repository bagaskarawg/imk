<template>
    <layout title="Persyaratan">
        <main-menu active="requirements" />
        <div class="flex">
            <div class="w-full sm:w-1/3">
                <h1 class="text-xl text-center w-full border-b">Akta Kelahiran</h1>
                <ul class="text-center">
                    <li><icon /> Surat Kelahiran</li>
                    <li><icon /> Akta Ayah</li>
                    <li><icon /> Akta Ibu</li>
                    <li><icon /> KK Orang Tua</li>
                    <li><icon /> KTP Ayah</li>
                    <li><icon />KTP Ibu</li>
                    <li><icon /> Buku Nikah</li>
                </ul>
            </div>
            <div class="w-full sm:w-1/3">
                <h1 class="text-xl text-center w-full border-b">Kartu Tanda Penduduk</h1>
                <ul class="text-center">
                    <li><icon /> Surat Kelahiran</li>
                    <li><icon /> Akta Kelahiran</li>
                    <li><icon /> Kartu Keluarga</li>
                    <li><icon /> Foto</li>
                </ul>
            </div>
            <div class="w-full sm:w-1/3">
                <h1 class="text-xl text-center w-full border-b">Kartu Keluarga</h1>
                <ul class="text-center">
                    <li><icon /> Surat Kelahiran</li>
                    <li><icon /> Buku Nikah</li>
                    <li><icon /> Surat Cerai (tidak wajib)</li>
                    <li><icon /> Akta Lahir Anak (tidak wajib)</li>
                </ul>
            </div>
        </div>
    </layout>
</template>
<script>
import { Layout, MainMenu, Icon } from "@/Shared";

export default {
    components: {
        Layout,
        MainMenu,
        Icon,
    },
    methods: {
        print() {
            window.print();
        }
    }
};
</script>
