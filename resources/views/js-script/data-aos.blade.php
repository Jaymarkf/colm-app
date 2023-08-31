@if (Request::path() == 'pre-elementary' OR 
     Request::path() == 'elementary' OR 
     Request::path() == 'junior-hs' OR 
     Request::path() == 'shs' OR 
     Request::path() == 'college' OR 
     Request::path() == 'tesda')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endif