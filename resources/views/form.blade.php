@extends('layout')

@section('title', 'From Ass')

@section('content')

    <section id="form-ass" class="container m-5">
        <form id="form-box" class="row g-3 form-box p-3">
            @csrf
            <div class="col-12">
                <label for="fullname" class="form-label label text-white">Nome Completo</label>
                <input type="fullname" value="{{ $userAd['fullname'] }}" name="fullname" id="fullname"
                    class="form-control text-white box bg-transparent focus-ring focus-ring-white"
                    placeholder="Nome completo">
            </div>
            <div class="col-md-6">
                <label for="cellphone" class="form-label label text-white">Celular</label>
                <input type="text" class="form-control text-white box bg-transparent focus-ring focus-ring-white"
                    id="cellphone" placeholder="55 021 912345678">
            </div>
            <div class="col-md-6">
                <label for="telephone" class="form-label label text-white">Telefone</label>
                <input type="text" class="form-control text-white box bg-transparent focus-ring focus-ring-white"
                    id="telephone" placeholder="55 021 12345678">
            </div>
            <div class="col-md-6">
                <label for="department" class="form-label label text-white">Setor</label>
                <input type="department" value="{{ $userAd['department'] }}" name="department" id="department"
                    class="form-control text-white box bg-transparent focus-ring focus-ring-white" placeholder="Setor">
            </div>
            <div class="col-md-6 text-white">
                <label for="company" class="form-label label">Empresa</label>
                <input type="company" value="{{ $userAd['company'] }}" name="company" id="company"
                    class="form-control text-white box bg-transparent focus-ring focus-ring-white" placeholder="Empresa">
            </div>

            <div class="form-check text-white" id="option1">
                <input class="form-check-input bg-transparent focus-ring focus-ring-light" type="Radio"
                    name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label label white" for="flexRadioDefault2">
                    Assinatura Padrão
                </label>
            </div>
            <div class="form-check text-white" id="option2">
                <input class="form-check-input bg-transparent focus-ring focus-ring-light" type="Radio"
                    name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label label white" for="flexRadioDefault1">
                    Assinatura para Filial
                </label>
            </div>

            <div id="input-option2" style="display: none">
                <label for="filial" class="form-label label text-white">Filial</label>
                <input type="filial" value="{{ $userAd['filial'] }}" name="filial" id="filial"
                    class="form-control text-white box bg-transparent focus-ring focus-ring-white" id="filial"
                    placeholder="Filial">
            </div>
        </form>

    </section>

    <section id="signature" class="signature row justify-content-md-center align-items-center p-3 m-2 ">
        {{-- primeiro layout de teste da assinatura  --}}
        {{-- <div id="asslogo" class="asslogo col-3 text-center align-middle">
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
        </div> --}}
        <div id="ass" class="assInfo col text-wrap">
            <h3 id="assFullname" class="text-uppercase assName"></h3>
            <h4 id="assMail" class="fw-semibold"></h4>
            <h4 id="assDepartment" class="fw-light"></h4>
            <h4 id="assCompany" class="fw-light"></h4>
            <h4 id="assCellphone"class="fw-light"></h4>
            <h4 id="assTelephone"class="fw-light"></h4>
            <h4 id="assFilial"class="fw-light"></h4>
        </div>
    </section>

    <div class="container m-5 ">
        <button class="justify-content-end btn focus-ring focus-ring-light btn-outline-light"
            onclick="downloadImage()">Baixar Assinatura</button>
    </div>



    {{-- Esconde o campo input Filial --}}
    <script>
        $(function() {
            $("#flexRadioDefault1").click(function() {
                if ($(this).is(":checked")) {
                    $("#input-option2").show();
                    $("#assFilial").show();

                } else {
                    $("#input-option2").hide();
                    $("#assFilial").hide();
                    $("#option1").show();
                }
            });
        });
        $(function() {
            $("#flexRadioDefault2").click(function() {
                if ($(this).is(":checked")) {
                    $("#input-option2").hide();
                    $("#assFilial").hide();
                } else {
                    $("#input-option2").show();
                }
            });
        });
    </script>

    <script>
        const signatureElement = $(".signature");

        function bgChange() {
            const selectedCompany = $("#company").val();
            signatureElement.removeClass("rm rmed medyn medyklin medycorp medwriters mederi mederiInfo")

            if (selectedCompany === 'rmcursosmedicos') {
                signatureElement.addClass("rm");
            } else if (selectedCompany === 'rmedcursosmedicos'){
                signatureElement.addClass("rmed");
            }
            else if(selectedCompany === 'medyn'){
                signatureElement.addClass("medyn");

            }else if(selectedCompany === 'medyklin'){
                signatureElement.addClass("medyklin");

            }else if(selectedCompany === 'medycorp'){
                signatureElement.addClass("medycorp");

            }else if(selectedCompany === 'medwriters'){
                signatureElement.addClass("medwriters");

            }else{
                signatureElement.addClass("mederi ");
                $("#ass").addClass("mederiInfo");
            }
        }

        function preencherAssinatura() {
            var assFullname = $('#fullname').val();
            var assCellphone = $('#cellphone').val();
            var assTelephone = $('#telephone').val();
            var assDepartment = $('#department').val();
            var assCompany = $('#company').val();
            var assFilial = $('#filial').val();

            $('#assFullname').html(assFullname);
            $('#assCellphone').html(assCellphone);
            $('#assTelephone').html(assTelephone);
            $('#assDepartment').html(assDepartment);
            $('#assCompany').html(assCompany);
            $('#assFilial').html(assFilial);
        }

        $(document).ready(function() {

            if ($('#flexRadioDefault1').is(":checked")) {
                $("#input-option2").show();
                $("#assFilial").show();

            } else {
                $("#input-option2").hide();
                $("#assFilial").hide();
                $("#option1").show();
            };

            $('#company').on('input', function() {
                bgChange()
            });

            preencherAssinatura()
            bgChange()

            $('#form-box').on('input', function() {
                preencherAssinatura()
            });
        });
    </script>



@endsection
