<script setup>
// import { computed, ref, watch } from 'vue';

import { Link,router  } from '@inertiajs/vue3';
import { watch,ref  } from "vue";

// watch(message, async () => {
//   show.value = true;
// });

let props = defineProps({
    data1: Object,
    titulo: String,
    filters: Object
});

let search = ref(props.filters.search);
let sort = ref(props.filters.sort);

function sorting(updown){
    this.sort=updown
}

watch(search, value => {
        router.get('/', { search: value}, 
        {preserveState : true},
        {replace : true}
    );
});
watch(sort, value => {
        router.get('/', { sort: value});
});
</script>
<template>

    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <div class="flex justify-between">
            <h2 class="m-2 p-1 text-lg hover:text-black text-gray-600">{{ titulo }} </h2>
            {{ this.sort }}
            <input v-model="search" type="text" name="search" id="search" placeholder="search..." class="border px-2 rounded-lg">
        </div>
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th v-if="sort == 'down' || sort == ''" scope="col" class="cursor-pointer px-6 py-4 font-medium text-gray-900"><button @click="sorting('up')">Name ↑</button></th>
                    <th v-else scope="col" class="cursor-pointer px-6 py-4 font-medium text-gray-900"><button @click="sorting('down')">Name ↓</button></th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Role</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <tr v-for="generico in data1.data" :key="generico.id" class="hover:bg-gray-100">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="text-sm">
                            <div class="font-medium text-gray-700">{{ generico.Nombre }}</div>
                            <div class="text-gray-400">{{ generico.Correo }}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Product Designer</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"> Design </span>
                            <span class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600"> Product </span>
                            <span class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600"> Develop </span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-end gap-4">
                            <a x-data="{ tooltip: 'Delete' }" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" x-tooltip="tooltip" class="h-6 w-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /> </svg>
                            </a>
                            <a x-data="{ tooltip: 'Edite' }" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip"> <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /> </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-6">
            <template v-for="link in data1.links" >
                <Link v-if="link.url" :href="link.url" v-html="link.label" class="px-1 text-sky-400" :class="{ 'text-teal-900' : ! link.url, 'font-extrabold' : link.active }" />
                <span v-else v-html="link.label"></span>
            </template>
        </div>
    </div>
</template>