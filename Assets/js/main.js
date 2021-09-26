
 $(".clinfo").click(function (event) {
    event.preventDefault();
    $("body").on("click", function () {
        $('#myModal').modal('show');
    });
    var data = ($(this).attr("href")).split("#")
    
    var url = data[0]
    var modalTitle = data[1].split("$")[0]
    var param = data[1].split("$")[1]
    console.log(param)
    $("#holderFrame").load(url);
    $('#myModal').modal('show')
    $("#exampleModalLabel").html(modalTitle)
});