
<x-layout>
    <style>
        .today {
            background-color: #ff9999;
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
                    <div style="background-image: url('https://via.placeholder.com/550/FF0000/FFFFFF/?Text=COLMPlaceholder')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
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
                    <div style="background-image: url('https://via.placeholder.com/550/FF0000/FFFFFF/?Text=COLMPlaceholder')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
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
                    <div style="background-image: url('https://via.placeholder.com/550/FF0000/FFFFFF/?Text=COLMPlaceholder')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
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

    <script defer>
        let year = new Date().getFullYear();
        let month = new Date().getMonth(); // June

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
                        row.push({ day: date, isToday });
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

        function updateCalendar() {
            const { monthYearHeader, calendar } = createCalendar();
            document.getElementById("monthYearHeader").textContent = monthYearHeader;

            const calendarBody = document.getElementById("calendarBody");
            calendarBody.innerHTML = "";

            for (const row of calendar) {
                const tr = document.createElement("tr");
                for (const cell of row) {
                    const td = document.createElement("td");
                    td.className = "p-2" + (cell.isToday ? " today" : "");
                    td.textContent = cell.day;
                    tr.appendChild(td);
                }
                calendarBody.appendChild(tr);
            }
        }

        updateCalendar();
    </script>
</x-layout>
