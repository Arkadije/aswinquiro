$(document).ready(function() {

    $('#companyInput').typeahead({
        source: function(query, result) {
            $.ajax({
                url: "search.php",
                method: "POST",
                data: {
                    query: query
                },
                dataType: "json",
                success: function(data) {
                    result($.map(data, function(item) {
                        return item;
                    }));
                }
            })
        }
    });

});


$('#dataTypeSelector').on('change', function() {
    switch (this.value) {
        case 'cent':
            newUserLabel = 'Korisnicko Ime: *';
            newPasswordLabel = 'Lozinka: *';
            newIPLabel = 'Lozinka Test: *';
            $('#changeUserLabel').text(newUserLabel);
            $('#changePasswordLabel').text(newPasswordLabel);
            $('#changeIPLabel').text(newIPLabel);
            document.getElementById('ipHide').style.visibility = 'visible';
            break;
        case 'prod':
            newUserLabel = 'Korisnicko Ime: *';
            newPasswordLabel = 'Lozinka: *';
            newIPLabel = 'Lozinka Test: *';
            $('#changeUserLabel').text(newUserLabel);
            $('#changePasswordLabel').text(newPasswordLabel);
            $('#changeIPLabel').text(newIPLabel);
            document.getElementById('ipHide').style.visibility = 'visible';
            break;
        case 'ipad':
            newUserLabel = 'Tip Računara: *';
            newPasswordLabel = 'Ime Servera: *';
            newIPLabel = 'IP Adresa: *';
            $('#changeUserLabel').text(newUserLabel);
            $('#changePasswordLabel').text(newPasswordLabel);
            $('#changeIPLabel').text(newIPLabel);
            document.getElementById('ipHide').style.visibility = 'visible';
            break;
        case 'erpa':
            newUserLabel = 'ERP Administrator: *';
            newPasswordLabel = 'Lozinka: *';
            newIPLabel = '';
            $('#changeUserLabel').text(newUserLabel);
            $('#changePasswordLabel').text(newPasswordLabel);
            $('#changeIPLabel').text(newIPLabel);
            document.getElementById('ipHide').style.visibility = 'hidden';
            break;
        case 'tran':
            newUserLabel = 'Naziv Transpondera: *';
            newPasswordLabel = 'IP Adresa Transpondera: *';
            newIPLabel = '';
            $('#changeUserLabel').text(newUserLabel);
            $('#changePasswordLabel').text(newPasswordLabel);
            $('#changeIPLabel').text(newIPLabel);
            document.getElementById('ipHide').style.visibility = 'hidden';
            break;
    }
}).trigger('change');