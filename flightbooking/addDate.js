function addDate() {
			date = new Date();
			var month = date.getMonth() + 1;
			var day = date.getDate();
			var year = date.getFullYear();

			if (document.getElementById('Departuredate').value == '') {
				document.getElementById('Departuredate').value = month + '/' + day + '/' + year;
			}
			if (document.getElementById('arrivaldate').value == '') {
				document.getElementById('arrivaldate').value = month + '/' + (day + 1) + '/' + year;
			}
		}