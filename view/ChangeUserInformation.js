let $count = 0;

$(document).ready(function() {
    $("button").click(function() {
        if ($count == 0) {
            $("#email").append("<form action='../controller/changeinformation.php' method='post'> <input type='text'> <input type='submit' value='Envoyer'> </form>");
            $count++;
            return $count;
        }
    })
})