<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Crud</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body  id="app">

        <!-- navbar star -->
    <header class="bg-transparent fixed top-0 left-0 w-full flex justify-center items-center" >
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="{{url('/mahasiswa')}}" class="font-bold text-lg text-white block py-6">CRUD Mahasiswa<h2 class="font-normal">MUHAMMAD IRFAN F</h2></a>             
                </div>
                <div class="flex items-center px-4">
                        <ul class="flex">
                            <li class="group">
                                <a href="{{url('/mahasiswa#input')}}" class="text-base text-white py-2 mx-8 flex group-hover:font-bold ">TAMBAH DATA</a>
                            </li>
                            <li class="group">
                                <a href="{{url('/mahasiswa')}}" class="text-base  text-white py-2 mx-8 flex group-hover:font-bold ">LIST DATA</a>
                            </li>                    
                        </ul>
                </div>
                </div>
            </div>
        </div>
    </header>
    <!-- navbar end -->
    <!-- input form -->
    <section id="input" class="bg-[#1F2937] pt-36 pb-32   flex items-center justify-center">
        <div class="container w-full flex justify-center">
            <div class="w-[50%] bg-[#1E293B] rounded-xl shadow-lg ">
                <div class="flex items-center justify-center w-full">
                    <h1 class="font-bold text-3xl block text-[#FFFBEB] py-6">Edit Mahasiswa</h1>
                </div>
                    <form action ="/mahasiswa/{{$mahasiswa->id}}/update" method = "POST" 
                    class="flex flex-col gap-y-5 p-5 items-center justify-center "
                    action="#list">{{csrf_field()}}
                        <input type="text"placeholder="Nama" name="nama" value="{{$mahasiswa->nama}}"  required 
                        class="pl-3 p-1 w-[70%] text-[#FFFBEB] bg-[#1F2937] rounded-lg shadow-md focus:outline-none focus:drop-shadow-md border-1 border-gray-200">
                        <div class="w-[70%]">
                            <input type="text" name="kelas" placeholder="Kelas" value="{{$mahasiswa->kelas}}" required
                            class="pl-3 p-1 w-[50%] text-[#FFFBEB] bg-[#1F2937] rounded-lg shadow-md focus:outline-none focus:drop-shadow-md border-1 border-gray-200">
                        </div>
                        <input type="text" name="nim" placeholder="NIM" value="{{$mahasiswa->nim}}" required
                        class="pl-3 p-1 w-[70%] text-[#FFFBEB] bg-[#1F2937] rounded-lg shadow-md focus:outline-none focus:drop-shadow-md border-1 border-gray-200">
                        <input type="text" name="prodi" placeholder="Prodi" value="{{$mahasiswa->prodi}}" required
                        class=" pl-3 p-1 w-[70%] text-[#FFFBEB] bg-[#1F2937] rounded-lg shadow-md focus:outline-none focus:drop-shadow-md border-1 border-gray-200">
                        <div class="w-[70%] flex">
                            <button
                            class="bg-[#1E293B] border-[1px] p-1 border-[#FFFBEB]-300 rounded-lg text-[#FFFBEB] hover:bg-[#111827] m-3 ease-in-out duration-300"
                            type="submit">
                            Update
                            </button>
                            <button
                            class="bg-[#1E293B] border-[1px] p-1 border-[#FFFBEB]-300 rounded-lg text-[#FFFBEB] hover:bg-[#111827] m-3 ease-in-out duration-300"
                            type="reset">
                            Reset
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </section>
    <!-- input form end -->
    <script>
    window.onscroll = function(){
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav){
        header.classList.add('z-[99999]','bg-lb', 'bg-opacity-70', 'backdrop-blur-sm','shadow-xl');
        header.styleList.add("box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.2)");
        
    }else{
        header.classList.remove('z-[99999]','bg-lb', 'bg-opacity-70', 'backdrop-blur-sm','shadow-xl');
    }
};
</script>
</body>
</html>