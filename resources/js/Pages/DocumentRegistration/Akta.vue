<template>
    <layout title="Pendaftaran Akta">
        <main-menu active="registration" />
        <h1 class="text-3xl text-center uppercase">Pembuatan Akta Kelahiran</h1>
        <card class="w-full sm:w-1/2 md:w-2/5 mx-auto p-2" face="blue">
            <input-file
                name="surat_kelahiran"
                label="Surat Kelahiran"
                @input="appendFiles"
            />
            <input-file
                name="akta_ayah"
                label="Akta Ayah"
                @input="appendFiles"
            />
            <input-file name="akta_ibu" label="Akta Ibu" @input="appendFiles" />
            <input-file
                name="kartu_keluarga"
                label="KK Orang Tua"
                @input="appendFiles"
            />
            <input-file name="ktp_ayah" label="KTP Ayah" @input="appendFiles" />
            <input-file name="ktp_ibu" label="KTP Ibu" @input="appendFiles" />
            <input-file
                name="buku_nikah"
                label="Buku Nikah"
                @input="appendFiles"
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
                service: "Akta Kelahiran"
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
                !this.fields.akta_ayah ||
                !this.fields.akta_ibu ||
                !this.fields.kartu_keluarga ||
                !this.fields.ktp_ayah ||
                !this.fields.ktp_ibu ||
                !this.fields.buku_nikah
            ) {
                alert("Silakan pilih file untuk semua isian.");
                return;
            }

            let formFields = new FormData();
            Object.keys(this.fields).forEach(key => {
                formFields.append(key, this.fields[key]);
            });

            this.$inertia.post(route("registration.akta"), formFields);
        }
    }
};
</script>
