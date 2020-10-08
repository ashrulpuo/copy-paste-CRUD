$(function() {

var statusCode;

var table = $('#kt_datatable')

var jantinaDT = table.DataTable({
    responsive: true,
    searchDelay: 500,
    processing: true,
    serverSide: true,
    scrollCollapse: true,
    pagingType: 'full_numbers',
    ordering: false,
    ajax: {
        url: table.data('route'),
        method: 'GET',
        dataType: 'json',
        dataSrc: "data",
    },
    columns: [
		{
            data: 'RefJantinaId',
            render: function(data, type, full, meta) {
                return meta.row + 1;
            }
        },
		{ data: 'KodJantina' },
		{ data: 'Penerangan' },
		{
            data: 'DaftarPada',
            render: function(row) {
                return moment(row.DaftarPada).format('DD/MM/YYYY');
            },
        },
		{ data: 'RefJantinaId', responsivePriority: -1 },
    ],
    columnDefs: [{
        width: '75px',
        targets: -1,
		data: 'RefJantinaId',
        title: 'Actions',
        orderable: false,
        render: function(data, type, full, meta) {
            return '\
                <a href="javascript:;" id="' + data + '" class="btn btn-sm btn-clean btn-icon edit" title="Edit details">\
                    <i class="la la-edit"></i>\
                </a>\
                <a href="javascript:;" id="' + data + '" class="btn btn-sm btn-clean btn-icon delete" title="Delete">\
                    <i class="la la-trash"></i>\
                </a>\
            ';
        },
    }, ],
});

$('body').on('click', '.create', function() {
    $('#tetapanJantina')[0].reset();

    $('.modal').modal();
});

//submit 
$('#simpan').click(function(e) {
    // e.preventDefault();

    let method;
    let url;

    var id = $("#RefJantinaId").val();
    if (id === '') {
        url = table.data('route');
        method = "POST";
    } else {
        url = table.data('route') + '/' + id;
        console.log(url)
        method = "PUT";
    }

    $.ajax({
        data: $('#Jantina').serialize(),
        url: url,
        type: method,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: ((data) => {
            statusCode = 1;
            window.err.success(data, statusCode);
            jantinaDT.draw();
        }),
        error: function(data) {
            window.err.error(data)
        }
    });
});

//edit
$('body').on('click', '.edit', function() {
    var jantinaId = $(this).attr('id');
    var route = table.data('route') + '/' + jantinaId + '/edit';
    console.log(route)

    $.get(route, function(data) {
		$('#RefJantinaId').val(data.jantina.RefJantinaId);
		$("#Papar").prop("checked", (data.jantina.Papar === 1) ? true : false);
		$('#KodJantina').val(data.jantina.KodJantina);
		$('#Penerangan').val(data.jantina.Penerangan);
		$('#DaftarPada').val(data.jantina.DaftarPada);
    
        $('#modelHeading').html("Kemaskini Jantina");
        $('#simpan').html('Kemaskini');
        $('.modal').modal();
    })
});

//delete
$('body').on('click', '.delete', function() {
    var jantinaId = $(this).attr('id');
    var url = table.data('route') + '/' + jantinaId;

    if (confirm("Anda pasti untuk padam ?")) {
        $.ajax({
            type: "DELETE",
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                statusCode = 2;
                window.err.success(data, statusCode)
                jantinaDT.draw();
            },
            error: function(data) {
                $('#alert').removeClass('alert-success').addClass('alert-danger');
                $('#icon').removeClass('flaticon2-check-mark').addClass('flaticon2-delete');
                $("#text").html(data.message);
                $(".alert").delay(3000).fadeOut();
                jantinaDT.draw();
            }
        });
    }
});
});
