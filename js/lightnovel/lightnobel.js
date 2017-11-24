var word1 = ["평범한", "히키코모리인", "별 볼일 없는", "평범하기 짝이 없는", "오타쿠인", "모태솔로인","전생한"];
var word2 = ["나의", "내가", "소꿉친구의", "소꿉친구가", "소꿉친구와", "여동생과","선생님과"];
var word3 = ["이세계를 정복하는", "현실세계에서 살아남는", "갑작스레 찾아온 순정만화같은", "학원러브코미디같은", "패왕이 되어가는", "처절하게 발버둥치는"];
var word4 = ["이야기", "뿐인 이야기", "뿐인 것", "그런 이야기", "즐거운 생활", "그런 듯한 이야기","평범한 일상"];

function addNovelTitle() {
	var result = [];
	
	result[0] = word1[Math.floor(Math.random() * word1.length)];
	result[1] = word2[Math.floor(Math.random() * word2.length)];
	result[2] = word3[Math.floor(Math.random() * word3.length)];
	result[3] = word4[Math.floor(Math.random() * word4.length)];
	
	alert(result[0] + " " + result[1] + " " + result[2] + " " + result[3]);
}

$(document).ready(function () {
	$('#addNovelTitle').click(function () {
		addNovelTitle();
	});
	$("body").keydown(function (key) {
			   if(key.keyCode == 13){
				   addNovelTitle();
			   }
	});
});