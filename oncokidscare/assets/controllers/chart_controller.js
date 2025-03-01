import { Controller } from '@hotwired/stimulus';
import { Chart } from 'chart.js/auto';

export default class extends Controller {
    connect() {
        this.chart = new Chart(this.element, {
            type: this.element.dataset.type,
            data: this.element.dataset.data ? JSON.parse(this.element.dataset.data) : {},
            options: this.element.dataset.options ? JSON.parse(this.element.dataset.options) : {}
        });
    }

    disconnect() {
        if (this.chart) {
            this.chart.destroy();
        }
    }
}
