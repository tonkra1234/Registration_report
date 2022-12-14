function selectReport() {
    var select_value = document.getElementById("report").value;
    var select_month = document.getElementById("monthPicker").value;

    $.ajax({
        url: "./table_switch.php",
        method: "POST",
        data:{
            title:select_value,
            month:select_month 
        },
        success: function(page){
            $('#switch_table').html(page);
        }
    })
}
