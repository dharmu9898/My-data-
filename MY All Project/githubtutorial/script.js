
var form = document.getElementById("myForm");

form.addEventListener('submit',function(e){
    e.preventDefault()
    var search = document.getElementById("search").value
    var originalName = search.split(' ').join('')
     alert(originalName)
    fetch("https://api.github.com/gists/public"+originalName)
    .then((result) => result.json())
    .then((data) => {
        console.log(data)

        document.getElementById("result").innerHTML =`
        <a target="_blank" href="https://www.github.com/${originalName}"> <image src="${data.avatar_url}"/></a>` 
    })
})