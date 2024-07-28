// File: includes/enqueue-scripts.php

function spq_enqueue_scripts() {
    wp_enqueue_script('spq-quiz-js', plugin_dir_url(__FILE__) . 'js/quiz.js', array('jquery'), '1.0', true);
    wp_enqueue_style('spq-quiz-css', plugin_dir_url(__FILE__) . 'css/quiz.css');
}
add_action('wp_enqueue_scripts', 'spq_enqueue_scripts');