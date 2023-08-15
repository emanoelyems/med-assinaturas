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

    <section id="signature" class="signature row row-cols-2 align-items-center p-1">
        {{-- primeiro layout de teste da assinatura  --}}
        <div id="asslogo" class="asslogo col-auto text-center">
           <h1>Teste</h1>
        </div>
        <div id="ass" class="col text-wrap display-1">
            <h3 id="assFullname" class="text-uppercase"></h3>
            <h4 id="assMail" class="fw-semibold">{{ $userAd['mail'] }}</h4>
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
        const signatureElement = $(".asslogo");

        function bgChange() {
            const selectedCompany = $("#company").val();
            signatureElement.removeClass("rm rmInfo rmed rmedInfo medyn medynInfo medyklin medyklinInfo medycorp medycorpInfo medwriters medwritersInfo mederi mederiInfo")

            if (selectedCompany === 'rmcursosmedicos') {
                signatureElement.addClass("rm");
                $("#ass").addClass("rmInfo");
                $('#assCompany').html("Av. das Américas 3500, blc 01, sls 706 | Barra da Tijuca | RJ |CEP:22640102");

            } else if (selectedCompany === 'rmedcursosmedicos'){
                signatureElement.addClass("rmed");
                $("#ass").addClass("rmedInfo");
                $('#assCompany').html("Av. das Américas 3301, blc 04, sls 224/226 | Barra da Tijuca | RJ |CEP:22631003");

            }
            else if(selectedCompany === 'medyn'){
                signatureElement.addClass("medyn");
                $("#ass").addClass("medynInfo");
                $('#assCompany').html("Av. das Américas 3301, blc 04, sls 224/226 | Barra da Tijuca | RJ |CEP:22631003");


            }else if(selectedCompany === 'medyklin'){
                signatureElement.addClass("medyklin");
                $("#ass").addClass("medyklinInfo");
                $('#assCompany').html("Av. das Américas 3301, blc 04, sls 224/226 | Barra da Tijuca | RJ |CEP:22631003");


            }else if(selectedCompany === 'medycorp'){
                signatureElement.addClass("medycorp");
                $("#ass").addClass("medycorpInfo");
                $('#assCompany').html("Av. das Américas 3301, blc 04, sls 224/226 | Barra da Tijuca | RJ |CEP:22631003");


            }else if(selectedCompany === 'medwriters'){
                signatureElement.addClass("medwriters");
                $("#ass").addClass("medwritersInfo");
                $('#assCompany').html("Av. das Américas 3301, blc 04, sls 224/226 | Barra da Tijuca | RJ |CEP:22631003");


            }else{
                signatureElement.addClass("mederi");
                $("#ass").addClass("mederiInfo");
                $('#assCompany').html("Av. das Américas 3301, blc 04, sls 224/226 | Barra da Tijuca | RJ |CEP:22631003");
            }
        }

        function infoAss() {
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

            infoAss()
            bgChange()

            $('#form-box').on('input', function() {
                infoAss()
            });
        });
    </script>



@endsection
