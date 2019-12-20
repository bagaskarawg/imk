<template>
    <layout title="Tiket">
        <main-menu active="registration" />
        <button
            class="block rounded bg-green-600 p-3 text-white mx-auto print:hidden"
            @click="print()"
        >
            Print
        </button>
        <div
            class="p-4 max-w-full max-h-full mx-auto text-center mt-4"
            style="width: 7.5cm; background: #D9D9D9;-webkit-print-color-adjust: exact;"
        >
            <h1 class="text-lg uppercase mb-4">
                Dinas Kependudukan dan<br />Pencatatan Sipil<br />Kab. Cianjur
            </h1>
            <h1 class="text-lg uppercase mb-3">{{ $page.queue.service }}</h1>
            <h1 class="text-4xl uppercase mb-4">{{ $page.queue.code }}</h1>
            <h1 class="uppercase mb-4">
                {{ $page.queue.schedule | formatDate }}
            </h1>
            <p>Terima Kasih</p>
        </div>
    </layout>
</template>
<script>
import Vue from "vue";
import moment from "moment";
import { Layout, MainMenu } from "@/Shared";

Vue.filter("formatDate", function(value) {
    if (value) {
        return moment(String(value))
            .locale("id")
            .format("dddd, DD MMMM YYYY hh.mm");
    }
});

export default {
    components: {
        Layout,
        MainMenu
    },
    methods: {
        print() {
            window.print();
        }
    }
};
</script>
