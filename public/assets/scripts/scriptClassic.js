function getAllChampion(){
    $.ajax({
        url : "/getChampions",
        method: 'get',
        success:function(data) {
            localStorage.setItem("champions",JSON.stringify(data));
        },
        error: function(jqXHR, exception){
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            alert(msg);
        }
    });
}

function filterChampions(){
    if(document.getElementById('noChamp')){
        document.getElementById('noChamp').remove();
    }
    let champions = JSON.parse(localStorage.getItem("champions"));
    let print="";
    const userInsertValue = $("#inputChampName").val();
    let filteredChampions=[];
    if(!(userInsertValue.trim() === "")){
        filteredChampions=champions.filter(function (el){
            if(el.name.toUpperCase().indexOf(userInsertValue.trim().toUpperCase()) != -1) {
                return el;
            }

        });
    }
    if(filteredChampions.length){
        for(champion of filteredChampions) {
            print += `<div class="optionChampion">
                        <button onclick="compareChampions(${champion.id},'${champion.quote}')" id="dugme" class="d-flex flex-row row">
                                <img src="assets/img/champions/${champion.src}" alt="${champion.name}"/>
                                <p class="text-dark">${champion.name}</p>
                        </button>
                       </div>`
        }
    }
    else{
        print+=`<p id="noChamp">No champion found</p>`
    }

    document.getElementById("listOfChampions").innerHTML=print;
}

function compareChampions(championId,championQuote){
    let championIDs = [];
    let champions = JSON.parse(localStorage.getItem("champions"));
    var pickedChampion;
    var initialChampion;
    var print ="";
    for(champion of champions){
        championIDs.push(champion.id);
        if(champion.id == championId){
            pickedChampion = champion;
        }
    }
    const randomIndex = Math.floor(Math.random() * championIDs.length);
    const activeChampID = championIDs[randomIndex];
    for(champion of champions){
        if(champion.id == activeChampID){
            initialChampion = champion;
        }
    }
    // console.log(initialChampion);
    // console.log(pickedChampion);

    if(location["href"]== "http://127.0.0.1:8000/classic"){
        if(activeChampID == championId){
            $(".optionChampion").remove();
            print = `<div>
                        <table class="table">
                        <tr>
                            <th class="text-white">Champion</th>
                            <th class="text-white">Gender</th>
                            <th class="text-white">Position</th>
                            <th class="text-white">Specie</th>
                            <th class="text-white">Resource</th>
                            <th class="text-white">Range type</th>
                            <th class="text-white">Region</th>
                            <th class="text-white">Release year</th>
                        </tr>
                        <tr>
                            <td><img src="assets/img/champions/${pickedChampion.src}" alt="${champion.name}"/></td>
                            <td class="text-success">${pickedChampion.gender}</td>
                            <td class="text-success">${pickedChampion.position}</td>
                            <td class="text-success">${pickedChampion.specie}</td>
                            <td class="text-success">${pickedChampion.resource}</td>
                            <td class="text-success">${pickedChampion.range}</td>
                            <td class="text-success">${pickedChampion.region}</td>
                            <td class="text-success">${pickedChampion.releaseYear}</td>
                        </tr>
                        </table>
                        <p>Congratulations,you have guessed todays champion!</p>
                    </div>`
        }
        else{
            print+=`<div>
                        <table class="table">
                        <tr>
                            <th class="text-white">Champion</th>
                            <th class="text-white">Gender</th>
                            <th class="text-white">Position</th>
                            <th class="text-white">Specie</th>
                            <th class="text-white">Resource</th>
                            <th class="text-white">Range type</th>
                            <th class="text-white">Region</th>
                            <th class="text-white">Release year</th>
                        </tr>
                        <tr>
                            <td><img src="assets/img/champions/${pickedChampion.src}" alt="${champion.name}"/></td>`
            let arrayOfIndexes = ["gender","position","specie","resource","range","region","releaseYear"];
            for(index of arrayOfIndexes){
                if(pickedChampion[index] === initialChampion[index]){
                    print+=`<td class="text-success">${pickedChampion[index]}</td>`
                }
                else{
                    print+=`<td class="text-danger">${pickedChampion[index]}</td>`
                }
            }
            print+=`<p>Your guess is wrong,if value of field is green that means our champion has same value of that field,if it's red it's different!</p>
                    <p>Try again!</p></d>`
        }
        document.getElementById('listOfChampions').innerHTML = print;
    }
    if(location["href"]== "http://127.0.0.1:8000/quote"){
        let initialQuote = initialChampion['quote'];
        initialQuote = initialQuote.replace(/\\/g, '');
        document.getElementById("quote").innerHTML = initialQuote;
      if(initialQuote==championQuote){
          print+=`<p class="text-success">Congratulations,you guessed todays champion!</p>`
      }
      else{
          print+=`<p class="text-danger">Wrong champion,try again!</p>`
      }
        document.getElementById('listOfChampions').innerHTML = print;
    }

}





