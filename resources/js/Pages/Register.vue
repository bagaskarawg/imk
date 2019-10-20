<template>
    <layout title="Daftar">
        <div class="flex">
            <div class="border border-black w-4/6 p-3">
                <h1 class="font-bold text-xl sm:text-3xl mb-5 uppercase text-center">Daftar</h1>
                <div class="flex mb-2">
                    <label class="w-2/6 text-right pr-3" for="nama_lengkap">Nama Lengkap</label>
                    <div class="w-4/6">
                        <input type="text" id="nama_lengkap" name="nama_lengkap" v-model="fields.nama_lengkap" class="border border-black p-1 w-56 w-full">
                    </div>
                </div>
                <div class="flex mb-2">
                    <label class="w-2/6 text-right pr-3" for="tempat_lahir">Tempat dan Tanggal Lahir</label>
                    <div class="w-4/6">
                        <input type="text" id="tempat_lahir" name="tempat_lahir" v-model="fields.tempat_lahir" class="border border-black p-1 w-40 max-w-full">
                        <div class="inline-block relative w-12">
                            <select name="tgl_lahir" v-model="fields.tgl_lahir" id="tgl_lahir" class="border border-black bg-white appearance-none rounded-none p-1 w-12">
                                <option value="">Tgl</option>
                                <option v-for="i in 31" :key="i" :value="i">{{ i }}</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        <div class="inline-block relative w-12">
                            <select name="bln_lahir" v-model="fields.bln_lahir" id="bln_lahir" class="border border-black bg-white appearance-none rounded-none p-1 w-12">
                                <option value="">Bln</option>
                                <option v-for="i in 12" :key="i" :value="i">{{ i }}</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        <div class="inline-block relative w-20">
                            <select name="thn_lahir" v-model="fields.thn_lahir" id="thn_lahir" class="border border-black bg-white appearance-none rounded-none p-1 w-20">
                                <option value="">Thn</option>
                                <option v-for="year in years" :key="year" :value="year">{{ year }}</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mb-2">
                    <label class="w-2/6 text-right pr-3" for="laki_laki">Jenis Kelamin</label>
                    <div class="w-4/6">
                        <label for="laki_laki">
                            <input type="radio" id="laki_laki" name="jenis_kelamin" v-model="fields.jenis_kelamin" value="l"> Laki-laki
                        </label>
                        <label for="perempuan">
                            <input type="radio" id="perempuan" name="jenis_kelamin" v-model="fields.jenis_kelamin" value="p"> Perempuan
                        </label>
                    </div>
                </div>
                <div class="flex mb-2">
                    <label class="w-2/6 text-right pr-3" for="no_ponsel">No Ponsel</label>
                    <div class="w-4/6">
                        <input type="text" id="no_ponsel" name="no_ponsel" v-model="fields.no_ponsel" class="border border-black p-1 w-56 w-full">
                    </div>
                </div>
                <div class="flex mb-2">
                    <label class="w-2/6 text-right pr-3" for="kata_sandi">Kata Sandi</label>
                    <div class="w-4/6">
                        <input type="password" id="kata_sandi" name="kata_sandi" v-model="fields.kata_sandi" class="border border-black p-1 w-56 w-full">
                    </div>
                </div>
                <div class="flex mb-2">
                    <label class="w-2/6 text-right pr-3" for="kata_sandi_ulang">Kata Sandi Ulang</label>
                    <div class="w-4/6">
                        <input type="password" id="kata_sandi_ulang" name="kata_sandi_ulang" v-model="fields.kata_sandi_ulang" class="border border-black p-1 w-40">
                    </div>
                </div>
                <div class="flex mb-2">
                    <label class="w-2/6 text-right pr-3" for="captcha">Captcha</label>
                    <div class="w-4/6">
                        <div class="mb-2" v-html="$page.captcha"></div>
                        <input type="text" id="captcha" name="captcha" v-model="fields.captcha" class="border border-black p-1 w-40">
                        <p>Masukkan 4 kode huruf yang tampak pada layar.</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2/6"></div>
                    <div class="w-4/6">
                        <button @click="submit()" class="inline-block bg-tertier hover:bg-green-700 px-3 py-2 rounded-lg text-white">Daftar</button>
                        <button @click="clearForm()" class="inline-block bg-red-500 hover:bg-red-700 px-3 py-2 rounded-lg text-white">Clear</button>
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

export default {
    components: {
        Layout
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
            console.log('submit')
        }
    },
}
</script>