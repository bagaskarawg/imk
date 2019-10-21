<template>
    <div class="border-b border-gray-500 mb-5 p-2 sm:p-3 text-center sm:text-right print:hidden">
        <inertia-link :href="route('home')" class="block sm:inline p-1 sm:p-3"
            :class="active === 'home' ? 'border-b-2 border-black' : ''">Beranda</inertia-link>
        <inertia-link :href="route('home')" class="block sm:inline p-3"
            :class="active === 'registration' ? 'border-b-2 border-black' : ''">Pendaftaran</inertia-link>
        <inertia-link :href="route('home')" class="block sm:inline p-3"
            :class="active === 'requirements' ? 'border-b-2 border-black' : ''">Persyaratan</inertia-link>
    </div>
</template>

<script>
export default {
    props: {
        active: String,
        default: 'home',
    },
}
</script>