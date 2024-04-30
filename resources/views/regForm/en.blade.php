@extends('layout.app')

@section('title')
    Registro StoneCloud
@endsection

@section('content')
    <div class="container bg-light opacity-75 ">
        <div class="m-4 d-flex justify-content-center">
            <img src="https://stonecloud.es/assets/images/applications/logo/logo.svg" alt="stonecloud logo" width="300">
        </div>
        <div class="text-center">
            <h1 class="text-capitalize text-secondary opacity-100 ">Register Form</h1>
        </div>
    </div>
    @if (session('success'))
        <div class="container py-2  text-bg-success w-100 justify-content-center text-center">
            {{ session('success') }}</div>
    @endif
    <div class="container bg-light p-2 opacity-100 ">
        <div class="container mt-2">
            <h4 class="m-1">Tax Data</h4>
        </div>
        <form action="{{ route('clientes.store') }}" method="post">
            @csrf
            <div class="d-flex justify-content-center ">
                {{-- #################### DATOS FISCALES #################### --}}
                <input type="text" class="form-control w-25 m-2 @error('NIFCLI') border border-danger @enderror"
                    placeholder="Tax identification code*" name="NIFCLI" id="NIFCLI" value="{{ old('NIFCLI') }}" />
                <input type="text" class="form-control w-50 m-2 @error('NOMBREFIS') border border-danger @enderror"
                    placeholder="Tax Name*" name="NOMBREFIS" id="NOMBREFIS" value="{{ old('NOMBREFIS') }}" />
                <input type="text" class="form-control w-50 m-2 @error('NOMBRECOM') border border-danger @enderror"
                    placeholder="Tradename*" name="NOMBRECOM" id="NOMBRECOM" value="{{ old('NOMBRECOM') }}" />
            </div>
            <div class="d-flex justify-content-center ">
                <input type="text" class="form-control w-50 m-2 @error('DOMCLI') border border-danger @enderror"
                    placeholder="Address*" name="DOMCLI" id="DOMCLI" value="{{ old('DOMCLI') }}" />
                <input type="text" class="form-control w-25 m-2 @error('CPOCLI') border border-danger @enderror"
                    placeholder="Postal Code*" name="CPOCLI" id="CPOCLI" value="{{ old('CPOCLI') }}" />
                <input type="text" class="form-control w-25 m-2 @error('POBCLI') border border-danger @enderror"
                    placeholder="City*" name="POBCLI" id="POBCLI" value="{{ old('POBCLI') }}" />
            </div>
            <div class="d-flex justify-content-center ">
                <select class="form-control w-100 m-2 @error('PAIS') border border-danger @enderror" name="PAIS"
                    id="PAIS">
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote d'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="TP">East Timor</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard and McDonald Islands</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia (Slovak Republic)</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SH">St. Helena</option>
                    <option value="PM">St. Pierre and Miquelon</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB" selected>United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatican City State (Holy See)</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="VG">Virgin Islands (British)</option>
                    <option value="VI">Virgin Islands (U.S.)</option>
                    <option value="WF">Wallis and Futuna Islands</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="YU">Yugoslavia</option>
                    <option value="ZR">Zaire</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>

                </select>
            </div>
            <div class="d-flex justify-content-center">
                <input type="text" class="form-control w-25 m-2 @error('TELCLI') border border-danger @enderror"
                    placeholder="Main Phone Number*" name="TELCLI" id="TELCLI" value="{{ old('TELCLI') }}" />
                <input type="text" class="form-control w-25 m-2 @error('TELF2') border border-danger @enderror"
                    placeholder="Second Phone Number" name="TELF2" id="TELF2" value="{{ old('TELF2') }}" />
                <input type="text" class="form-control w-25 m-2 @error('MOVIL') border border-danger @enderror"
                    placeholder="Mobile Phone Number" name="MOVIL" id="MOVIL" value="{{ old('MOVIL') }}" />
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
                <h4>Payment method</h4>
            </div>
            {{-- #################### FORMA DE PAGO #################### --}}
            <div class="d-flex justify-content-start align-content-center h-100 ">
                <div class="w-50 m-2">
                    <div class="btn-group @error('FPACLI') border border-danger border-5  @enderror" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="radio" class="btn-check " name="FPACLI" id="transf_bancaria" value="transf_bancaria"
                            autocomplete="off" />
                        <label class="btn btn-outline-primary align-content-center " for="transf_bancaria">100% Pre payment by
                            Bank transfer. Acording to PROFORMA INVOICE.</label>

                        <input type="radio" class="btn-check" name="FPACLI" id="propuesta" value="propuesta"
                            autocomplete="off" />
                        <label class="btn btn-outline-primary align-content-center " for="propuesta">Client proposed payment method</label>
                    </div>
                </div>
                {{-- #################### PROPUESTA DEL CLIENTE #################### --}}
                <div id="proposal" class="w-50 m-2">
                    <div class="m-2">
                        <textarea class="form-control m-2 ms-0" type="text" placeholder="Customer proposed method" name="PROPCLI"
                            id="PROPCLI" value="{{ old('PROPCLI') }}"></textarea>
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
            <div class="text-danger m-4">
                *The form of payment will be subject to study and authorization by the company. The company reserves
                the right to modify the form of payment in case it is not feasible.
            </div>

            {{-- #################### MENSAJE #################### --}}
            <div class="container">
                <div class="m-2">
                    <h4>Message</h4>
                </div>
                <div class="w-100 m-2">
                    <textarea class="form-control w-100" name="MENSAJE" id="MENSAJE">{{ old('MENSAJE') }}</textarea>
                </div>
            </div>
            {{-- #################### OBSERVACIONES #################### --}}
            <div class="container">
                <div class="m-2">
                    <h4>Customer comments</h4>
                </div>
                <div class="w-100 m-2">
                    <textarea class="form-control w-100" name="OBSCLI" id="OBSCLI">{{ old('OBSCLI') }}</textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25 mt-2">
                    Submit form
                </button>
            </div>
        </form>
    </div>
@endsection

@section('footer')
@endsection
