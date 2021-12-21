
function searchSuggest(){
    var str = document.getElementById('textSearch').value;
    document.getElementById("search_suggest").innerHTML="";
    document.getElementById("search_suggest").style.border="";
    
    searchReq= new XMLHttpRequest();

    var url ='/request?search='+str;
    searchReq.open("GET", url);
    searchReq.send();

    searchReq.onreadystatechange = function(){
        if (searchReq.readyState == 4 && searchReq.status==200){
            const JSONResponse = JSON.parse(searchReq.responseText);
            for(let item in JSONResponse){
                console.log(JSONResponse[item].title);
                var para = document.createElement("p");
                para.className="suggpara";
                var anchor = document.createElement("a");
                anchor.href="/books/details/"+JSONResponse[item].book_id;
                anchor.className="suggestions"
                var t = document.createTextNode(JSONResponse[item].title);      
                anchor.appendChild(t);
                                                          
                document.getElementById("search_suggest").appendChild(para);
                para.appendChild(anchor);

       

            }

        }
    };
}
