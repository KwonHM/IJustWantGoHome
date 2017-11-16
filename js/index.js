$(document).ready(function() {
    $('.not_ready').click(function(){
        alert("이 프로젝트는 아직 파일 생성도 안했습니다.");
        event.preventDefault();
    });
}); 