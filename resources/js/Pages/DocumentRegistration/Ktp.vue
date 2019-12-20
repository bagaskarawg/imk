<template>
    <layout title="Pendaftaran KTP">
        <main-menu active="registration" />
        <h1 class="text-3xl text-center uppercase">Pembuatan KTP-el</h1>
        <card class="w-full sm:w-1/2 md:w-1/3 mx-auto p-2" face="blue">
            <input-file
                name="surat_kelahiran"
                label="Surat Kelahiran"
                @input="appendFiles"
            />
            <input-file
                name="akta_kelahiran"
                label="Akta Kelahiran"
                @input="appendFiles"
            />
            <input-file
                name="kartu_keluarga"
                label="Kartu Keluarga"
                @input="appendFiles"
            />
            <input-file name="foto" label="Foto" @input="appendFiles" />
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
                service: "Kartu Tanda Penduduk"
            }
        };
    },
    methods: {
        appendFiles(events) {
            let files = events.target.files;
            let fieldName = events.target.name;
            this.fields[fieldName] = files.length > 0 ? files[0] : null;
        },
        submit() {
            if (
                !this.fields.surat_kelahiran ||
                !this.fields.foto ||
                !this.fields.kartu_keluarga ||
                !this.fields.akta_kelahiran
            ) {
                alert("Silakan pilih file untuk semua isian.");
                return;
            }

            let formFields = new FormData();
            Object.keys(this.fields).forEach(key => {
                formFields.append(key, this.fields[key]);
            });

            this.$inertia.post(route("registration.ktp"), formFields);
        }
    }
};
</script>
