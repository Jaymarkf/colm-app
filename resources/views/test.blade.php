<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        .today {
            background-color: #ff9999;
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <div class="text-center font-bold text-lg mb-4 grid grid-cols-3">
            <div>
                <button
                    onclick="goToPreviousMonth()"
                    type="button"
                    class="text-sm bg-slate-500 hover:bg-slate-400 transition-colors ease-in-out py-2 px-3 text-white rounded-xl mr-5"
                    >Prev</button
                >
            </div>
            <div id="monthYearHeader">June 2023</div>
            <div>
                <button
                    onclick="goToNextMonth()"
                    type="button"
                    class="text-sm bg-slate-500 hover:bg-slate-400 transition-colors ease-in-out py-2 px-3 text-white rounded-xl ms-5"
                    >Next</button
                >
            </div>
        </div>
        <table class="w-full">
            <thead>
                <tr>
                    <th class="p-2">Sun</th>
                    <th class="p-2">Mon</th>
                    <th class="p-2">Tue</th>
                    <th class="p-2">Wed</th>
                    <th class="p-2">Thu</th>
                    <th class="p-2">Fri</th>
                    <th class="p-2">Sat</th>
                </tr>
            </thead>
            <tbody id="calendarBody">
            </tbody>
        </table>
    </div>

    <script>
        let year = 2023;
        let month = 5; // June

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
</body>
</html>
