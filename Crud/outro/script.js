var count = 1
function addform() {
    count++
    console.log(count)
    document.getElementById('form-group').insertAdjacentHTML("beforeend","<div id='form' class='form-group'><label for='nome'>Nome: </label><input type='text' name='nome[]' id='nome'><label for='email'> Email: </label><input type='email' name='email[]' id='email'> <button type='button' onclick=remove("+count+")>-</button></div>")
}


function remove(c){
    console.log("remover"+c)
    document.getElementById('form').remove();
}