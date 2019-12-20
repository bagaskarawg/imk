<template>
    <div class="bg-primary p-2 sm:p-5 clearfix text-white print:hidden">
        <div class="w-full sm:w-2/3 sm:float-left">
            <inertia-link :href="route('welcome')">
                <img
                    src="/img/logo.png"
                    alt="Logo"
                    class="float-left mr-2 sm:mr-5"
                />
            </inertia-link>
            <div class="w-auto">
                <p>Selamat datang</p>
                <p>Di Dinas Kependudukan dan Pencatatan Sipil</p>
                <p>Kabupaten Cianjur</p>
            </div>
        </div>
        <hr class="my-1 sm:hidden" />
        <div class="text-center sm:float-right">
            <template v-if="auth">
                <inertia-link
                    href="#"
                    @click.prevent="$inertia.post(route('logout'))"
                    class="hover:underline"
                    >Keluar</inertia-link
                >
            </template>
            <template v-else>
                <inertia-link :href="route('login')" class="hover:underline"
                    >Masuk</inertia-link
                >
                |
                <inertia-link :href="route('register')" class="hover:underline"
                    >Daftar</inertia-link
                >
            </template>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        auth: {
            type: Boolean,
            default: false
        }
    }
};
</script>
