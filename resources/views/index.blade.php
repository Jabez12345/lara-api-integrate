<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Hireup</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">
                Hireup.
            </div>
            <nav class="hidden md:flex space-x-4">
                <a class="text-gray-600 hover:text-blue-600" href="#">How it works</a>
                <a class="text-gray-600 hover:text-blue-600" href="#">Plan work</a>
                <a class="text-gray-600 hover:text-blue-600" href="#">Blog</a>
                <a class="text-gray-600 hover:text-blue-600" href="#">Browse Jobs</a>
            </nav>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hidden md:block">Login</button>
            <button class="md:hidden text-gray-600">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    <main class="container mx-auto px-4 py-16 text-center">
        <div class="text-sm text-gray-500 mb-2">1000+ Jobs listed here</div>
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Job search for people passionate about startup</h1>
        <p class="text-gray-600 mb-8">Hireup is a job search for people with passionates. Easily & quickly search thousands of jobs from worldwide wide sources.</p>
        <div class="flex justify-center items-center space-x-4 mb-8">
            <img alt="Company logo 1" class="w-10 h-10" src="https://storage.googleapis.com/a1aa/image/FvxhA7xFnFaLKN2IztUVEgwMiV2Bhh55UqB1SVfucjMUtMAKA.jpg"/>
            <img alt="Company logo 2" class="w-10 h-10" src="https://storage.googleapis.com/a1aa/image/VJ9lqJQrBc6SGJdVPtAUfhQ9DH996O4sjLhDTgoU26RTtMAKA.jpg"/>
            <img alt="Company logo 3" class="w-10 h-10" src="https://storage.googleapis.com/a1aa/image/haeVMnVp52xWXqWSdlTfsjSZcrXqfmkraFWwyljlhiLY1yAoA.jpg"/>
            <img alt="Company logo 4" class="w-10 h-10" src="https://storage.googleapis.com/a1aa/image/gLxDEP9bsaaNKB8eq0h9Z22GaIMw6FrP2GPqQbDHWu8RtMAKA.jpg"/>
            <img alt="Company logo 5" class="w-10 h-10" src="https://storage.googleapis.com/a1aa/image/fNr5tKYf09jgq0JriGMUT9SXGD1783qnNLJvcofhLK2J1yAoA.jpg"/>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4 mb-8">
            <input class="border border-gray-300 rounded px-4 py-2 w-full md:w-1/2" placeholder="Job title or keywords" type="text"/>
            <button class="bg-blue-600 text-white px-6 py-2 rounded w-full md:w-auto">Search</button>
        </div>
        <div class="text-gray-500">
            Partnership with <span class="text-blue-600">Glassdoor</span> and <span class="text-blue-600">LinkedIn</span>
        </div>
    </main>
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Explore popular jobs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded shadow">
                    <div class="flex items-center space-x-4 mb-4">
                        <img alt="Company logo" class="w-10 h-10" src="https://storage.googleapis.com/a1aa/image/oAoDCDI4nTYYONhyf4CYIGMNW6MHEpTNd01YEv2MeWrqaZAUA.jpg"/>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Senior Product Designer - Singapore</h3>
                            <p class="text-gray-500">Mailchimp</p>
                        </div>
                    </div>
                    <div class="text-green-600 font-semibold">12 Applied / 60 Capacity</div>
                </div>
                <div class="bg-gray-100 p-6 rounded shadow">
                    <div class="flex items-center space-x-4 mb-4">
                        <img alt="Company logo" class="w-10 h-10" src="https://storage.googleapis.com/a1aa/image/oAoDCDI4nTYYONhyf4CYIGMNW6MHEpTNd01YEv2MeWrqaZAUA.jpg"/>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Junior Software Engineer - Indonesia</h3>
                            <p class="text-gray-500">Tokopedia</p>
                        </div>
                    </div>
                    <div class="text-green-600 font-semibold">8 Applied / 40 Capacity</div>
                </div>
                <div class="bg-gray-100 p-6 rounded shadow">
                    <div class="flex items-center space-x-4 mb-4">
                        <img alt="Company logo" class="w-10 h-10" src="https://storage.googleapis.com/a1aa/image/oAoDCDI4nTYYONhyf4CYIGMNW6MHEpTNd01YEv2MeWrqaZAUA.jpg"/>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Senior Account Manager - Singapore</h3>
                            <p class="text-gray-500">Facebook</p>
                        </div>
                    </div>
                    <div class="text-green-600 font-semibold">9 Applied / 50 Capacity</div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>