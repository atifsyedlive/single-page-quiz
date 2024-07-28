// File: includes/shortcode.php

function spq_quiz_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => '',
    ), $atts);

    $quiz = get_post($atts['id']);
    if (!$quiz || $quiz->post_type !== 'spq_quiz') {
        return 'Invalid quiz ID';
    }

    $questions = get_post_meta($quiz->ID, 'spq_questions', true);
    if (!$questions) {
        return 'No questions found for this quiz';
    }

    $output = '<div class="spq-quiz" data-quiz-id="' . $quiz->ID . '">';
    $output .= '<h2>' . $quiz->post_title . '</h2>';

    foreach ($questions as $index => $question) {
        $output .= '<div class="spq-question" data-question-id="' . $index . '">';
        $output .= '<h3>' . $question['question'] . '</h3>';
        $output .= '<button class="spq-show-answer">Show Answer</button>';
        $output .= '<div class="spq-answer" style="display: none;">' . $question['answer'] . '</div>';
        $output .= '</div>';

        if (($index + 1) % 10 === 0 && $index !== count($questions) - 1) {
            $output .= '<div class="spq-pagination">';
            $output .= '<button class="spq-prev-page">Previous</button>';
            $output .= '<button class="spq-next-page">Next</button>';
            $output .= '</div>';
            $output .= '<div class="spq-page-break"></div>';
        }
    }

    $output .= '</div>';

    return $output;
}
add_shortcode('single_page_quiz', 'spq_quiz_shortcode');