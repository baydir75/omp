$(document).ready(function() {
    $("button").click(function() {
        $("#email").append("<form action='../controller/login.php' method='post'> <input type='text'> </form>");
    })
})