<template>
    <main class="relative min-h-screen">
        <navbar :auth="auth" />
        <div class="container mx-auto p-4 pb-24">
            <slot />
        </div>
        <copyright />
    </main>
</template>

<script>
import Navbar from "./Navbar";
import Copyright from "./Copyright";

export default {
    components: {
        Navbar,
        Copyright
    },
    props: {
        title: String,
        auth: {
            type: Boolean,
            default: true
        }
    },
    watch: {
        title: {
            immediate: true,
            handler(title) {
                document.title = title
                    ? `${title} - ${this.$page.app.name}`
                    : this.$page.app.name;
            }
        }
    }
};
</script>
