
document.getElementsByClassName('user_image')[1].addEventListener('dblclick',function(e){
        $('#usr-img').click(); 
    });
    document.getElementById("usr-img").onchange = function() {
        document.getElementById("imageform").submit();
    };
