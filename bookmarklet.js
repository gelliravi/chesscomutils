(function(files){
	$.each(files, function(index, file) {
		$('<script/>')
		.attr('src', file.url)
		.attr('id', file.id)
		.appendTo(body);
	});
})
([
	{
		url: 'http://localhost/ccpgncapture/chess.min.js',
		id: 'chessjs'
	},
	{
		url: 'http://localhost/ccpgncapture/listen.js',
		id: 'inject'
}]);