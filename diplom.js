var corpus=[];
var kabinet = [];
var number= [];
var floor = [];
var cab = [];
var lab = [];
var category = [];
var zadacha = [];
var comm = [];

window.onload = function(){
    getFio();
    getTasks();
    getLab();
}

function getFio(){
    $.ajax({
        url: 'get.php',
        type: "GET",
        async: false
    })

}