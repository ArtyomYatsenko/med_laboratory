$(function(){

    $('#department').autocomplete(['Отдел травматологии', 'Отдел кардиологии', 'Отдел педиатрии', 'Отдел хирургии', 'Отдел макробиологии'], {
        width: 200,
        max: 3
    });

    $('#doctor').autocomplete(['Егорова Анна Павловна', 'Петрова Елена Дмитриевна'], {
        width: 200,
        max: 3
    });

    
});