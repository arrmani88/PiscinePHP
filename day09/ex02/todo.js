var todo;
var ft_list = document.getElementById('ft_list');
function ft_todo() {
    todo = prompt("please add a new to do list !");
    if (todo) {
        var text = document.createElement('div');
        ft_list.appendChild(text).innerHTML = todo;
    }
}