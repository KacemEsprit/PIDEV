import './bootstrap.js';
import { startStimulusApp } from '@symfony/stimulus-bridge';
import './styles/app.css';

// Register Stimulus controllers
const app = startStimulusApp(require.context(
    '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
    true,
    /\.(j|t)sx?$/
));

// Register Chart.js controller
import { Chart } from 'chart.js/auto';
import { registerController } from '@symfony/ux-chartjs';

registerController(app);

console.log('App.js loaded successfully!');
