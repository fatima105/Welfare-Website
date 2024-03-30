<!DOCTYPE html>
<html>

<head>

    <style>
        * {
            font-family: calibri;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h3> UC Groups</h3>
    <select id="sel" onchange="show(this)">
        <option value="">-- Select --</option>
    </select>

    <p id="msg"></p>



</body>

<script>
    window.onload = populateSelect();

    function populateSelect() {

        // Create XMLHttpRequest object, with GET method.
        var xhr = new XMLHttpRequest(),
            method = 'GET',
            overrideMimeType = 'application/json',
            url = 'http://137.184.28.231:4000/get-all-uc'; // Add the file URL.

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {

                // Parse JSON data.
                let UC = JSON.parse(xhr.responseText);

                let ele = document.getElementById('sel');
                for (let i = 0; i < UC.length; i++) {

                    // Bind data to <select> element.
                    ele.innerHTML = ele.innerHTML +
                        '<option value="' + UC[i]._id + '">' + UC[i].name + '</option>';
                }
            }
        };
        xhr.open(method, url, true);
        xhr.send();
    }

    function show(ele) {
        // Get the selected value from <select> element and show it.
        let msg = document.getElementById('msg');

    }
</script>

</html>