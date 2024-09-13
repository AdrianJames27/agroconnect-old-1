$(document).ready(function() {
    // Example data
    const data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // Monthly labels
        datasets: [
            {
                label: 'Tomato',
                data: [10, 20, 15, 30, 25, 35, 40, 30, 20, 15, 10, 5], // Example yield loss percentages for Tomato
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                fill: false
            },
            {
                label: 'Squash',
                data: [5, 10, 20, 15, 25, 20, 30, 25, 20, 10, 5, 10], // Example yield loss percentages for Squash
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                fill: false
            }
        ]
    };

    // Chart.js setup
    const ctx = $('#yieldLossChart')[0].getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Month'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Yield Loss (%)'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        }
    });
});
