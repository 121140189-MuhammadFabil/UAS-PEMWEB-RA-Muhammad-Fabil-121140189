document.addEventListener('DOMContentLoaded', function () {
  fetchDataFromServer();
});

function fetchDataFromServer() {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'fetch.php', true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var data = JSON.parse(xhr.responseText);
      displayFetchedData(data);
    }
  };

  xhr.send();
}

function displayFetchedData(data) {
  var tbody = document.querySelector('#dataTable tbody');
  tbody.innerHTML = ''; // Clear existing data

  data.forEach(function (row) {
    var dataRow = tbody.insertRow();

    // Iterate through each key in the row
    for (var key in row) {
      if (row.hasOwnProperty(key)) {
        var cell = dataRow.insertCell();
        cell.appendChild(document.createTextNode(row[key]));
      }
    }

    // Add Edit button
    var editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.addEventListener('click', function () {
      // Handle edit logic, e.g., redirect to edit.php with the row ID
      window.location.href = 'edit.php?id=' + row.id;
    });

    var actionCell = dataRow.insertCell();
    actionCell.appendChild(editButton);
  });
}

var rowIndex = 1;

function validateAndSubmit() {
  var nama = document.getElementById('nama').value;
  var prodi = document.getElementById('prodi').value;
  var jalur = getSelectedJalur();
  var angkatan = document.getElementById('angkatan').value;
  var email = document.getElementById('email').value;

  if (nama && prodi && jalur && angkatan && email) {
    sendDataToServer(nama, prodi, jalur, angkatan, email);
  } else {
    alert('Silakan lengkapi semua input!');
  }
}

function sendDataToServer(nama, prodi, jalur, angkatan, email) {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'proses.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Handle response if needed
      fetchDataFromServer(); // Refresh data after successful submission
    }
  };

  var formData =
    'nama=' +
    encodeURIComponent(nama) +
    '&prodi=' +
    encodeURIComponent(prodi) +
    '&jalur=' +
    encodeURIComponent(jalur) +
    '&angkatan=' +
    encodeURIComponent(angkatan) +
    '&email=' +
    encodeURIComponent(email) +
    '&submit=submit';

  xhr.send(formData);

  // Optional: Display loading indicator or disable form during the request
}

function getSelectedJalur() {
  var radioButtons = document.getElementsByName('jalur');
  var selectedJalur = '';

  radioButtons.forEach(function (radioButton) {
    if (radioButton.checked) {
      selectedJalur = radioButton.value;
    }
  });

  return selectedJalur;
}

function validateJalur() {
  // Logika validasi untuk jalur, jika diperlukan
}

function validateAngkatan() {
  // Logika validasi untuk angkatan, jika diperlukan
}

var radioButtons = document.getElementsByName('jalur');
radioButtons.forEach(function (radioButton) {
  radioButton.addEventListener('click', validateJalur);
});

var angkatanDropdown = document.getElementById('angkatan');
angkatanDropdown.addEventListener('change', validateAngkatan);
