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

    $('.pokemon_back').click(function() {
        location.href = './start.html';
    });

    $('.meiQ_ent').click(function() {
        location.href = '../yggdrasil/1st_floor.html';
    })
    $('.anime_hard').click(function() {
        location.href = '../anime_hard/start.html';
    })
    $('.leader_board').click(function() {
        location.href = '../php/leader_board.php';
    })
    $('.labyrinth_back').click(function() {
        location.href = '../labyrinth/entrance.html';
    });
    
    $('#hide').click(function(){
        $('.hint').hide();
    });

    $('#show').click(function(){
        $('.hint').show();
    });

}
