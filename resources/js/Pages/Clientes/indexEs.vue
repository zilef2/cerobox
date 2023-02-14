<template>
<app-layout>
    <template #header>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Modulo de Clientes
    </h2>
    </template>

    <section class="py-4">
        <div class="max-w-7xl mx-auto px-0 flex flex-col items-center">
            <div class="md:grid md:grid-cols-1">
            <div class="mt-5 md:mt-0">
                <section class="text-gray-600 body-font">
                <div class="container px-1 py-1">
                    <div class="flex flex-col text-center w-full mb-2">
                        <div class="grid grid-cols-5 gap-1 text-center w-full mb-2">
                            <div class="col-span-2">
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-full w-full mx-auto overflow-auto py-1">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr class="rounded-lg">
                                    <th class="px-4 py-3 title-font tracking-wider font-medium bg-gray-900 text-white text-lg rounded-l-lg rounded-bl" > Nombre </th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium bg-gray-900 text-white text-lg capitalize" > Cedula </th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium bg-gray-900 text-white text-lg capitalize" > Correo </th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium bg-gray-900 text-white text-lg capitalize" > Telefono </th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium bg-gray-900 text-white text-lg capitalize" > Observaciones </th>
                                    <th class="w-10 title-font tracking-wider font-medium bg-gray-900 text-white text-lg rounded-r-lg" ></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(generico, index) in (consultaPrincipal)"
                                :key="generico.id"
                                :class=" index % 2 == 0 ? 'bg-gray-300 hover:bg-blue-100':'hover:bg-blue-100'"
                            >
                                <td class="px-4 py-3 text-sm"> {{ generico.Nombre }} </td>
                                <td class="px-2 py-3 text-sm"> {{ generico.Cedula }} </td>
                                <td class="px-2 py-3 text-sm"> {{ generico.Correo }} </td>
                                <td class="px-2 py-3 text-sm"> {{ generico.Telefono }} </td>
                                <td class="px-2 py-3 text-sm"> {{ generico.Observaciones }} </td>
                                <td class="w-14 px-4 text-center">
                                    <Link :href="route('editCliente', generico.id)"
                                            class="w-full px-6 py-2 m-1 h-16 bg-blue-500 text-white hover:text-black font-bold rounded-lg shadow-xl">
                                        Editar
                                    </Link>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="p-5 flex justify-end">
                            <Link v-if="consultaPrincipal.prev_page_url"
                                :href="consultaPrincipal.prev_page_url"
                                class="px-2 text-blue-100 bg-blue-600 mx-1" >
                                    Anterior
                            </Link >
                            <Link v-if="consultaPrincipal.next_page_url"
                                :href="consultaPrincipal.next_page_url"
                                class="px-2 text-blue-100 bg-blue-600 mx-1" >
                                    Siguiente
                            </Link >
                        </div>
                        <div class="justify-items-center">
                            <p class="lg:w-full mx-auto leading-relaxed text-gray-700 text-md">
                                <b>Página {{consultaPrincipal.current_page}} de {{consultaPrincipal.last_page}}.</b>
                            </p>
                        </div>
                    </div>
                </div>
                </section>
                <div class="px-4 sm:px-0 mt-18">
                <!--<p class="text-sm text-gray-600 my-6">Un Estudiante debe estar activo para ser borrado por completo de la base de datos.</p> -->
                </div>
            </div>
            </div>
        </div>
    </section>
</app-layout>
</template>

<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    consultaPrincipal: Object,
});

</script>
