
 $(".clinfo").click(function (event) {
    event.preventDefault();
    $("body").on("click", function () {
        $('#myModal').modal('show');
    });
    $("#holderFrame").load(($(this).attr("href")).split("#")[0]);
    $('#myModal').modal('show')
    $("#exampleModalLabel").html(($(this).attr("href")).split("#")[1])
});