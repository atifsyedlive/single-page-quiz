// File: js/quiz.js

jQuery(document).ready(function($) {
    $('.spq-quiz').each(function() {
        var $quiz = $(this);
        var $questions = $quiz.find('.spq-question');
        var $pages = $quiz.find('.spq-page-break');
        var currentPage = 0;

        function showPage(pageIndex) {
            $questions.hide();
            $pages.hide();
            $questions.slice(pageIndex * 10, (pageIndex + 1) * 10).show();
            $pages.eq(pageIndex).show();
        }

        $quiz.on('click', '.spq-show-answer', function() {
            $(this).next('.spq-answer').slideToggle();
        });

        $quiz.on('click', '.spq-next-page', function() {
            if (currentPage < $pages.length) {
                currentPage++;
                showPage(currentPage);
            }
        });

        $quiz.on('click', '.spq-prev-page', function() {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        });

        showPage(0);
    });
});