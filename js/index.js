$(document).ready(function() {
    $('.not_ready').click(function(){
        alert("이 프로젝트는 준비중입니다.");
        event.preventDefault();
    });
}); 