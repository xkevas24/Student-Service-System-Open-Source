
function exportTo(type) {

	$('.table').tableExport({
		filename: 'DATA_%DD%-%YY%',
		format: type,
		cols: '1,2,3,4,5,6,7,8,9,10,11'
	});

}