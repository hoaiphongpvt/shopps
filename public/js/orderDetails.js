$(document).ready(function() {
    $(".btnDetailOrder").click(function() {
        // const orderID = this.value
        // $.get("Profile/getListOrderDetails", { IDHD: orderID }, function(data) {
        //     console.log(data)
        // })
        // $(".modal").modal('show')
    })

    $("#btnClose").click(function() {
        $(".modal").modal('hide')
    })
    $(".modal").modal('show');
})