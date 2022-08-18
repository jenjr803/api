function del(table, id) {
	let msg = "確定要刪除嗎?";
	if (confirm(msg) == 1) {
		$.post('api/D.php', {
			table,
			id
		}, ()=> {
			location.reload()
		})
	}
}
	