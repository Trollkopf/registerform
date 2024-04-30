@extends('layout.app')

@section('title')
    Registro StoneCloud
@endsection

@section('header')
    <nav class="navbar justify-content-end  navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="btn btn-outline-primary me-4" href="https://home.stonecloud.es">Ir a login</a>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container bg-light opacity-75 ">
        <div class="m-4 d-flex justify-content-center">
            <img src="https://stonecloud.es/assets/images/applications/logo/logo.svg" alt="stonecloud logo" width="300">
        </div>
        <div class="text-center">
            <h1 class="text-capitalize text-secondary opacity-100 ">Formulario de registro</h1>
        </div>
    </div>
    @if (session('success'))
        <div class="container py-2  text-bg-success w-100 justify-content-center text-center">
            {{ session('success') }}</div>
    @endif
    <div class="container bg-light p-2 opacity-100 ">
        <div class="container mt-2">
            <h4 class="m-1">Datos fiscales</h4>
        </div>
        <form action="{{ route('clientes.store') }}" method="post">
            @csrf
            <div class="d-flex justify-content-center ">
                {{-- #################### DATOS FISCALES #################### --}}
                <input type="text" class="form-control w-25 m-2 @error('NIFCLI') border border-danger @enderror"
                    placeholder="CIF*" name="NIFCLI" id="NIFCLI" value="{{ old('NIFCLI') }}" />
                <input type="text" class="form-control w-50 m-2 @error('NOMBREFIS') border border-danger @enderror"
                    placeholder="Nombre Fiscal*" name="NOMBREFIS" id="NOMBREFIS" value="{{ old('NOMBREFIS') }}" />
                <input type="text" class="form-control w-50 m-2 @error('NOMBRECOM') border border-danger @enderror"
                    placeholder="Nombre comercial*" name="NOMBRECOM" id="NOMBRECOM" value="{{ old('NOMBRECOM') }}" />
            </div>
            <div class="d-flex justify-content-center ">
                <input type="text" class="form-control w-50 m-2 @error('DOMCLI') border border-danger @enderror"
                    placeholder="Domicilio*" name="DOMCLI" id="DOMCLI" value="{{ old('DOMCLI') }}" />
                <input type="text" class="form-control w-25 m-2 @error('CPOCLI') border border-danger @enderror"
                    placeholder="Codigo Postal*" name="CPOCLI" id="CPOCLI" value="{{ old('CPOCLI') }}" />
                <input type="text" class="form-control w-25 m-2 @error('POBCLI') border border-danger @enderror"
                    placeholder="Población*" name="POBCLI" id="POBCLI" value="{{ old('POBCLI') }}" />
            </div>
            <div class="d-flex justify-content-center ">
                <select class="form-control w-50 m-2 @error('PROCLI') border border-danger @enderror" name="PROCLI"
                    id="PROCLI">
                    <option value="">Elige Provincia (Solo para España)</option>
                    <option value="Álava/Araba">Álava/Araba</option>
                    <option value="Albacete">Albacete</option>
                    <option value="Alicante">Alicante</option>
                    <option value="Almería">Almería</option>
                    <option value="Asturias">Asturias</option>
                    <option value="Ávila">Ávila</option>
                    <option value="Badajoz">Badajoz</option>
                    <option value="Baleares">Baleares</option>
                    <option value="Barcelona">Barcelona</option>
                    <option value="Burgos">Burgos</option>
                    <option value="Cáceres">Cáceres</option>
                    <option value="Cádiz">Cádiz</option>
                    <option value="Cantabria">Cantabria</option>
                    <option value="Castellón">Castellón</option>
                    <option value="Ceuta">Ceuta</option>
                    <option value="Ciudad Real">Ciudad Real</option>
                    <option value="Córdoba">Córdoba</option>
                    <option value="Cuenca">Cuenca</option>
                    <option value="Gerona/Girona">Gerona/Girona</option>
                    <option value="Granada">Granada</option>
                    <option value="Guadalajara">Guadalajara</option>
                    <option value="Guipúzcoa/Gipuzkoa">Guipúzcoa/Gipuzkoa</option>
                    <option value="Huelva">Huelva</option>
                    <option value="Huesca">Huesca</option>
                    <option value="Jaén">Jaén</option>
                    <option value="La Coruña/A Coruña">La Coruña/A Coruña</option>
                    <option value="La Rioja">La Rioja</option>
                    <option value="Las Palmas">Las Palmas</option>
                    <option value="León">León</option>
                    <option value="Lérida/Lleida">Lérida/Lleida</option>
                    <option value="Lugo">Lugo</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Málaga">Málaga</option>
                    <option value="Melilla">Melilla</option>
                    <option value="Murcia">Murcia</option>
                    <option value="Navarra">Navarra</option>
                    <option value="Orense/Ourense">Orense/Ourense</option>
                    <option value="Palencia">Palencia</option>
                    <option value="Pontevedra">Pontevedra</option>
                    <option value="Salamanca">Salamanca</option>
                    <option value="Segovia">Segovia</option>
                    <option value="Sevilla">Sevilla</option>
                    <option value="Soria">Soria</option>
                    <option value="Tarragona">Tarragona</option>
                    <option value="Tenerife">Tenerife</option>
                    <option value="Teruel">Teruel</option>
                    <option value="Toledo">Toledo</option>
                    <option value="Valencia">Valencia</option>
                    <option value="Valladolid">Valladolid</option>
                    <option value="Vizcaya/Bizkaia">Vizcaya/Bizkaia</option>
                    <option value="Zamora">Zamora</option>
                    <option value="Zaragoza">Zaragoza</option>
                </select>
                <select class="form-control w-50 m-2 @error('PAIS') border border-danger @enderror" name="PAIS"
                    id="PAIS">
                    <option value="AF">Afganistán</option>
                    <option value="AL">Albania</option>
                    <option value="DE">Alemania</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antártida</option>
                    <option value="AG">Antigua y Barbuda</option>
                    <option value="AN">Antillas Holandesas</option>
                    <option value="SA">Arabia Saudí</option>
                    <option value="DZ">Argelia</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaiyán</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrein</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BE">Bélgica</option>
                    <option value="BZ">Belice</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermudas</option>
                    <option value="BY">Bielorrusia</option>
                    <option value="MM">Birmania</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia y Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brasil</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="BT">Bután</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Camboya</option>
                    <option value="CM">Camerún</option>
                    <option value="CA">Canadá</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CY">Chipre</option>
                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comores</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, República Democrática del</option>
                    <option value="KR">Corea</option>
                    <option value="KP">Corea del Norte</option>
                    <option value="CI">Costa de Marfíl</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croacia (Hrvatska)</option>
                    <option value="CU">Cuba</option>
                    <option value="DK">Dinamarca</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egipto</option>
                    <option value="SV">El Salvador</option>
                    <option value="AE">Emiratos Árabes Unidos</option>
                    <option value="ER">Eritrea</option>
                    <option value="SI">Eslovenia</option>
                    <option value="ES" selected>España</option>
                    <option value="US">Estados Unidos</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Etiopía</option>
                    <option value="FJ">Fiji</option>
                    <option value="PH">Filipinas</option>
                    <option value="FI">Finlandia</option>
                    <option value="FR">Francia</option>
                    <option value="GA">Gabón</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GD">Granada</option>
                    <option value="GR">Grecia</option>
                    <option value="GL">Groenlandia</option>
                    <option value="GP">Guadalupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GY">Guayana</option>
                    <option value="GF">Guayana Francesa</option>
                    <option value="GN">Guinea</option>
                    <option value="GQ">Guinea Ecuatorial</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="HT">Haití</option>
                    <option value="HN">Honduras</option>
                    <option value="HU">Hungría</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IQ">Irak</option>
                    <option value="IR">Irán</option>
                    <option value="IE">Irlanda</option>
                    <option value="BV">Isla Bouvet</option>
                    <option value="CX">Isla de Christmas</option>
                    <option value="IS">Islandia</option>
                    <option value="KY">Islas Caimán</option>
                    <option value="CK">Islas Cook</option>
                    <option value="CC">Islas de Cocos o Keeling</option>
                    <option value="FO">Islas Faroe</option>
                    <option value="HM">Islas Heard y McDonald</option>
                    <option value="FK">Islas Malvinas</option>
                    <option value="MP">Islas Marianas del Norte</option>
                    <option value="MH">Islas Marshall</option>
                    <option value="UM">Islas menores de Estados Unidos</option>
                    <option value="PW">Islas Palau</option>
                    <option value="SB">Islas Salomón</option>
                    <option value="SJ">Islas Svalbard y Jan Mayen</option>
                    <option value="TK">Islas Tokelau</option>
                    <option value="TC">Islas Turks y Caicos</option>
                    <option value="VI">Islas Vírgenes (EEUU)</option>
                    <option value="VG">Islas Vírgenes (Reino Unido)</option>
                    <option value="WF">Islas Wallis y Futuna</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italia</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japón</option>
                    <option value="JO">Jordania</option>
                    <option value="KZ">Kazajistán</option>
                    <option value="KE">Kenia</option>
                    <option value="KG">Kirguizistán</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="LA">Laos</option>
                    <option value="LS">Lesotho</option>
                    <option value="LV">Letonia</option>
                    <option value="LB">Líbano</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libia</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lituania</option>
                    <option value="LU">Luxemburgo</option>
                    <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                    <option value="MG">Madagascar</option>
                    <option value="MY">Malasia</option>
                    <option value="MW">Malawi</option>
                    <option value="MV">Maldivas</option>
                    <option value="ML">Malí</option>
                    <option value="MT">Malta</option>
                    <option value="MA">Marruecos</option>
                    <option value="MQ">Martinica</option>
                    <option value="MU">Mauricio</option>
                    <option value="MR">Mauritania</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">México</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldavia</option>
                    <option value="MC">Mónaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="MS">Montserrat</option>
                    <option value="MZ">Mozambique</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Níger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk</option>
                    <option value="NO">Noruega</option>
                    <option value="NC">Nueva Caledonia</option>
                    <option value="NZ">Nueva Zelanda</option>
                    <option value="OM">Omán</option>
                    <option value="NL">Países Bajos</option>
                    <option value="PA">Panamá</option>
                    <option value="PG">Papúa Nueva Guinea</option>
                    <option value="PK">Paquistán</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Perú</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PF">Polinesia Francesa</option>
                    <option value="PL">Polonia</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="UK">Reino Unido</option>
                    <option value="CF">República Centroafricana</option>
                    <option value="CZ">República Checa</option>
                    <option value="ZA">República de Sudáfrica</option>
                    <option value="DO">República Dominicana</option>
                    <option value="SK">República Eslovaca</option>
                    <option value="RE">Reunión</option>
                    <option value="RW">Ruanda</option>
                    <option value="RO">Rumania</option>
                    <option value="RU">Rusia</option>
                    <option value="EH">Sahara Occidental</option>
                    <option value="KN">Saint Kitts y Nevis</option>
                    <option value="WS">Samoa</option>
                    <option value="AS">Samoa Americana</option>
                    <option value="SM">San Marino</option>
                    <option value="VC">San Vicente y Granadinas</option>
                    <option value="SH">Santa Helena</option>
                    <option value="LC">Santa Lucía</option>
                    <option value="ST">Santo Tomé y Príncipe</option>
                    <option value="SN">Senegal</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leona</option>
                    <option value="SG">Singapur</option>
                    <option value="SY">Siria</option>
                    <option value="SO">Somalia</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="PM">St Pierre y Miquelon</option>
                    <option value="SZ">Suazilandia</option>
                    <option value="SD">Sudán</option>
                    <option value="SE">Suecia</option>
                    <option value="CH">Suiza</option>
                    <option value="SR">Surinam</option>
                    <option value="TH">Tailandia</option>
                    <option value="TW">Taiwán</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TJ">Tayikistán</option>
                    <option value="TF">Territorios franceses del Sur</option>
                    <option value="TP">Timor Oriental</option>
                    <option value="TG">Togo</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad y Tobago</option>
                    <option value="TN">Túnez</option>
                    <option value="TM">Turkmenistán</option>
                    <option value="TR">Turquía</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UA">Ucrania</option>
                    <option value="UG">Uganda</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistán</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="YE">Yemen</option>
                    <option value="YU">Yugoslavia</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabue</option>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <input type="text" class="form-control w-25 m-2 @error('TELCLI') border border-danger @enderror"
                    placeholder="Telefono Principal*" name="TELCLI" id="TELCLI" value="{{ old('TELCLI') }}" />
                <input type="text" class="form-control w-25 m-2 @error('TELF2') border border-danger @enderror"
                    placeholder="Telefono 2" name="TELF2" id="TELF2" value="{{ old('TELF2') }}" />
                <input type="text" class="form-control w-25 m-2 @error('MOVIL') border border-danger @enderror"
                    placeholder="Movil" name="MOVIL" id="MOVIL" value="{{ old('MOVIL') }}" />
                <input type="text" class="form-control w-25 m-2 @error('FAXCLI') border border-danger @enderror"
                    placeholder="Fax" name="FAXCLI" id="FAXCLI" value="{{ old('FAXCLI') }}" />
            </div>
            <div class="d-flex justify-content-center">
                <input type="text" class="form-control w-50 m-2 @error('EMACLI') border border-danger @enderror"
                    placeholder="Email*" name="EMACLI" id="EMACLI" value="{{ old('EMACLI') }}" />
                <input type="text" class="form-control w-50 m-2 @error('WEBCLI') border border-danger @enderror"
                    placeholder="Web" name="WEBCLI" id="WEBCLI" value="{{ old('WEBCLI') }}" />
            </div>
            <div class="container mt-2">
                <h4>Forma de pago</h4>
            </div>
            {{-- #################### FORMA DE PAGO #################### --}}
            <div class="d-flex justify-content-start align-content-center h-100 ">
                <div class="w-50 m-2">
                    <div class="btn-group @error('FPACLI') border border-danger border-5  @enderror" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="radio" class="btn-check " name="FPACLI" id="pagare" value="pagare"
                            autocomplete="off" />
                        <label class="btn btn-outline-primary align-content-center " for="pagare">Pagaré 30 días</label>

                        <input type="radio" class="btn-check" name="FPACLI" id="propuesta" value="propuesta"
                            autocomplete="off" />
                        <label class="btn btn-outline-primary align-content-center " for="propuesta">Propuesta por el
                            cliente</label>
                    </div>
                </div>
                {{-- #################### PROPUESTA DEL CLIENTE #################### --}}
                <div id="proposal" class="w-50 m-2">
                    <div class="m-2">
                        <textarea class="form-control m-2 ms-0" type="text" placeholder="Propuesta del cliente"
                            name="PROPCLI" id="PROPCLI" value="{{ old('PROPCLI') }}"></textarea>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#proposal').hide();
                        });

                        $(function() {
                            $('.btn-group').click(function() {
                                if ($('#propuesta').is(':checked')) {
                                    $('#proposal').show();
                                } else {
                                    $('#proposal').hide();
                                }
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="text-danger ms-4">
                La forma de pago quedará sujeta a estudio y autorización por parte de la
                empresa. La empresa se reserva el derecho de modificar la forma de pago en caso de no resultar
                viable.
            </div>

            {{-- #################### MENSAJE #################### --}}
            <div class="container">
                <div class="m-2">
                    <h4>Mensaje</h4>
                </div>
                <div class="w-100 m-2">
                    <textarea class="form-control w-100" name="MENSAJE" id="MENSAJE">{{ old('MENSAJE') }}</textarea>
                </div>
            </div>
            {{-- #################### OBSERVACIONES #################### --}}
            <div class="container">
                <div class="m-2">
                    <h4>Observaciones cliente</h4>
                </div>
                <div class="w-100 m-2">
                    <textarea class="form-control w-100" name="OBSCLI" id="OBSCLI">{{ old('OBSCLI') }}</textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25 mt-2">
                    Enviar formulario
                </button>
            </div>
        </form>
    </div>
@endsection

@section('footer')
@endsection
