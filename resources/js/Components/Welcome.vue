<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <!-- ver clientes -->
                    <div class="p-4 lg:w-1/2">
                        <div class="h-full bg-gray-100 bg-opacity-75 p-8 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Visualizar</h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Clientes</h1>
                            <p class="leading-relaxed mb-3">Todos los datos importantes de los clientes son mostrados en esta vista, si desea visualizar dicha informacion, haga click en el boton azul que esta abajo</p>
                            <a :href="route('indexCliente')" class="text-indigo-500 inline-flex items-center">Clientes
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 lg:w-1/2">
                        <div class="h-full bg-gray-100 bg-opacity-75 p-8 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Visualizar</h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Servicios</h1>
                            <p class="leading-relaxed mb-3">Cada cliente tiene varios Servicios asociados, si desea visualizar dicha informacion, haga click en el boton azul que esta abajo</p>
                            <a class="text-indigo-500 inline-flex items-center">Servicios
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>
