<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR COLM</title>
    <link href="{{ mix('/css/colm-admin.css') }}" rel="stylesheet">
    <meta name="description" content="ADMIN - COLM - MAIN">
    <link rel="icon" type="image/x-icon" href="{{asset('storage/images/logo.webp')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .container {
            width: 100%;
            margin: auto;
        }
        
        .content {
            width: 70%;
            margin: auto;
            padding-top: 1rem;
        }

        .cal-ev-heading {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #pagination {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    @include('admin-dashboard/header')
    @include('admin-dashboard/mobile-nav')
    <div class="container">
        <div class="content">
            <h1 class="cal-ev-heading">Home Page Images</h1>
            <div>
                <input type="text" id="searchInput" class="border p-1 mb-2" style="width: 100%;" placeholder="Search for the event...">
                <table id="dataTable">
                    <thead>
                    <tr>
                        <th style="width: 40%;">Name</th>
                        <th style="width: 30%;">Thumbnail</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="tableBody">
                    </tbody>
                </table>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="{{asset('js/custom-script.js')}}"></script>
<script>
    function deleteEvent(id) {
        const deleteForm = document.getElementById("deleteForm");
        deleteForm.action = `{{ route('events.destroy') }}/${id}`;
        if (confirm("Are you sure you want to delete this event?")) {
            deleteForm.submit();
        }
    }


    // Sample data for the table
    const data = [
        @foreach($homeImages as $image)
            {"id": {{$image->id}},"name": "{{ json_decode($image->content)->name }}", "url": "{{ asset('storage/home_images/' .  json_decode($image->content)->url) }}"},
        @endforeach
    ];

    const rowsPerPage = 6;
    let currentPage = 1;

    // Function to create the table rows
    function createTableRows(data, currentPage) {
        const tableBody = document.getElementById("tableBody");
        tableBody.innerHTML = "";
        const startIndex = (currentPage - 1) * rowsPerPage;
        const endIndex = startIndex + rowsPerPage;

        for (let i = startIndex; i < endIndex && i < data.length; i++) {
            const row = tableBody.insertRow();
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);
            const cell3 = row.insertCell(2);
            cell1.textContent = data[i].name;
            cell2.innerHTML = "<img src='" + data[i].url + "' style='width: 100px; height: 70px; object-fit: cover;' />";
            const editButton = document.createElement("button");
            editButton.textContent = "Edit";
            editButton.classList.add("mr-2");
            editButton.classList.add("bg-gray-500");
            editButton.classList.add("text-white");
            editButton.classList.add("p-1");
            editButton.classList.add("rounded");
            editButton.classList.add("text-xs");
            editButton.addEventListener("click", () => {
                // Handle edit action here, e.g., open an edit form
                window.location = `{{ route('images.edit') }}/${data[i].id}`;
            });
            cell3.classList.add("text-right");
            cell3.appendChild(editButton);
        }
    }

    // Function to handle pagination
    function updatePagination() {
        const pagination = document.getElementById("pagination");
        pagination.innerHTML = "";

        const totalPages = Math.ceil(data.length / rowsPerPage);
        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement("button");
            pageButton.textContent = i;
            pageButton.addEventListener("click", () => {
            currentPage = i;
            createTableRows(data, currentPage);
            updatePagination();
            });
            pagination.appendChild(pageButton);
        }
    }

    // Initial table setup
    createTableRows(data, currentPage);
    updatePagination();

    // Search functionality
    const searchInput = document.getElementById("searchInput");
    searchInput.addEventListener("input", () => {
        const searchValue = searchInput.value.toLowerCase();
        const filteredData = data.filter((item) =>
            item.event_date.toLowerCase().includes(searchValue) || item.title.toLowerCase().includes(searchValue)
        );
        createTableRows(filteredData, 1);
        updatePagination();
    });
</script>
</html>