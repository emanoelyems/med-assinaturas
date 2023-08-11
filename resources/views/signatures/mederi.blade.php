@extends('layout')

@section('content')

<section id="mederi" class="mederi row justify-content-md-center align-items-center p-3 m-2 ">
    {{-- primeiro layout de teste da assinatura  --}}

   <div id="asslogo" class="asslogo col-3 text-center align-middle">
       <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
           <path fill-rule="evenodd" clip-rule="evenodd"
               d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM50 95C74.8528 95 95 74.8528 95 50C95 25.1472 74.8528 5 50 5C25.1472 5 5 25.1472 5 50C5 74.8528 25.1472 95 50 95Z"
               fill="white" />
           <path d="M43 43H49V49H43V43Z" fill="white" />
           <path d="M43 11H49V41H43V11Z" fill="white" />
           <path d="M51 11H57V41H51V11Z" fill="white" />
           <path d="M51 59H57V89H51V59Z" fill="white" />
           <path d="M43 59H49V89H43V59Z" fill="white" />
           <path d="M59 49V43H89V49H59Z" fill="white" />
           <path d="M11 49V43H41V49H11Z" fill="white" />
           <path d="M11 57V51H41V57H11Z" fill="white" />
           <path d="M59 57V51H89V57H59Z" fill="white" />
           <path d="M51 43H57V49H51V43Z" fill="white" />
           <path d="M43 51H49V57H43V51Z" fill="white" />
           <path d="M51 51H57V57H51V51Z" fill="white" />
           <path d="M89 34.8462V41H64.8064H59V34.8462V11H64.8064V34.8462H89Z" fill="white" />
           <path d="M34.8462 11H41V35.1935V41H34.8462H11V35.1935H34.8462V11Z" fill="white" />
           <path d="M65.1538 89H59V64.8064V59H65.1538H89V64.8064H65.1538V89Z" fill="white" />
           <path d="M11 65.1538V59H35.1935H41V65.1538V89H35.1935V65.1538H11Z" fill="white" />
       </svg>
       <h1 id="assname" class="assname text-white">MEDGRUPO</h1>
   </div>
   <div id="ass" class="info col text-white text-wrap">
       <h3 id="assFullname" class="text-uppercase ass"> {{ $userAd['fullname'] }} </h3>
       <h4 id="assMail" class="fw-semibold"> {{ $userAd['mail'] }} </h4>
       <h4 id="assDepartment" class="fw-light"> {{ $userAd['department'] }} </h4>
       <h4 id="assCompany" class="fw-light">  {{ $userAd['company'] }}   </h4>
       <h4 id="assCellphone"class="fw-light">  </h4>
       <h4 id="assTelephone"class="fw-light"></h4>
       <h4 id="assFilial"class="fw-light"> {{ $userAd['filial'] }} </h4>
   </div>
</section>

@endsection