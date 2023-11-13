
<x-layout>
    <style>
        .today {
            border: 1px solid #a1e7c5;
        }

        /* CSS for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.7);
        }

        .modal-content {
            background-color: #f4f4f4;
            margin: 15% auto;
            border: 1px solid #888;
            width: 60%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

    </style>
    <x-slot name="title">
        College of Our Lady of Mercy of Pulilan Foundation Inc.
    </x-slot>
    
    <x-hero-slider />

    <div class="section">
        <div class="sectionInner">
            <div class="grid grid-cols-1 md:grid-cols-6 py-32">
                <div class="org-img"><img src="{{ asset('images/deped.webp') }}" class="bodyimg" alt="DepEd Logo"></div>
                <div class="org-img"><img src="{{ asset('images/up.webp') }}" class="bodyimg" alt="UP Logo"></div>
                <div class="org-img"><img src="{{ asset('images/ched.webp') }}" class="bodyimg" alt="CHED Logo"></div>
                <div class="org-img"><img src="{{ asset('images/tesda.webp') }}" class="bodyimg" alt="TESDA Logo"></div>
                <div class="org-img"><img src="{{ asset('images/pacu-logo.webp') }}" class="bodyimg" alt="PACU Logo"></div>
                <div class="org-img"><img src="{{ asset('images/pacu1957.webp') }}" class="bodyimg" alt="PACU Logo"></div>
            </div>
        </div>
    </div>

    <div class="my-5">
        @include('sections/event-calendar')
    </div>

    <div class="section mb-20">
        <div class="sectionInner">
            <div class="grid grid-cols-1 md:grid-cols-3 space-y-2 md:space-y-0 space-x-0 md:space-x-2">
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url('https://placehold.co/600x400')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
                    </div>
                    <div class="p-4">
                        <div class="text-lg text-green-700 font-bold mb-3">Lorem ipsum dolor sit amet consectetur adipiscing elit.</div>
                        <div class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam blanditiis voluptatibus quidem quis dicta ipsam labore quo voluptates reprehenderit nostrum atque similique exercitationem excepturi optio, asperiores maxime et ipsum.
                        </div>
                        <div>
                            <a href="#" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url('https://placehold.co/600x400')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
                    </div>
                    <div class="p-4">
                        <div class="text-lg text-green-700 font-bold mb-3">Lorem ipsum dolor sit amet consectetur adipiscing elit.</div>
                        <div class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam blanditiis voluptatibus quidem quis dicta ipsam labore quo voluptates reprehenderit nostrum atque similique exercitationem excepturi optio, asperiores maxime et ipsum.
                        </div>
                        <div>
                            <a href="#" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url('https://placehold.co/600x400')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
                    </div>
                    <div class="p-4">
                        <div class="text-lg text-green-700 font-bold mb-3">Lorem ipsum dolor sit amet consectetur adipiscing elit.</div>
                        <div class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam blanditiis voluptatibus quidem quis dicta ipsam labore quo voluptates reprehenderit nostrum atque similique exercitationem excepturi optio, asperiores maxime et ipsum.
                        </div>
                        <div>
                            <a href="#" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="close mr-3" onclick="closeModal()">&times;</div>
            <div id="eventImage" style="background: url('https://placehold.co/600x400') no-repeat; background-size: cover; background-position: center; width: 100%; height: 300px;">

            </div>
            <div class="p-3">
                <div id="title" style="font-size: 1.2rem;" class="font-bold">Event Title</div>
                <div id="subTitle" class="italic" style="color: #4f4f4f; margin-bottom: 1rem;">Event Sub-title</div>
                <div id="content">Asdsads dasdasdasdasd asdasd asdsdasda aSDASDASdasdas dasd qwjke oiqwjeiowqj ioewqjeiowqjioqwjeoiwqj eoiqwjejqwoijq oejqwoie jiowqje oiqwjeioqwjeoiqw</div>
            </div>
        </div>
    </div>
    <script defer>
        let year = new Date().getFullYear();
        let month = new Date().getMonth();

        function createCalendar() {
            const monthYearHeader = getMonthName(month) + " " + year;
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            let date = 1;
            let calendar = [];

            for (let i = 0; i < 6; i++) {
                let row = [];

                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < firstDay) {
                        row.push({ day: "" });
                    } else if (date > daysInMonth) {
                        break;
                    } else {
                        const isToday = checkIfToday(date);
                        row.push({ month, year, day: date, isToday });
                        date++;
                    }
                }

                calendar.push(row);
            }

            return { monthYearHeader, calendar };
        }

        function getMonthName(month) {
            const months = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            return months[month];
        }

        function checkIfToday(day) {
            const today = new Date();
            return (
                day === today.getDate() &&
                month === today.getMonth() &&
                year === today.getFullYear()
            );
        }

        function goToPreviousMonth() {
            month = (month - 1 + 12) % 12;
            if (month === 11) {
                year--;
            }
            updateCalendar();
        }

        function goToNextMonth() {
            month = (month + 1) % 12;
            if (month === 0) {
                year++;
            }
            updateCalendar();
        }

        async function updateCalendar() {
            let eventsThisMonth = null;
            await fetch(`{{ route('events.apiget') }}/month/${month + 1}`)
                .then((res) => res.json())
                .then((res) => {
                    eventsThisMonth = res.data;
                });
            const { monthYearHeader, calendar } = createCalendar();
            document.getElementById("monthYearHeader").textContent = monthYearHeader;

            const calendarBody = document.getElementById("calendarBody");
            calendarBody.innerHTML = "";

            for (const row of calendar) {
                const tr = document.createElement("tr");
                for (const cell of row) {
                    const td = document.createElement("td");
                    td.className = "p-2" + (cell.isToday ? " today" : "");
                    let tdContent = cell.day;
                    if (cell.day !== "" && cell.day !== null && cell.day !== 0) {
                        // Find the corresponding event for this day
                        const events = eventsThisMonth.filter((event) => new Date(event.event_date).getDate() === cell.day);
                        if (events.length > 0) {
                            // Create a string with event titles
                            const eventTitles = events.map((event) => {
                                return `<div onClick="openModal(${event.id})" class="border border-gray-500 p-2 mb-1 cursor-pointer">${event.title}</div>`;
                            }).join('');
                            tdContent = tdContent + '<br>' + eventTitles;
                        }
                    }

                    td.innerHTML = tdContent;

                    tr.appendChild(td);
                }
                calendarBody.appendChild(tr);
            }
        }

        async function openModal(eventId) {
            console.log(eventId);
            await fetch(`{{ route('events.apiget') }}/getEvent/${eventId}`)
                .then((res) => res.json())
                .then((res) => {
                    const data = res.data;
                    const modal = document.getElementById("myModal");
                    const modalTitle = document.getElementById("title");
                    const modalSubTitle = document.getElementById("subTitle");
                    const modalContent = document.getElementById("content");
                    const eventImage = document.getElementById("eventImage");
                    modalTitle.innerHTML = data.title;
                    modalSubTitle.innerHTML = data.sub_title;
                    modalContent.innerHTML = data.content;
                    eventImage.style.backgroundImage = `url("{{ asset('storage/event_images') }}/${data.event_image}")`;
                    modal.style.display = "block";
                });
        }

        function closeModal() {
            const modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        updateCalendar();
    </script>
</x-layout>
