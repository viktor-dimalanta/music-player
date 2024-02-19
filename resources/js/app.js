import { createApp } from 'vue'; // Import the createApp function from Vue

// Default Laravel bootstrapper, installs axios
import './bootstrap';

 // Added: Actual Bootstrap JavaScript dependency
import 'bootstrap';

 // Added: Popper.js dependency for popover support in Bootstrap
import '@popperjs/core';
// Import your Vue component(s)
import Player from './components/Player.vue';

// Create Vue application instance
const app = createApp({});

// Register your Vue component(s)
app.component('player', Player);

// Mount the Vue application instance to the DOM
app.mount('#app');
