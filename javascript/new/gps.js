$("body").on("change", "#chAll", function(){
    if ($(this).prop("checked")) {
        $("input[type='checkbox']").prop("checked",true);
    }else{
        $("input[type='checkbox']").prop("checked",false);
    }
});