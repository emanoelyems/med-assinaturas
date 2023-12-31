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
            {{-- <div class="col-md-6">
                <label for="cellphone" class="form-label label text-white">Celular</label>
                <input type="text" class="form-control text-white box bg-transparent focus-ring focus-ring-white"
                    id="cellphone" placeholder="55 021 912345678">
            </div> --}}
            {{-- <div class="col-md-6">
                <label for="telephone" class="form-label label text-white">Telefone</label>
                <input type="text" class="form-control text-white box bg-transparent focus-ring focus-ring-white"
                    id="telephone" placeholder="55 021 12345678">
            </div> --}}
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


            <div class="col-12 form-check text-white" id="option1">
                <input class="form-check-input bg-transparent focus-ring focus-ring-light" type="Radio"
                    name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label label white" for="flexRadioDefault2">
                    Assinatura Padrão
                </label>
            </div>
            <div class="col-12 form-check text-white" id="option2">
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

            <div class="col-12 text-white">
                <label for="matriz" id="matrizLabel" class="form-label label">Matriz</label>
                <select id="matriz" class="form-select form-control text-white box bg-transparent focus-ring focus-ring-white" aria-label="Matriz">
                    <option selected>Matriz</option>
                    <option value="londres" id="londres">Londres</option>
                    <option value="garden" id="garden">Garden</option>
                    <option value="simonsen" id="simonsen">Simonsen</option>
                    <option value="taguara" id="taguara">Taguara</option>
                  </select>
            </div>

        </form>

    </section>

    <section id="signature" class="signature p-1 ">
        {{-- primeiro layout de teste da assinatura  --}}
        {{-- <div id="asslogo" class="asslogo col-4 text-center">
            <img src="{{ URL::asset('imgs/rm.png') }}" alt="logo">
        </div> --}}
        <div id="ass" class="ass col">
            <div class="boxAss">
                <p id="assFullname" class="text-uppercase fw-bold"></p>
            </div>
            <div class="boxAss">
                <p id="assDepartment" class="text-uppercase "></p>
            </div> 
            <div class="boxAss">
                <p id="assFilial"class=""></p>
            </div>
            <div class="boxAss">
                <p id="assMail" class="fst-italic">{{ $userAd['mail'] }}</p>
            </div>
            <div class="boxAss">
                <p id="assMatriz" class="text-wrap"></p>
            </div>
            {{-- <p id="assCellphone"class=""></p> --}}
            {{-- <p id="assTelephone"class=""></p> --}}
            </div>
            
    </section>

    <div class="container mb-4">
        <button class="justify-content-end btn focus-ring focus-ring-light btn-outline-light mb-4"
            onclick="downloadImage()">Baixar Assinatura</button>
    </div>



    {{-- Esconde o campo input Filial --}}
    <script>
        $(function() {
            $("#flexRadioDefault1").click(function() {
                if ($(this).is(":checked")) {
                    $("#input-option2").show();
                    $("#assFilial").show();
                    $("#assDepartment").hide();

                } else {
                    $("#input-option2").hide();
                    $("#assFilial").hide();
                    $("#assDepartment").show();
                    $("#option1").show();
                    $("#assDepartment").show();
                }
            });
        });
        $(function() {
            $("#flexRadioDefault2").click(function() {
                if ($(this).is(":checked")) {
                    $("#input-option2").hide();
                    $("#assFilial").hide();
                    $("#assDepartment").show();
                } else {
                    $("#input-option2").show();
                    $("#assDepartment").hide();
                }
            });
        });
    </script>

    <script>
        const signatureElement = $(".signature");
        const assElement = $(".ass");

        function bgChange() {
            const selectedCompany = $("#company").val();
            signatureElement.removeClass("rmed medwriters medgrupo")
            assElement.removeClass("rmedInfo medwritersInfo medgrupoInfo")

            if (selectedCompany === 'rmed'){
                signatureElement.addClass("rmed");
                $("#ass").addClass("rmedInfo");
                
                // $('#assCompany').html("Av. das Américas 3500, blc 01, sls 706 | Barra da Tijuca Rio de janeiro-RJ|CEP:22640102");

            } else if (selectedCompany === 'medwriters'){
                signatureElement.addClass("medwriters");
                $("#ass").addClass("medwritersInfo");
                // $('#assCompany').html("Av. das Américas 3434, blc 02, sls 305|Barra da Tijuca Rio de janeiro-RJ|CEP:22640102");

            }else{
                signatureElement.addClass("medgrupo");
                $("#ass").addClass("medgrupoInfo");
            }

        }

        function matrizAdress() {
            
            const assMatriz = $('#matriz').val();


            switch (assMatriz) {
                case 'londres':
                    var adress = "Av. das Américas 3500, blc 01, sls 706 | Barra da Tijuca Rio de janeiro-RJ|CEP:22640102"
                    break;

                case 'garden':
                    var adress = "Av. das Américas 3255, Barra Garden, sls 216 | Barra da Tijuca Rio de janeiro-RJ|CEP:22640102"
                    break;

                case 'simonsen':
                    var adress = "Av. das Américas 3434, bl 02, sls 305 | Barra da Tijuca Rio de janeiro-RJ|CEP:22640102"
                    break;

                case 'taguara':
                    var adress = "Estrada dos Bandeirantes 1700, bl 02, Galpão 112 | Taguara Rio de janeiro-RJ|CEP:22775109"
                    break;

                default:
                    var adress = "Av. das Américas 3500, blc 01, sls 706 | Barra da Tijuca Rio de janeiro-RJ|CEP:22640102"
                    break;
            }
                $('#assMatriz').html(adress);
        }
    

        function infoAss() {
            var assFullname = $('#fullname').val();
            // var assCellphone = $('#cellphone').val();
            // var assTelephone = $('#telephone').val();
            var assDepartment = $('#department').val();
            var assFilial = $('#filial').val();

            $('#assFullname').html(assFullname);
            // $('#assCellphone').html(assCellphone);
            // $('#assTelephone').html(assTelephone);
            $('#assDepartment').html(assDepartment);
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

            $('#matriz').on('input', function() {
                matrizAdress()
            });

          
            infoAss()
            bgChange()
           
            $('#form-box').on('input', function() {
                infoAss()
            });
        });
    </script>



@endsection
