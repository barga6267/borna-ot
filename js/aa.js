$(document).ready(function () {
    $(".imdbVotes").each(function () {
        $(this).text(addComma($(this).text()));
    });
});
function addcomma(str){
    var objRegex = new RegExp( '(-?[0-9]+)([0-9]{3})');
    while ( objRegex.test(str)){
        str =str.replace(objRegex,'$1,$2');}
    return str;
    }
