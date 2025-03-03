$(document).ready(function(){
   var table =$('#example').DataTable({
        //pageLength: 10,
        //lengthMenu: [5, 10, 25, 50, 100],
        //scrollY: '50vh', // Vertical scroll height
        scrollCollapse: true, // Enable scroll collapse
        fixheader:true,
        paging: false,
        responsive: true,
        searchable:false,

columnDefs: [
  {
      dtOpts: {
          searching: false,
          info: true

      },
    //   targets: [2]
  }
],searching: false,
    });
    new $.fn.dataTable.FixedHeader(table);
});



$(document).ready(function() {
    $('#inputHostingFeildContainer').hide();
    $('#toggleHostingCheckbox').change(function() {
        if ($(this).is(':checked')) {
           $('#inputHostingFeildContainer').show();
            $('#hostingStartDate').prop('required', 'required');
            $('#hostingEndDate').prop('required', 'required');
            $('#hostingCost').attr('required', 'required');
        } else {
            $('#inputHostingFeildContainer').hide();
        }
    });
});



$(document).ready(function() {
    $('#inputAppsFeildContainer').hide();
    $('#toggleAppsCheckbox').change(function() {
        if ($(this).is(':checked')) {
           $('#inputAppsFeildContainer').show();
            $('#appsStartDate').prop('required', true);
            $('#appsEndDate').prop('required', true);
            $('#appsAccounts').attr('required', 'required');
            $('#appsCost').attr('required', 'required');
        } else {
            $('#inputAppsFeildContainer').hide();
        }
    });
});

$(document).ready(function() {
    $('#inputWebsiteFeildContainer').hide();
    $('#toggleWebsiteCheckbox').change(function() {
        if ($(this).is(':checked')) {
           $('#inputWebsiteFeildContainer').show();
            $('#websiteStartDate').prop('required', 'required');
            $('#websiteEndDate').prop('required', 'required');
            $('#websiteCost').attr('required', 'required');
        } else {
            $('#inputWebsiteFeildContainer').hide();
        }
    });
});
$(document).ready(function() {
    $('#inputDomainFeildContainer').hide();
    $('#toggleDomainFeildCheckbox').change(function() {
        if ($(this).is(':checked')) {
          $('#inputDomainFeildContainer').show();
            $('#domainStartDate').prop('required', 'required');
            $('#domainEndDate').prop('required', 'required');
            $('#domainCost').attr('required', 'required');
        } else {
            $('#inputDomainFeildContainer').hide();
        }
    });
});

 $(document).ready(function() {
    $('#inputSEOFeildContainer').hide();
    $('#toggleSEOFeildCheckbox').change(function() {
       if ($(this).is(':checked')) {
            $('#inputSEOFeildContainer').show();
             $('#SEOStartDate').prop('required', true);
             $('#SEOEndDate').prop('required', true);
             $('#SEONameField').prop('required',true);
            $('#SEOCost').attr('required', true);
        } else {
            $('#inputSEOFeildContainer').hide();
        }
    });
});

 $(document).ready(function() {
    //  $('#inputSSLFeildContainer').hide();
     $('#toggleSSLFeildCheckbox').change(function() {
        if ($(this).is(':checked')) {
            $('#inputSSLFeildContainer').show();
        } else {
            $('#inputSSLFeildContainer').hide();
        }

    });

    $('#toggleSSLFeildCheckbox').trigger('change');
 });
//              $('#SSLStartDate').prop('required', true);
//              $('#SSLEndDate').prop('required', true);
//         } else {
//              $('#inputSSLFeildContainer').hide();
//          }
//      });
//  });



function confirmDelete(userId) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-user-form-' + userId).submit();
        }
    })
}



