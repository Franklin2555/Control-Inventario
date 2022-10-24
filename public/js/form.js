
/*window.addEventListener("load",function(){
    document.getElementById("texto").addEventListener("keyup",function(){
        
        fetch(`categoria/buscador?texto=${document.getElementById("texto").value}`, {
            method:'get'
        })
        .then(Response => Response.text() )
        .then(html => {
            document.getElementById("resultado").innerHTML = html
        })
        .catch(error => console.log(error))
    })
})*/