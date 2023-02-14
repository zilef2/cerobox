<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editando a {{cliente.Nombre}}
            </h2>
        </template>
    <form @submit.prevent="submit">

        <div class="py-2">
            <section class="text-gray-600 body-font relative">
                <div class="container px-5 py-2 mx-auto">
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">
                                <!-- <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">Nombre</label>
                                        <input v-model="form.Nombre" type="text" id="Nombre" name="Nombre" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div> -->
                                <!-- <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="apellido" class="leading-7 text-sm text-gray-600">Apellido</label>
                                        <input v-model="form.apellido" type="text" id="apellido" name="apellido" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                        <input v-model="form.email" type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="is_admin" class="leading-7 text-sm text-gray-600">Administrador</label>
                                        <input v-model="form.is_admin" type="number" id="is_admin" name="is_admin" max="1" min="0" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="documento" class="leading-7 text-sm text-gray-600">Documento</label>
                                        <input v-model="form.documento" type="number" id="documento" name="documento" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="celular" class="leading-7 text-sm text-gray-600">Celular</label>
                                        <input v-model="form.celular" type="number" min="1000" id="celular" name="celular" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <div class="p-2 w-1/2" v-if="activoBD">
                                    <div class="relative mb-4">
                                        <label for="activo" class="leading-7 text-sm text-gray-600">Activo</label>
                                        <input type="radio" id="activo" name="activo" v-model="form.activo" :value="1" class="ml-4 form-radio">
                                        <label for="activo" class="leading-7 text-sm pl-4 text-gray-600">Inactivo</label>
                                        <input type="radio" id="activo" name="activo" v-model="form.activo" :value="0" class="ml-4 form-radio">
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative mb-4">
                                        <label for="" class="leading-7 text-lg text-gray-900">{{form.sexo}}</label><br>
                                        <label for="sexo" class="leading-7 text-sm text-gray-600">Masculino</label>
                                        <input type="radio" id="sexo" name="sexo" v-model="form.sexo" :value="Masculino" class="ml-4 form-radio">
                                        <label for="sexo" class="leading-7 text-sm pl-4 text-gray-600">Femenino</label>
                                        <input type="radio" id="sexo" name="sexo" v-model="form.sexo" :value="Femenino" class="ml-4 form-radio">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                </div>
            </section>

            <section class="text-gray-600 body-font" >
                <div class="container px-1 py-1 mx-auto grid grid-cols-1">
                    <div class="flex flex-col text-center w-full mb-2">
                        <p class="lg:w-full mx-auto leading-relaxed text-gray-700 text-xl">
                            Servicios
                        </p>
                    </div>
                    <div class="lg:w-full w-full mx-auto overflow-auto py-2">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl">Nombre</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 capitalize">Valor</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 capitalize">Fecha inicio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for = "generico in servicios" class="hover:bg-blue-100" v-bind:key="generico">
                                    <td class="px-2 py-3 text-lg">{{generico.Nombre}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="p-2 w-full flex flex-col items-center">
                    <div class="flex flex-col text-center w-full mb-12">
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-md text-black">Numero total de serivcios {{servicios.length}}.</p>
                    </div>
                </div>
            </section>
            <div class="grid grid-cols-2 justify-items-center gap-4">
                <div class="p-2 items-center">
                    <button type="submit" class="mx-4 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        Guardar
                    </button>
                </div>
                <div class="p-2 items-center">
                    <Link :href="route('indexCliente')" class="flex my-2 mx-auto text-indigo-500">
                        Volver
                        <svg class="w-4 h-4 ml-2 mt-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </Link>
                </div>
            </div>
        </div>
    </form>

    </app-layout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    cliente: Object,
    servicios: Object,
});
    // export default {
    //     components: {
    //         AppLayout,
    //     },
    //     props:{
    //         cliente: Object,
    //         servicios: Object,
    //     },
    //     data() {
    //         return {
    //             form: {
    //                 name: this.cliente.Nombre,
    //             },
    //         };
    //     },
    //     methods:{
    //         submit() {
    //             this.$inertia.put(this.route('cliente.update', this.cliente.id), this.form);
    //         },
    //         number_format(amount, decimals) {
    //             amount += '';
    //             amount = parseFloat(amount.replace(/[^0-9\.]/g, ''));
    //             decimals = decimals || 0;

    //             if (isNaN(amount) || amount === 0)
    //                 return parseFloat(0).toFixed(decimals);
    //             amount = '' + amount.toFixed(decimals);

    //             var amount_parts = amount.split(' '),
    //                 regexp = /(\d+)(\d{3})/;

    //             while (regexp.test(amount_parts[0]))
    //                 amount_parts[0] = amount_parts[0].replace(regexp, '$1' + '.' + '$2');

    //             return amount_parts.join(' ');
    //         }
    //     }
    // };
</script>
