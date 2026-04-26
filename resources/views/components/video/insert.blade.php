<div class="bg-gray-100 flex items-center justify-center min-h-screen w-full">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg">

        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">
            Add video
        </h1>

        <form action="{{URL('video/insert')}}" method="post" enctype="multipart/form-data"  class="space-y-4">
               @csrf
            <input type="text" placeholder="title" name="title"
                class="w-full p-3 border rounded-lg  my-4  focus:outline-none focus:ring-2 focus:ring-blue-400">
                <!-- video url -->
                 <input type="file" placeholder="video_url" name="file_path"
                class="w-full p-3  my-4  border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            
                <!-- your description -->
            <textarea rows="5" name="description" placeholder="description"
                class="w-full p-3 border rounded-lg  my-4  focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-sky-400 text-white p-3 rounded-lg hover:bg-sky-600 transition">
                save
            </button>
        </form>
    </div>

</div>