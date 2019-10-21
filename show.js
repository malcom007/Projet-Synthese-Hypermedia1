$.ajax({
    url: 'data.php',
    dataType: 'json',
    success: function(data){
        console.log(data);
    }
});