
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
            margin:0;
            border: 1px solid #888;
            width: 90%;
        }
        @media(min-width:450px){
            .modal-content{
                width:70%;
            }
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
        <h2 class="text-center font-extrabold text-2xl text-[#065f46] mb-5 mt-12">TOP UPDATES</h2>
        <div class="sectionInner">

            <div class="grid grid-cols-1 md:grid-cols-3 space-y-2 md:space-y-0 space-x-0 md:space-x-2">

                <div class="rounded-lg shadow-xl text">
                        <div style="background-image: url({{asset('images/top-updates-1.jpg')}})" class="h-60 bg-contain bg-center bg-no-repeat rounded-t-lg"></div>
                        <div class="p-4">
                        <div class="authoer-date-post"><span class="text-xs">Author: <strong>ANA RONA SUPAPO</strong>&nbsp;</span>
                        <br>
                        <span class="text-gray text-xs">Date posted: 19 January 2024</span>
                        </div>
                            <div class="text-lg text-green-700 font-bold mb-3">𝗪𝗘 𝗔𝗥𝗘 𝗛𝗜𝗥𝗜𝗡𝗚!!! 📣</div>
                            <div class="text-sm mb-3">
                                𝗪𝗘 𝗔𝗥𝗘 𝗛𝗜𝗥𝗜𝗡𝗚!!! 📣
                                Take advantage of this opportunity to be a part of one of the top schools in Bulacan. 👩‍🏫🧑‍🏫
                                Job vacancy open positions:
                                - 𝗠𝗔𝗧𝗛𝗘𝗠𝗔𝗧𝗜𝗖𝗦 𝗧𝗘𝗔𝗖𝗛𝗘𝗥
                                Leave a copy of your resume in the guardhouse or send it via email: francisco.jessmar@colm.edu.ph 
                                Mr. Jess Mar RS Toribio Francisco, MBA
                                DIRECTOR, HUMAN RESOURCES DEPARTMENT
                            </div>
                            <div>
                                <!-- <a href="#" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                </div>
                <div class="rounded-lg shadow-xl">
                <div style="background-image: url({{asset('images/top-updates-2.jpg')}})" class="h-60 bg-cover bg-center rounded-t-lg">
                        
                        </div>
                        <div class="p-4">
                        <div class="authoer-date-post"><span class="text-xs">Author: <strong>ANA RONA SUPAPO</strong>&nbsp;</span><br>
                        <span class="text-gray text-xs">Date posted: 17 January 2024</span></div>
                            <div class="text-lg text-green-700 font-bold mb-3">𝗔𝗧𝗧𝗘𝗡𝗧𝗜𝗢𝗡, 𝗖𝗢𝗟𝗠𝗘𝗥𝗦! 📣</div>
                            <div class="text-sm mb-3">
                            𝗖𝗔𝗦𝗧𝗜𝗡𝗚 𝗖𝗔𝗟𝗟: 𝗖𝗢𝗟𝗠 𝗦𝘁𝘂𝗱𝗲𝗻𝘁 𝗔𝗺𝗯𝗮𝘀𝘀𝗮𝗱𝗼𝗿𝘀 🎤
                            Do you have the charisma and confidence as a proud student of the College of Our Lady of Mercy of Pulilan Foundation Inc.? We're on the hunt for the next face of our Marketing Department, someone with an infectious personality to represent our institution at exciting career talks in different schools!
                            ...
                            </div>
                            <div>
                                <a href="https://www.facebook.com/colmpulilan" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                </div>
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url({{asset('images/top-updates-3.jpg')}})" class="h-60 bg-cover bg-center rounded-t-lg">
                        
                    </div>
                    <div class="p-4">
                        <div class="authoer-date-post"><span class="text-xs">Author: <strong>ANA RONA SUPAPO</strong>&nbsp;</span><br>
                        <span class="text-gray text-xs">Date posted: 17 January 2024</span></div>
                        <div class="text-lg text-green-700 font-bold mb-3">Join the glamorous Great Gatsby Masquerade at COLMERS College Night!</div>
                        <div class="text-sm mb-3">
                        Join the glamorous Great Gatsby Masquerade at COLMERS College Night! Cross-dressing is totally cool—just check out the picture for some awesome ideas. And guess what? There's more fun stuff coming your way, so... </div>
                        <div>
                            <a href="https://www.facebook.com/colmpulilan" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="close mr-3" onclick="closeModal()">&times;</div>
            <div id="eventImage" style="background: url('https://placehold.co/600x400') no-repeat; background-size: contain; background-position: center; width: 100%; height: 300px;">

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
                    td.className = "p-1 md:p-2" + (cell.isToday ? " today" : "");
                    let tdContent = cell.day;
                    if (cell.day !== "" && cell.day !== null && cell.day !== 0) {
                        // Find the corresponding event for this day
                        const events = eventsThisMonth.filter((event) => new Date(event.event_date).getDate() === cell.day);
                        if (events.length > 0) {
                            // Create a string with event titles
                            const eventTitles = events.map((event) => {
                                // return `<div onClick="openModal(${event.id})" class="border border-gray-500 p-1 md:p-2 mb-1 cursor-pointer">${event.title}</div>`;
                                td.setAttribute('onClick',`openModal(${event.id})`);
                                td.style.cursor = 'pointer';
                            }).join('');
                            td.style.backgroundColor = '#065f46';
                            td.style.color = 'white';
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
            await fetch(`{{ route('events.apiget') }}/getEvent/${eventId}`)

                .then((res) => res.json())
                .then((res) => {
                    console.log(res);
                    const data = res.data;
                    const modal = document.getElementById("myModal");
                    const modalTitle = document.getElementById("title");
                    const modalSubTitle = document.getElementById("subTitle");
                    const modalContent = document.getElementById("content");
                    const eventImage = document.getElementById("eventImage");
                    modalTitle.innerHTML = data.title;
                    modalSubTitle.innerHTML = data.sub_title;
                    modalContent.innerHTML = data.content;
                    eventImage.style.backgroundImage = `url("{{ asset('storage/event_images') }}/${encodeURIComponent(data.event_image)}")`;
                    modal.style.display = "flex";
                    modal.style.justifyContent = 'center';
                    modal.style.alignItems = 'center';
                });
        }

        function closeModal() {
            const modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        updateCalendar();
    </script>
</x-layout>
<link href="{{ mix('/css/app.css') }}" rel="stylesheet">
<script>
        $(document).ready(function () {
            const currDate = new Date();
            const storedDate = new Date(localStorage.getItem('modal-date'));

            // Check if stored date is not available or if it's more than 3 days old
            if (!storedDate || (currDate - storedDate) > 3 * 24 * 60 * 60 * 1000) {
                setTimeout(() => {
                    $('body').addClass('modal-open');
                    $('.modal').addClass('modal-show');
                    $('.modal-window').addClass('modal-window-show');
                }, 2000);
            }
        });

        $('.close-modal').on('click', function () {
            $('body').removeClass('modal-open');
            $('.form-modal').removeClass('modal-show');

            // Set the expiration date to 3 days from the current date
            let currDate = new Date();
            currDate.setDate(currDate.getDate() + 3);
            localStorage.setItem('modal-date', currDate.toISOString());
        });
</script>