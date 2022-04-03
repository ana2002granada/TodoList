<template>
    <Metrics />
    <Component :is="modalSelected" />
    <Dashboard />

</template>

<script>
import ToDoModal from './components/modals/ToDoModal.vue';
import DeleteToDoModal from './components/modals/DeleteToDoModal.vue';
import Dashboard from './components/Dashboard.vue';
import Metrics from  './components/Metrics.vue'

import { state, actions } from './store';
import { computed } from '@vue/runtime-core';

export default {
    name:'App',
    components: { ToDoModal, DeleteToDoModal, Dashboard, Metrics },
    setup() {
        actions.initialize();
        const modalSelected = computed(() => state.modal);

        return { modalSelected };
    },
};
</script>
