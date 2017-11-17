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
    
    $('#hide').click(function(){
        $('.hint').hide();
    });

    $('#show').click(function(){
        $('.hint').show();
    });

});
function save_score() { 
    if(document.saveinfo.user_name.value == ""){
        alert("이름을 입력해 주세요.");
        document.saveinfo.user_name.focus();
        return;
    }
    $.ajax({
        url:"../../php/save_score.php",
        type:"post",
        data:$("#saveinfo").serialize(),
    }).done(function(data) {
        if(data == 1){
            alert("저장이 완료 되었습니다.");
            location.href="../../php/leader_board.php";
        }else {
            alert(data);
        }
    })
} 