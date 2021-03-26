// ______________Chart-circle
if ($('.chart-circle').length) {
	$('.chart-circle').each(function() {
		let $this = $(this);
		$this.circleProgress({
			fill: {
				color: $this.attr('data-color')
			},
			size: $this.height(),
			startAngle: -Math.PI / 4 * 2,
			emptyFill: 'rgba(80, 102, 224,0.1)',
			lineCap: 'round'
		});
	});
}

if ($('.dark-side-body .chart-circle').length) {
	$('.dark-side-body .chart-circle').each(function() {
		let $this = $(this);
		$this.circleProgress({
			fill: {
				color: $this.attr('data-color')
			},
			size: $this.height(),
			startAngle: -Math.PI / 4 * 2,
			emptyFill: '#25273e',
			lineCap: 'round'
		});
	});
}