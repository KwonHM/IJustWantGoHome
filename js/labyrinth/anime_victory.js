$(document).ready(function() {
    $('#saveinfo').submit(save_score);
});

function save_score() { 
    if(document.saveinfo.user_name.value.length == 0){
        alert('이름을 입력해 주세요.');
        event.preventDefault();
    }
    $.ajax({
        url:'../../php/save_score.php',
        type:'post',
        data:$('#saveinfo').serialize(),
    }).done(function(data) {
        if(data == 1){
            alert('저장이 완료 되었습니다.');
            location.href='../../php/leader_board.php';
        }else {
            alert(data);
        }
    })
} 