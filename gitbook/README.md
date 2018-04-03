# 깃북 사용법
1. 깃북 깔기
    - 깃북을 깐다 (리눅스는 `sudo apt install gitbook-cli`였음)
2. 노드 모듈 깔기
    - `gitbook install`로 깃북 빌드할때 쓰는 모듈 받기
3. 편집하기
    - 편집은 docs 폴더는 냅두고 나머지를 마크다운 문법으로 수정하면 됨 (밑에 쓴거처럼 serve 쓰면 편함)
4. 빌드하기
    - 윈도우는 모르겠는데 리눅스는 `gitbook build . ../docs`를 하면 docs에 마크다운 문서가 html로 정적 빌드가 된다.
5. 푸시하기
    - 빌드까지 다 끝났으면 푸시하면 됨

# 이건 지켜야 하지 않나 싶은거
1. 디렉토리 관리
    - 기본적으로 폴더를 나눠서 만들자
        - ex) 듀랑고에 음식 관련 문서 - `./durango/cook/index.md`
    - 정적 문서는 **최상위 디렉토리의 docs**에 저장 바람.
        - 이거 안하면 `_book`에 html 만들어지니까 파일 연결이 안될거야 깃헙 페이지에
2. `SUMMERY.md`와 `index.md`파일 수정
    - 인덱스에서는 모든 문서에 들어가게 링크를 만들어야함
    - 서머리는 왼쪽에 뜨는거니까 이거도 디렉토리를 인덱스하고 동일하게 해야함
        - ex) 인덱스에서는 요리, 농사 순인데 왼쪽에서는 농사, 요리 이렇게 두면 안된다는거임

# 팁
1. 수정할땐 `gitbook serve . ../docs`를 이용
    - 명령어 실행 시 `localhost:4000`으로 테스트 서버가 돌아감
    - 수정해서 저장하면 자동으로 빌드가 됨
2. `SUMMERY.md` 작성 방법
    - 대분류 (회색으로 나오는 글씨)는 `## {대분류이름}`으로 적으면 됨
        - 디스코드 봇에 관한 분류를 만들고 싶음:<br>
        `## 디스코드 봇`<br>
        `* 작성방법`
    - 문서에 문서는 스페이스 네개를 넣으면 됨
        - ex) 요리안에 찜 요리를 다이렉트로 만들고 싶음:<br>
        `* 요리`<br>
        &nbsp;&nbsp;&nbsp;&nbsp;`* 찜요리`
3. `SUMMERY.md`에 등록 안되어있으면 링크질도 안됨
    - 그러니까 안되면 서머리에 등록이 되어있는지 확인해보자
4. 문서의 제목으로 바로가기
    - `[{바로가기}]({url}#{제목})`해두면 url의 제목으로 이동함. 같은 페이지일땐 `<a>`처럼 url 입력 안하고 `#`만 해도 됨