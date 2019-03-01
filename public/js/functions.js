$(document).ready( function () {
   
  DTtable = $('table.display').DataTable(
  {
    'pageLength': 50,
    'language': { 'search': 'Filter:' }
  });
} );