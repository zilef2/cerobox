<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import {
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
    } from '@headlessui/vue'

    import tableClientes from "@/Components/tableClientes.vue";

    defineProps({
        arrayClientes: Object,
        filters: Object,
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    });


</script>

<template>

    <Head title="Welcome" />
    <div class="relative flex items-top justify-center min-h-screen bg-gray-50 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user" :href="route('dashboard')"
                class="text-sm text-gray-700 underline">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">Log in</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ml-4 text-sm text-gray-700 underline">Register</Link>
            </template>
        </div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            </div>
            <section class="text-gray-600 body-font overflow-hidden">
                <div class="container px-5 py-24 mx-auto">
                    <!-- <Sort label="Name" attribute="name" /> -->
                    <!-- <span class="font-semibold title-font text-gray-700">Cedula: {{ cliente.Cedula }}</span>
                    <div v-for = "cliente in arrayClientes" v-bind:key="cliente" class="hover:bg-indigo-50 -my-8 divide-y-2 divide-gray-100"> -->

                    <tableClientes :data1="arrayClientes" :filters="filters" titulo="Clientes" />
                </div>
            </section>
        </div>
    </div>
</template>
