<template>
    <layout title="Pendaftaran KK">
        <main-menu active="registration" />
        <h1 class="text-3xl text-center uppercase">
            Pembuatan Kartu Keluarga (KK)
        </h1>
        <card class="w-full sm:w-1/2 md:w-1/3 mx-auto p-2" face="blue">
            <input-file
                name="surat_kelahiran"
                label="Surat Kelahiran"
                @input="appendFiles($event, 'surat_kelahiran')"
            />
            <input-file
                name="buku_nikah"
                label="Buku Nikah"
                @input="appendFiles($event, 'buku_nikah')"
            />
            <input-file
                name="surat_cerai"
                label="Surat Cerai (Tidak wajib)"
                @input="appendFiles($event, 'surat_cerai')"
            />
            <input-file
                name="akta_kelahiran"
                label="Akta Lahir Anak (Tidak wajib)"
                @input="appendFiles($event, 'akta_kelahiran')"
            />
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
    data() {
        return {
            fields: {
                service: "Kartu Keluarga"
            }
        };
    },
    methods: {
        appendFiles(files, fieldName) {
            this.fields[fieldName] = files.length > 0 ? files[0] : null;
        },
        submit() {
            if (!this.fields.surat_kelahiran || !this.fields.buku_nikah) {
                alert(
                    "Silakan pilih file untuk Surat Kelahiran dan Buku Nikah"
                );
                return;
            }

            let formFields = new FormData();
            Object.keys(this.fields).forEach(key => {
                formFields.append(key, this.fields[key]);
            });

            this.$inertia.post(route("registration.kk"), formFields);
        }
    }
};
</script>
