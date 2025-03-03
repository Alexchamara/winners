$(document).ready(function(){
    var table =$('#example').DataTable({

         pageLength: 10,
         lengthMenu: [5, 10, 25, 50, 100],
         scrollY: '55vh',
         scrollCollapse: true,
         fixheader:true,
         paging: true,
         //responsive: true,
         searchable:false,
         dom: 'frtip',
         searching: false,
         //scrollX:true,
         ordering:false,

         columnDefs: [
             { width: '14% !important', targets: '_all' } // Apply width to all columns
         ]

     });
     new $.fn.dataTable.FixedHeader(table);
 });



