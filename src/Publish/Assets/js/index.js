
$( "#connection" ).change(function() {
    var conn = document.getElementById("connection").value;
    if (conn == 'mysql'){
        document.getElementById("host").value = '127.0.0.1';
        document.getElementById("port").value = '3306';
    }
    else if (conn == 'pgsql'){
        document.getElementById("host").value = '127.0.0.1';
        document.getElementById("port").value = '5432';
    }else {
        document.getElementById("host").value = 'localhost';
        document.getElementById("port").value = '1433';
    }
});
