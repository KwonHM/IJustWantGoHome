$(document).ready(function() {
    $('#saveinfo').submit(save_score);

<?php 
    if($T_record < 1) {
    ?>
    $(".noplayer").show();
    <?php
    }   
?>

});

function save_score() { 
    if(document.saveinfo.user_name.value.length == 0){
        alert('이름을 입력해 주세요.');
        event.preventDefault();
    } else {
        alert('Github page에서 자체적으로 서버측 언어를 지원하지 않기 때문에 사용할 수 없습니다. 공식 홈페이지를 사용해주세요.');
        event.preventDefault();
    } //서버에 올릴때 else문 지워주세용
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