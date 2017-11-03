$(document).ready(function(){
    console.log('jQuery Works!!!');
    $('#form').validate({
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                minlength: 5,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
        },
        messages: {
            username: {
                required: 'Это поле обезательно',
                minlength: 'Минимум 5 симболов'
            },
            email: {
                required: 'Это поле обезательно',
                minlength: 'Введите емайл (имя@домен.com)',
                email: 'имя@домен.com'
            },
            password: {
                required: 'Это поле обезательно',
                minlength: 'Минимум 8 симболов'
            },
        }
    })
});
