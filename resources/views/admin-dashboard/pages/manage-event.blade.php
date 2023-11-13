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
            <h1 class="cal-ev-heading">Calendar Events</h1>
            <div class="mb-3">
                <a href="{{ route('events.add') }}" class="bg-gray-500 text-white p-2 rounded text-sm">Add New</a>
            </div>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
            </form>
            <div>
                <input type="text" id="searchInput" class="border p-1 mb-2" style="width: 100%;" placeholder="Search for the event...">
                <table id="dataTable">
                    <thead>
                    <tr>
                        <th>Event Date</th>
                        <th style="width: 50%;">Title</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="tableBody">
                    <!-- DataTable rows will be dynamically generated here -->
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
        @foreach($allEvents as $event)
            {"id": {{$event->id}},"title": "{{$event->title}}", "event_date": "{{$event->event_date}}"},
        @endforeach
    ];

    const rowsPerPage = 5;
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
            cell1.textContent = data[i].event_date;
            cell2.textContent = data[i].title;
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
                window.location = `{{ route('events.edit') }}/${data[i].id}`;
            });
            const deleteButton = document.createElement("button");
            deleteButton.textContent = "Delete";
            deleteButton.classList.add("bg-gray-500");
            deleteButton.classList.add("text-white");
            deleteButton.classList.add("p-1");
            deleteButton.classList.add("rounded");
            deleteButton.classList.add("text-xs");
            deleteButton.addEventListener("click", () => {
                // Handle delete action here, e.g., confirm and delete the row
                deleteEvent(data[i].id);
            });
            cell3.classList.add("text-right");
            cell3.appendChild(editButton);
            cell3.appendChild(deleteButton);
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