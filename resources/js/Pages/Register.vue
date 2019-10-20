<template>
    <layout title="Daftar">
        <div class="flex">
            <div class="w-4/6 md:w-3/6 ml-auto border border-black p-3">
                <h1 class="font-bold text-xl sm:text-3xl mb-5 uppercase text-center">Daftar</h1>
                <input-text label="Nama Lengkap" name="nama_lengkap" v-model="fields.nama_lengkap" />
                <input-text label="Tempat Lahir" name="tempat_lahir" v-model="fields.tempat_lahir" />
                <div class="sm:flex mb-2">
                    <label class="sm:w-2/6 sm:text-right sm:pr-3" for="tgl_lahir">Tanggal Lahir</label>
                    <div class="sm:w-4/6">
                        <input-select name="tgl_lahir" v-model="fields.tgl_lahir" default-opt="Tgl" :options="31" />
                        <input-select name="bln_lahir" v-model="fields.bln_lahir" default-opt="Bln" :options="12" />
                        <input-select name="thn_lahir" v-model="fields.thn_lahir" default-opt="Thn" :options="years" className="w-20" />
                    </div>
                </div>
                <div class="sm:flex mb-2">
                    <label class="sm:w-2/6 sm:text-right sm:pr-3" for="laki_laki">Jenis Kelamin</label>
                    <div class="sm:w-4/6">
                        <label for="laki_laki">
                            <input type="radio" id="laki_laki" name="jenis_kelamin" v-model="fields.jenis_kelamin" value="l"> Laki-laki
                        </label>
                        <br />
                        <label for="perempuan">
                            <input type="radio" id="perempuan" name="jenis_kelamin" v-model="fields.jenis_kelamin" value="p"> Perempuan
                        </label>
                    </div>
                </div>
                <input-text label="No Ponsel" name="no_ponsel" v-model="fields.no_ponsel" />
                <input-text type="password" label="Kata Sandi" name="kata_sandi" v-model="fields.kata_sandi" />
                <input-text type="password" label="Kata Sandi Ulang" name="kata_sandi_ulang" v-model="fields.kata_sandi_ulang" />
                <div class="sm:flex mb-2">
                    <label class="sm:w-2/6 sm:text-right sm:pr-3" for="captcha">Captcha</label>
                    <div class="sm:w-4/6">
                        <img class="mb-1" :src="$page.captcha" />
                        <input type="text" id="captcha" name="captcha" v-model="fields.captcha" class="border border-black p-1 w-full sm:w-40">
                        <p>Masukkan 4 kode huruf yang tampak pada layar.</p>
                    </div>
                </div>
                <div class="sm:flex mb-2">
                    <div class="sm:w-4/6 sm:ml-auto">
                        <input-button @click="submit()" class-name="inline-block">Daftar</input-button>
                        <input-button @click="clearForm()" class-name="inline-block" face="danger">Hapus Isian</input-button>
                    </div>
                </div>
            </div>
            <div class="w-2/6 mx-3 px-3 border-l border-blue-400 h-full pb-3 sm:text-xl">
                <h1 class="text-blue-700 mb-3">Informasi</h1>
                <p class="mb-3">
                    <span class="text-red-600">*</span>
                    Masukan informasi yang diminta, dan pastikan Anda menulis dengan benar.
                </p>
                <p class="mb-3">
                    <span class="text-red-600">*</span>
                    Dengan mengeklik tombol daftar, Anda menyetujui ketentuan kami an bahwa Anda telah membaca kebijakan kami.
                </p>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '@/Shared/Layout'
import { InputText, InputButton, InputSelect } from '@/Shared/Input'

export default {
    components: {
        Layout,
        InputText,
        InputButton,
        InputSelect,
    },
    computed : {
        years () {
            const year = new Date().getFullYear()
            return Array.from({length: year - 1900}, (value, index) => 1901 + index).reverse()
        }
    },
    data: () => {
        return {
            fields: {
                nama_lengkap: '',
                tempat_lahir: '',
                tgl_lahir: '',
                bln_lahir: '',
                thn_lahir: '',
                jenis_kelamin: '',
                no_ponsel: '',
                kata_sandi: '',
                kata_sandi_ulang: '',
                captcha: '',
            }
        }
    },
    methods: {
        clearForm () {
            this.fields = {
                nama_lengkap: '',
                tempat_lahir: '',
                tgl_lahir: '',
                bln_lahir: '',
                thn_lahir: '',
                jenis_kelamin: '',
                no_ponsel: '',
                kata_sandi: '',
                kata_sandi_ulang: '',
                captcha: '',
            }
        },
        submit () {
            this.$inertia.visit(route('activation'))
        }
    },
}
</script>