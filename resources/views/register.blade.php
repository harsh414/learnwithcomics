@extends('layouts.app')
@section('content')
    <main class="container max-w-custom mx-auto pt-36 sm:pt-36 md:pt-48 flex flex-col sm:flex-col md:flex-row justify-center">
        <div class="md:w-3/4 mt-20 md:mt-12 text-center">
            <h1 class="text-center text-5xl font-extrabold">Register Here !</h1>

            <div class="text-center bg-gray-200 px-6 py-2 pt-6 mt-14 md:mr-4" x-data="{flashMessage:true}"> <!-- form for register -->
                @if(session()->has('success'))
                    <div class="bg-gray-500 text-center py-4 lg:px-4 mb-4" x-show="flashMessage">
                        <div class="p-2 text-gray-500 bg-gray-300 items-center leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                            <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('success')}}</span>
                            <svg @click="flashMessage=false" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                @endif
                @if($errors->any())
                    <div class="bg-gray-500 text-center py-4 lg:px-4 mb-4" x-show="flashMessage">
                        <div class="p-2 text-white bg-gray-300 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        </div>
                        <span class="text-white font-semibold mr-2 text-left flex-auto">{{$errors->first()}}</span>
                        <svg @click="flashMessage=false" xmlns="http://www.w3.org/2000/svg" class="border-b border-r border-t border-white cursor-pointer h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                @endif

                <h3 class="font-semibold text-xl tracking-wider">Registration Form</h3>
                <form action="{{route('participant.store')}}" method="POST" class="px-3 py-6">
                    {{@csrf_field()}}
                    <div class="flex flex-col md:flex-row md:space-x-12">
                        <div class="mb-4 md:w-1/2">
                            <input type="text" name="name" id="name" class="bg-white border-none w-full rounded mt-4 placeholder-gray-500" placeholder="Name of the participant" >
                        </div>
                        <div class="mb-4 md:w-1/2">
                            <input type="text" name="school_name" id="school_name" class="bg-white border-none w-full rounded mt-4 placeholder-gray-500" placeholder="Name of the School" >
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:space-x-12">
                        <div class="mb-4 md:w-1/2">
                            <input type="text" name="phone_no" id="phone_no" class="bg-white border-none w-full rounded mt-4 placeholder-gray-500" placeholder="Phone Number (Parents)" >
                        </div>
                        <div class="mb-8 md:w-1/2">
                            <input type="email" name="email" id="email" class="bg-white border-none w-full rounded mt-4 placeholder-gray-500" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:space-x-12">
                        <div class="mb-4 md:w-1/2 text-left">
                            <label for="grade" class="grade">Grade</label>
                            <select name="grade" id="grade_id" class="grade w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                                <option disabled>Select Grade</option>
                                @foreach($grades as $grade)
                                    <option value="{{$grade->grade}}" id="{{$grade->id}}">{{$grade->grade}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4 md:w-1/2 text-left">
                            <label for="topic" class="topic">Topic</label>
                            <select name="topic" id="topic" class="topic w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">

                            </select>
                        </div>
                    </div>
                    <div class="md:w-1/2 mt-5 text-left mx-auto">
                        <label for="grade" class="grade pt-1">Board</label>
                        <select name="board" id="board" class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                            <option value="1">CBSE</option>
                            <option value="2">ICSE</option>
                            <option value="3">STATE BOARD</option>
                            <option value="4">IB</option>
                            <option value="5">GCSE</option>
                            <option value="6">NIOS</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-center space-x-3 mt-8">
                        <button type="submit" class="flex items-center justify-center w-1/3 md:w-1/6 h-9 text-lg bg-blue-600 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-8 py-5">
                            <span class="ml-1">Add Now</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="hidden md:block md:w-1/4">
            <img src="https://res.cloudinary.com/dkerurdbc/image/upload/v1630432137/Screenshot_74_lxasjv.png" class="w-full" alt="">
        </div>
    </main>
@endsection()
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function (){
            $("#grade_id").change(function (){
                var grade_id = $(this).children(":selected").attr("id");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"{{route('register.post')}}",
                    method:"POST",
                    data:{grade_id:grade_id},
                    // dataType: 'html',
                    success:function (data){
                        $("#topic").html(data);
                    }
                })
            })
        });
    </script>
@endsection
