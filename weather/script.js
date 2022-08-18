function AAA(data){
    console.log(data);
    let apitext="";
    let dataset= data.records.location;
    console.log(dataset);

    dataset.forEach(BBB);
        
    function BBB(item, index){
        apitext+=
        `<tr>
            <td>${index+1}</td>
            <td>${dataset.locationName}</td>
            <td>${dataset.weatherElement.time.parameter}</td>
        </tr>`
    }
}