<template>
    <layout title="Beranda">
        <div class="flex justify-between mx-auto w-3/6">
            <inertia-link :href="route('login')" class="text-center" style="width:120px">
                <img src="/img/login.png" alt="Masuk" class="max-w-full" style="width:120px; height: 180px" />
                <p>Masuk</p>
            </inertia-link>
            <inertia-link href="/daftar" class="text-center" style="width:120px">
                <img src="/img/register.png" alt="Daftar" class="max-w-full" style="width:120px; height: 180px" />
                <p>Daftar</p>
            </inertia-link>
            <inertia-link href="/lapor-datang" class="text-center" style="width:120px">
                <img src="/img/report.png" alt="Lapor Datang" class="max-w-full" style="width:120px; height: 180px" />
                <p>Lapor Datang</p>
            </inertia-link>
            <inertia-link href="/permohonan-sktt" class="text-center" style="width:120px">
                <img src="/img/permohonan.png" alt="Permohonan Cetak SKTT" class="max-w-full" style="width:120px; height: 180px" />
                <p>Permohonan Cetak SKTT</p>
            </inertia-link>
        </div>
        <div class="w-4/6">
            <h4 class="font-bold underline text-xl mb-3">Informasi</h4>
            <p>Silakan pilih masuk (jika sudah pernah daftar).</p>
            <p>Jika belum, silakan pilih daftar (pastikan anda mengisi formulir dengan benar).</p>
        </div>
    </layout>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
    components: {
        Layout
    }
}
</script>