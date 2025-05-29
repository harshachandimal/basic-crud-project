<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

</head>

<body >
<section class="bg-white ">

    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">

        <h2 class="mb-4 text-xl font-bold text-gray-900 ">Add a new product</h2>
        <form action="{{route('create')}}" method = "post">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="post_title" class="block mb-2 text-sm font-medium text-gray-900 ">Post Title</label>
                    <input type="text" name="post_title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Post title" required="">
                </div>
                <div class="sm:col-span-2">
                    <label for="post_content"  class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                    <textarea id="post_content" name = "post_content" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 " placeholder="Write post..."></textarea>
                </div>

            </div>
            <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mt-3">Create Post</button>


        </form>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>

