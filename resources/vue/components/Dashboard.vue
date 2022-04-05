<template>
    <div class="flex h-screen flex-col">
        <HeaderApp />
        <div class="flex flex-grow w-screen bg-gray-100 justify-center gap-20 flex grid-cols-2">
            <div class="flex flex-col gap-4 bg-gray-200 py-4 px-8">
                <CreateTodoForm />
                <TodoList />
            </div>
            <div class="w-96 pt-4">
                <div class="flex justify-between">
                    <a :href="App.exportRoute" class="btn btn-primary">Descarga aquí</a>
                    <a :href="App.importRoute" class="btn btn-primary">importa aquí</a>
                </div>
                <chart/>
            </div>
        </div>
    </div>
</template>

<script setup>
import HeaderApp from './HeaderApp.vue';
import CreateTodoForm from './forms/CreateTodoForm.vue';
import TodoList from './TodoList.vue';
import Chart from "./Chart";

const App = window.App;
</script>
