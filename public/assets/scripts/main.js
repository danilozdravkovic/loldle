function deleteChampion(id){
    let champId = id;
    let token= document.getElementsByName('_token')[0].value;
    $.ajax({
        url : "/champion/delete/" + champId,
        method: 'delete',
        data : {
            '_token':token
        },
        success:function(data) {
            insertChampions(data);
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
function insertChampions(data) {
    let print="";
    if (data.length) {
        for (item of data) {
            print+=`<tr class="dataRows">
                        <td><img class="champImg" src="assets/img/champions/${item.src}" alt="${item.alt}" /> </td>
                        <td>${item.name}</td>
                        <td>${item.gender}</td>
                        <td>${item.position}</td>
                        <td>${item.specie}</td>
                        <td>${item.resource}</td>
                        <td>${item.range}</td>
                        <td>${item.region}</td>
                        <td>${item.releaseYear}</td>
                        <td>${item.quote}</td>
                        <td><a href="champion/show/${item.id}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        <td><button type="button" onclick="deleteChampion(${item.id})" class="btn btn-danger btnDelete">Delete</button></td>
                    </tr>
                 `
        }
    }
    else{
        print+=`<h2>There is no champions currently at database</h2>`
        document.getElementById("tableHead").innerHTML = "";
    }
    document.getElementById("tableBody").innerHTML = print;
}







