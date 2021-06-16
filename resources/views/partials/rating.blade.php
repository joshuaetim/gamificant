<script>
    var progressContainer = document.getElementById('{{$slug}}')
    var bar = new ProgressBar.Circle(progressContainer, {
    color: 'white',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 4,
    trailWidth: 1,
    trailColor: '#2a2e2a',
    easing: 'easeInOut',
    duration: 2000,
    text: {
        autoStyleContainer: false
    },
    from: { color: '#1cd929', width: 4 },
    to: { color: '#1cd929', width: 4 },
    // Set default step function for all animate calls
    step: function(state, circle) {
        circle.path.setAttribute('stroke', state.color);
        circle.path.setAttribute('stroke-width', state.width);

        var value = Math.round(circle.value() * 100);
        if (value === 0) {
        circle.setText('0%');
        } else {
        circle.setText(value + '%');
        }

    }
    });

    bar.animate('{{$rating}}' / 100);  // Number from 0.0 to 1.0
</script>