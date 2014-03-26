
<html>
<head>
<link rel="stylesheet" type="text/css"
	href="//cdn.datatables.net/1.10.0-beta.2/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8"
	src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8"
	src="//cdn.datatables.net/1.10.0-beta.2/js/jquery.dataTables.js"></script>
<script>
</head>
<body>


function testreload(){
	/* get the reference of existing datatable*/
	var table = $('#example').DataTable({
		   "bRetrieve": true}		   
			);
    /* reset url */
	  table.ajax.url('data.php').load(function ( json ) {
         		 table.aaData = json.aaData;
         });
	
}


$(function(){

    
	
     $("#example").dataTable({
    		 "bProcessing": true,
    		 "sAjaxSource"  : 'data.php',
    		
    		 "fnServerParams": function ( aoData ) {
    			  aoData.push({"name": "test", "value" : $("#extra").val()});
    			}
    		
    		 
    }); 


    
});
</script>
<form id="test_form">
	<input type="text" id="extra" value="1">
</form>
<input type="button" onclick="testreload()">



<table id="example">
	<thead>
		<tr>
			<th>Rendering Engine</th>
			<th>Browser</th>
			<th>Platforms</th>
			<th>Engine Versions</th>
			<th>CSS Grade</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>


</body>
</html>