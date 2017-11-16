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
    
    $('.idolmaster_back').click(function() {
        location.href = './start.html';
    });

    $('.hearthstone_back').click(function() {
        location.href = './start.html';
    })
    $('.meiQ_ent').click(function() {
        location.href = '../yggdrasil/1st_floor.html';
    })
    
    $('#hide').click(function(){
        $('.hint').hide();
    });

    $('#show').click(function(){
        $('.hint').show();
    });
}); 