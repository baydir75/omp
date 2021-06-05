let $count = 0;
let changeInformation;

$(document).ready(function() {
    $('button').click(function() {
        let changeInformation = "#"+$(this).attr('id');
        if ($count == 0) {
            $(changeInformation).after(`<form action='../controller/changeInformation.php' method='post'> <input id='newIntel' name='newIntel' type='text'> <input type='hidden' id='' name='changeInformation' value=${changeInformation}> <input type='submit' name='ok' value='Envoyer'> </form>`);
            $(changeInformation).hide();
            $count++;
            return $count;
        }
    })
})