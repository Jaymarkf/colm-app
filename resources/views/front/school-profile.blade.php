
<x-layout>

    <x-slot name="title">
        School Profile | College of Our Lady of Mercy of Pulilan Foundation Inc.
    </x-slot>

    <div class="section bg-white">
        <div class="pt-40 md:pt-52 bg-cover bg-center bg-no-repeat" style="background-image: url('{{asset('images/green-bg.jpg')}}')">
            <div style="font-family:'Copperplate Gothic Bold', Courier, monospace;" class="text-5xl font-bold text-white mb-3 text-center py-24 drop-shadow">
                College of Our Lady of Mercy
            </div>
        </div>
    </div>
    <div class="section">
        <div class="sectionInner">
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-9/12 m-auto pt-24">
                <div class="m-auto">
                    <img src="{{ asset('images/COLM Building.jpg') }}" alt="COLM Building" class="rounded-3xl shadow-xl shadow-gray-300 w-full md:w-10/12" />
                </div>
                <div class="p-5 text-lg">
                    <h2 class="font-bold text-2xl uppercase text-gray-500">Brief History</h2>
                    <div class="h-5 w-4/12 bg-color2 mt-5 rounded-3xl mb-5"></div>
                    <p class="text-gray-800 mb-10 md:mb-3">
                        The College of Our Lady of Mercy of Pulilan Foundation, Inc. is a non-stock, non-profit educational institution. All its income is channeled back to improve its facilities and equipment in accomplishing the purpose for which it was established - to foster relevant and values-oriented education and training.
                    </p>
                    <p class="text-gray-800 mb-10 md:mb-3">
                        The school had a very modest beginning. Incorporated in 2006 by a woman of vision, Mrs. Arsenia C. Castillo and her husband, Mr. Marte N. Castillo, it started operations in 2007 with only 69 high school students.
                    </p>
                    <p class="text-gray-800">
                        In 2010, the secondary institution expanded to include tertiary courses under CHED and technical-vocational programs under TESDA. From only a few students in its initial years of operation, the school steadily grew in enrolment and gradually expanded its curricular offerings. At present, many additional courses were offered by the institution.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-9/12 m-auto pb-24">
                <div class="p-5 m-auto text-lg">
                    <p class="text-gray-800 mb-10 md:mb-3">
                        In 2011, COLM acquired Dear Jesus Montessori located at Sto. Cristo, Pulilan. The annex building housed the Pre-School, Grade School and other Tech-Voc laboratories.
                    </p>
                    <p class="text-gray-800 mb-10 md:mb-3">
                        In 2016, COLM started offering Senior High School under the K-to-12 program of the Department of Education.
                    </p>
                    <p class="text-gray-800 mb-10 md:mb-3">
                        At present, the school is committed to helping the nation's development through education using world-class and international standards. It continues with its tradition of training students to acquire knowledge and relevant skills to meet the needs of business and industry.
                    </p>
                    <p class="text-gray-800 mb-3">
                        To date, COLM is continually pursuing notable programs and plans which are all geared towards the successful attainment of its avowed mission.
                    </p>
                </div>
                <div class="m-auto">
                    <img src="{{ asset('images/Mrs. Arsenia C. Castillo.jpg') }}" alt="COLM Building" class="rounded-3xl shadow-xl shadow-gray-300 w-12/12 md:w-10/12 float-right" />
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-green-700">
        <div class="sectionInner">
            <div class="grid grid-cols-1 md:grid-cols-4 w-full md:w-9/12 m-auto py-24">
                <div class="m-auto">
                    <img src="{{ asset('images/COLM Logo.jfif') }}" alt="COLM Logo" class="rounded-full w-9/12 md:w-2/3 m-auto" />
                </div>
                <div class="p-5 col-span-3">
                    <h2 class="font-bold text-2xl uppercase text-white">Our School Emblem</h2>
                    <div class="h-5 w-4/12 bg-color2 mt-5 rounded-3xl mb-5"></div>
                    <p class="text-white mb-10 md:mb-5 text-lg">
                        The central symbol of seal is the shield which means to protect. The shield is divided vertically. To the left is a book with tussles to symbolize wisdom and nobility. To the right are the cross and a silhouette of Mary whose protection we implore. On the bottom left of the shield is a tower which symbolizes the foundation and strength of the Institution. Top most are the three stars - “Ad Astra Per Aspera” - Reach for the stars through hardships. In plain English, stars and number three is a common meaning for excellence.
                    </p>
                    <p class="text-white text-lg">
                        The school adopted green and white. Green is the color of hope which in Old English was growan or to grow - this means to build a new foundation in education, a new society that will build the skill of every student, therefore, signs of a Promise of a New Life. White is the color that symbolizes purity.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="sectionInner">
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-9/12 m-auto py-24 space-x-0 md:space-x-3">
                <div class="m-auto bg-color1 hover:bg-green-800 text-green-900 hover:text-white transition-all ease-in-out duration-300 w-full rounded-lg p-5 h-72 flex flex-col items-center justify-center">
                    <div>
                        <h2 class="mb-4 text-3xl font-bold uppercase tracking-[1rem]"><i class="fa fa-eye" aria-hidden="true"></i> Vision</h2>
                        <div class="text-xl text-justify">
                            <strong>COLM</strong> envisions itself as a Center of Excellence within the region in the areas of Instruction, Research and Community Service
                        </div>
                    </div>
                </div>
                <div class="m-auto bg-color1 hover:bg-green-800 text-green-900 hover:text-white transition-all ease-in-out duration-300 w-full rounded-lg p-5 h-72 flex flex-col items-center justify-center">
                    <div>
                        <h2 class="mb-4 text-3xl font-bold uppercase tracking-[1rem]"><i class="fa fa-bullseye" aria-hidden="true"></i> Mission</h2>
                        <div class="text-xl text-justify">
                            <strong>COLM</strong> as a non-profit organization, commits itself to offer relevant affordable programs through high quality education responsive to the needs of the industries and the communities that will develop well-rounded and competent graduates imbued with Christian values.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
