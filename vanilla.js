function eventList(events) {
    // let title = document.querySelector(".title")
    // title.innerHTML = events.title
    //console.log(data)
    let ul = document.querySelector('ul')
    let li = '';
    for (let i =0 ; i <5 ; i++) {
        li = li + `<li class='card col-3'>
                <div class='card-body'>
                    ${events.result.records[i]['年度']}年
                    <div class="name">台灣上櫃指數 ${events.result.records[i]['台灣-上櫃']}</div>
                    <div class="name">台灣加權指數 ${events.result.records[i]['台灣-加權']}</div>
                    <div class="summary">道瓊工業指數 ${events.result.records[i]['美國-道瓊工業']}</div>
                    <div class="summary">那斯達克指數 ${events.result.records[i]['美國-那斯達克']}</div>
                    <div class="summary">香港恆生指數 ${events.result.records[i]['中國-香港恆生']}</div>
                    <div class="summary">倫敦金融時報 ${events.result.records[i]['倫敦-金融時報']}</div>
                    <div class="summary">新加坡海峽時報${events.result.records[i]['新加坡-海峽時報']}</div>
                    <div class="summary">日本日經指數 ${events.result.records[i]['日本-日經225']}</div>
                    <div class="summary">南韓綜合指數 ${events.result.records[i]['南韓-綜合']}</div>
                </div>
               </li>`;
    }
    ul.innerHTML = li
}
// events.result.records.length