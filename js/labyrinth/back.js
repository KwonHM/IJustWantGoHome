$(document).ready(function() {
    $('.entrance_back').click(function() {
        location.href = '../index.html';
    });
    
    $('.back').click(function() {
        location.href = '../entrance.html';
    });
    
    $('.anime_back').click(function() {
        location.href = './index.html';
    });
    $('#hide').click(function(){
        $('.hint').hide();
    });

    $('#show').click(function(){
        $('.hint').show();
    });
}); 