var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'polarArea',

    // The data for our dataset
    // data: {
    //     labels: ["January", "February", "March", "April", "May", "June", "July"],
    //     datasets: [{
    //         label: "My First dataset",
    //         backgroundColor: 'rgb(255, 99, 132)',
    //         borderColor: 'rgb(255, 99, 132)',
    //         data: [0, 10, 5, 2, 20, 30, 45],
    //     }]
    // },

	data: {
		labels: [
	        'PHP',
	        'MySQL',
	        'Javascript/JQuery',
            'HTML',
            'CSS',
            'PHP and JS Frameworks'
	    ],
	    datasets: [{
	        data: [95, 90, 90, 100, 95, 85], 
            backgroundColor: ['rgba(179, 41, 162, 0.36)',
            'rgba(253, 126, 20, 0.36)',
            'rgba(255, 255, 0, 0.36)',
            'rgba(255, 0, 0, 0.36)', 
            'rgba(0, 120, 255, 0.35)',
            'rgba(40, 167, 69, 0.36)']
	    }],
	},

    // Configuration options go here
    options: {}
});