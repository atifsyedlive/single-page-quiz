// File: includes/custom-post-type.php

function spq_register_quiz_post_type() {
    $args = array(
        'public' => true,
        'label'  => 'Quizzes',
        'supports' => array('title', 'editor'),
    );
    register_post_type('spq_quiz', $args);
}
add_action('init', 'spq_register_quiz_post_type');