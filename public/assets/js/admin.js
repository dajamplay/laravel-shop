$(document).ready( function () {

    // Select 2

    $('.tags, .brand_id, .line_id').select2({
        language: {
            errorLoading: function () {
                return 'Результаты не могут быть загружены.';
            },
            inputTooLong: function (args) {
                var overChars = args.input.length - args.maximum;

                var message = 'Please delete ' + overChars + ' character';

                if (overChars !== 1) {
                    message += 's';
                }

                return message;
            },
            inputTooShort: function (args) {
                var remainingChars = args.minimum - args.input.length;

                return 'Please enter ' + remainingChars + ' or more characters';
            },
            loadingMore: function () {
                return 'Загрузка…';
            },
            maximumSelected: function (args) {
                var message = 'You can only select ' + args.maximum + ' item';

                if (args.maximum !== 1) {
                    message += 's';
                }

                return message;
            },
            noResults: function () {
                return 'Не найдено';
            },
            searching: function () {
                return 'Поиск…';
            },
            removeAllItems: function () {
                return 'Удалить все';
            }
        },
    });

    // Summernote

    $('#summernote').summernote({
        placeholder: 'Введите текст',
        width: 1400,
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
            onInit: function (c) {
                c.editable.html('');
            },

        }
    });
});


