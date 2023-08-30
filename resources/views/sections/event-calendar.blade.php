<div class="event-calendar-container flex items-start justify-center  bg-emerald-800">
    <div class="col-event col-event-banner w-3/5 bg-emerald-800">
        {{-- <div class="evt-header flex flex-col md:flex-row items-center bg-white ">
            <h3 class="w-full md:w-1/4 text-center bg-black text-white py-2 md:py-4 font-bold">Programs Offered:</h3>
            <marquee class="w-fill md:w-3/4 bg-white py-2 md:py-4 font-bold">ON-GOING ENROLLMENT FOR S.Y. 2022-2023</marquee>
        </div> --}}
        <div class="evt-content flex flex-wrap">
                <div class="box-evt text-center border-4 border-yellow-300 m-3.5">
                    <span class="text-lg text-white">Place your image here...</span>
                </div>
                <div class="box-evt text-center border-4 border-yellow-300 m-3.5">
                    <span class="text-lg text-white">Place your image here...</span>
                </div>
                <div class="box-evt text-center border-4 border-yellow-300 m-3.5">
                    <span class="text-lg text-white">Place your image here...</span>
                </div>
                <div class="box-evt text-center border-4 border-yellow-300 m-3.5">
                    <span class="text-lg text-white">Place your image here...</span>
                </div>
                <div class="box-evt text-center border-4 border-yellow-300 m-3.5">
                    <span class="text-lg text-white">Place your image here...</span>
                </div>
                <div class="box-evt text-center border-4 border-yellow-300 m-3.5">
                    <span class="text-lg text-white">Place your image here...</span>
                </div>
        </div>
    </div>
    <div class="w-2/5 bg-white h-full text-center">
        <h3 class="coa">Calendar Of Activities</h3>
        <h4 class="sy font-bold">S.Y. 2022 - 2023</h4>
        <div class="container mx-auto px-4 py-8">
            <div class="text-center font-bold text-lg mb-4 grid grid-cols-3">
                <div>
                    <button
                        onclick="goToPreviousMonth()"
                        type="button"
                        class="text-sm bg-gray-500 hover:bg-gray-400 transition-colors ease-in-out py-2 px-3 text-white rounded-xl mr-5"
                        >Prev</button
                    >
                </div>
                <div id="monthYearHeader">June 2023</div>
                <div>
                    <button
                        onclick="goToNextMonth()"
                        type="button"
                        class="text-sm bg-gray-500 hover:bg-gray-400 transition-colors ease-in-out py-2 px-3 text-white rounded-xl ms-5"
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
    </div>
</div>