import './bootstrap';

import '../css/app.css';

import.meta.glob([
    '../images/**',
    '../img/**',
    '../icon/**',
    '../fonts/**',
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
