var handleDataTableButtons=function() {
    "use strict";
    $("#data-table-client-list-buttons").DataTable( {
        dom:"Bfrtip", buttons:[ {
            extend: "copy", className: "btn-sm"
        }
        , {
            extend: "csv", className: "btn-sm"
        }
        , {
            extend: "excel", className: "btn-sm"
        }
        , {
            extend: "pdf", className: "btn-sm"
        }
        , {
            extend: "print", className: "btn-sm"
        }
        ], responsive:!0,
        ajax: "/clients",
        processing: true,
        serverSide: true,
        "columns": [
            {"data":"id", "orderable": true, "searchable": true },
            {"data":"client_name_action", "orderable": false, "searchable": false },
            {"data":"project_name", "orderable": true, "searchable": true },
            {"data":"number", "orderable": true, "searchable": true },
            {"data":"project_location", "orderable": true, "searchable": true },
            {"data":"status", "orderable": true, "searchable": false },
            {"data":"actions", "orderable": false, "searchable": false }
        ]
    }
    )

    //$keys    = ['id','name','project_name','number','project_location','status'];


    "use strict";
    $("#data-table-primary-data-collections-list-buttons").DataTable( {
        dom:"Bfrtip", buttons:[ {
            extend: "copy", className: "btn-sm"
        }
        , {
            extend: "csv", className: "btn-sm"
        }
        , {
            extend: "excel", className: "btn-sm"
        }
        , {
            extend: "pdf", className: "btn-sm"
        }
        , {
            extend: "print", className: "btn-sm"
        }
        ], responsive:!0,
        ajax: "/primary-data-collections",
        processing: true,
        serverSide: true,
        "columns": [
            {"data":"id", "orderable": true, "searchable": true },
            {"data":"client_name_action", "orderable": true, "searchable": true },
            {"data":"project_name", "orderable": true, "searchable": true },
            {"data":"number", "orderable": true, "searchable": true },
            {"data":"project_location", "orderable": true, "searchable": true },
            {"data":"status", "orderable": true, "searchable": false },
            {"data":"actions", "orderable": false, "searchable": false }
        ]
    }
    )


    "use strict";
    $("#data-table-primary-proposal-drwaings-list-buttons").DataTable( {
        dom:"Bfrtip", buttons:[ {
            extend: "copy", className: "btn-sm"
        }
        , {
            extend: "csv", className: "btn-sm"
        }
        , {
            extend: "excel", className: "btn-sm"
        }
        , {
            extend: "pdf", className: "btn-sm"
        }
        , {
            extend: "print", className: "btn-sm"
        }
        ], responsive:!0,
        ajax: "/primary-proposal-drawings?type=primary",
        processing: true,
        serverSide: true,
        "columns": [
            {"data":"id", "orderable": true, "searchable": true },
            {"data":"client_name_action", "orderable": false, "searchable": false },
            {"data":"project_name", "orderable": true, "searchable": true },
            {"data":"number", "orderable": true, "searchable": true },
            {"data":"project_location", "orderable": true, "searchable": true },
            {"data":"status", "orderable": true, "searchable": false },
            {"data":"actions", "orderable": false, "searchable": false }
        ]
    }
    )

    "use strict";
    $("#data-table-primary-quatations-list-buttons").DataTable( {
        dom:"Bfrtip", buttons:[ {
            extend: "copy", className: "btn-sm"
        }
        , {
            extend: "csv", className: "btn-sm"
        }
        , {
            extend: "excel", className: "btn-sm"
        }
        , {
            extend: "pdf", className: "btn-sm"
        }
        , {
            extend: "print", className: "btn-sm"
        }
        ], responsive:!0,
        ajax: "/primary-quatations",
        processing: true,
        serverSide: true,
        "columns": [
            {"data":"id", "orderable": true, "searchable": true },
            {"data":"client_name_action", "orderable": false, "searchable": true },
            {"data":"project_name", "orderable": true, "searchable": true },
            {"data":"number", "orderable": true, "searchable": true },
            {"data":"project_location", "orderable": true, "searchable": true },
            {"data":"status", "orderable": true, "searchable": false },
            {"data":"actions", "orderable": false, "searchable": false }
        ]
    }
    )

    "use strict";
    $("#data-table-final-data-collections-list-buttons").DataTable( {
        dom:"Bfrtip", buttons:[ {
            extend: "copy", className: "btn-sm"
        }
        , {
            extend: "csv", className: "btn-sm"
        }
        , {
            extend: "excel", className: "btn-sm"
        }
        , {
            extend: "pdf", className: "btn-sm"
        }
        , {
            extend: "print", className: "btn-sm"
        }
        ], responsive:!0,
        ajax: "/final-data-collections",
        processing: true,
        serverSide: true,
        "columns": [
            {"data":"id", "orderable": true, "searchable": true },
            {"data":"client_name_action", "orderable": true, "searchable": true },
            {"data":"project_name", "orderable": true, "searchable": true },
            {"data":"number", "orderable": true, "searchable": true },
            {"data":"project_location", "orderable": true, "searchable": true },
            {"data":"final_data_collection.structure_no", "orderable": true, "searchable": true, sDefaultContent: "" },
            {"data":"status", "orderable": true, "searchable": false },
            {"data":"actions", "orderable": false, "searchable": false }
        ]
    }
    )
}

,
TableManageButtons=function() {
    "use strict";
    return {
        init:function() {
            handleDataTableButtons()
        }
    }
}

();