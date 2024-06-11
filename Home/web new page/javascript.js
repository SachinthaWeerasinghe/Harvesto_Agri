document.addEventListener('DOMContentLoaded', function() {
    var topics = document.querySelectorAll('.topic');

    topics.forEach(function(topic, index) {
        topic.style.animation = `fadeIn 0.5s ${index * 0.2}s forwards`;
    });
});
