
<body
   style="
    box-sizing: border-box;
   padding: 0%;
   margin: 0%;
    background-image: linear-gradient(rgb(76, 178, 241),rgb(105, 40, 203),rgb(235, 240, 248));
     background-repeat: no-repeat;
     height:fit-content;
     width:full;
     
      align-items: center;">
        @foreach ($all as $video )
        <div style="

        display: flex;
    justify-content:space-between;
      flex-wrap:wrap;
        background-size: cover;
         border-radius: 50px;">
             <video type="video/*" src="{{asset('storage/'.$video->file_path)}}" style="
        width: fit-content;
        height: 40vh;
         border-radius: 50px;
        background-color: wheat;
             " controls></video>
        </div>
         <div style="">
        <h1  style="
         background-color:transparent;
            box-sizing: border-box;
   padding: 0%;
   margin: 0%;
           font-size: 26px;
 
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        
        ">
            {{ $video->title }}
        </h1>

        <p style="
          font-size: 21px;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        
        
        ">
            {{ $video->description }}
        </p>
          <div class="mt-4 flex gap-4">
        <button style="
        
          padding: 10px 19px;
          background-color: green;
          border: 0;
          
          border-radius: 10px;
        ">
           <a href=""
           
                style="
         text-decoration: none;
        font-size: 17px;
        color:white;
        
        " 
          
           
           >update</a>
        </button>

        <button style="
         padding: 10px 19px;
          background-color: red;
          border: 0;
          
          border-radius: 10px;
        "
        >
            <a 
            style="
         text-decoration: none;
        font-size: 17px;
        color: white;
        " 
            href="">delete</a>
        </button>
    </div>
          @endforeach
</div>
</body>

