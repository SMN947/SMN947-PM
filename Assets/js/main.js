
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

$(function () {
    $(".sortable")
      .sortable({
        revert: true,
        placeholder: "drag-place-holder",
        forcePlaceholderSize: true,
        connectWith: ".sortable",
        helper: function (event, element) {
          return $(element).clone().addClass("dragging");
        },
        start: function (e, ui) {
          ui.item.show().addClass("ghost");
        },
        stop: function (e, ui) {
          ui.item.show().removeClass("ghost");
        },
        receive: function (e, ui) {
            var newCol = e.target.id;
            var taskId = ui.item[0].id;
            var taskData = JSON.parse($("#task_"+taskId).val())
            taskData.task_column_id = newCol;
            console.log(`Task ${taskId} now in column ${newCol}`)
            var URLUpdate = `${BASE_URL}/Project/edit_task/${taskId}?data=${JSON.stringify(taskData)}`
            
            $.ajax(URLUpdate)
                .done(function(a) {
                    console.log(a)
                    console.log( "success" );
                })
                .fail(function() {
                    console.log( "error" );
                })
                .always(function() {
                    console.log( "complete" );
                });
                console.log(BASE_URL)
        },
        cursor: "move"
      })
      .disableSelection();
  });