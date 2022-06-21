(function(){ // 충돌이 안나게 하기위해 사용
    const trList = document.querySelectorAll('tbody > tr');

    // dataset 사용방법 알기
    // const tr1 = trList[0];
    // console.log(tr1.dataset.i_board);
    // const tr1 = trList[0];
    
    trList.forEach(item => {
        // console.log(item);
        item.addEventListener('click', () =>{
            location.href = `detail?i_board=${item.dataset.i_board}`;
        })
    })
})();