@extends('layouts.default')
    
    @section('styles')
        <script>var admin = true;</script>
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">General Settings</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">

            <div class="box box-success">
                <div class="box-body">
                            
                    <div class="ui secondary blue pointing tabular menu">
                        <a class="item active" data-tab="system">System</a>
                        <a class="item" data-tab="about">About</a>
                        <a class="item" data-tab="attribution">Attributions</a>
                    </div>
                    
                    <div class="ui tab active" data-tab="system">
                        <div class="col-md-12">
                            <div class="tab-content">
                                    
                                    <form action="{{ url('settings/update') }}" class="ui form" method="post" accept-charset="utf-8">
                                    <div class="content">
                                            
                                        {{ csrf_field() }}
                                            <h4 class="ui dividing header">Localization</h4>
                                            <div class="eight wide field">
                                                <label>Country</label>
                                                <select name="country" class="ui search dropdown uppercase">
                                                    <option value="">Select Country</option>
                                                    <option value="Afganistan" @if($data->country == "Afganistan") selected @endif>Afghanistan</option>
                                                    <option value="Albania" @if($data->country == "Albania") selected @endif>Albania</option>
                                                    <option value="Algeria" @if($data->country == "Algeria") selected @endif>Algeria</option>
                                                    <option value="American Samoa" @if($data->country == "American Samoa") selected @endif>American Samoa</option>
                                                    <option value="Andorra" @if($data->country == "Andorra") selected @endif>Andorra</option>
                                                    <option value="Angola" @if($data->country == "Angola") selected @endif>Angola</option>
                                                    <option value="Anguilla" @if($data->country == "Anguilla") selected @endif>Anguilla</option>
                                                    <option value="Antigua &amp; Barbuda" @if($data->country == "Antigua &amp; Barbuda") selected @endif>Antigua &amp; Barbuda</option>
                                                    <option value="Argentina" @if($data->country == "Argentina") selected @endif>Argentina</option>
                                                    <option value="Armenia" @if($data->country == "Armenia") selected @endif>Armenia</option>
                                                    <option value="Aruba" @if($data->country == "Aruba") selected @endif>Aruba</option>
                                                    <option value="Australia" @if($data->country == "Australia") selected @endif>Australia</option>
                                                    <option value="Austria" @if($data->country == "Austria") selected @endif>Austria</option>
                                                    <option value="Azerbaijan" @if($data->country == "Azerbaijan") selected @endif>Azerbaijan</option>
                                                    <option value="Bahamas" @if($data->country == "Bahamas") selected @endif>Bahamas</option>
                                                    <option value="Bahrain" @if($data->country == "Bahrain") selected @endif>Bahrain</option>
                                                    <option value="Bangladesh" @if($data->country == "Bangladesh") selected @endif>Bangladesh</option>
                                                    <option value="Barbados" @if($data->country == "Barbados") selected @endif>Barbados</option>
                                                    <option value="Belarus" @if($data->country == "Belarus") selected @endif>Belarus</option>
                                                    <option value="Belgium" @if($data->country == "Belgium") selected @endif>Belgium</option>
                                                    <option value="Belize" @if($data->country == "Belize") selected @endif>Belize</option>
                                                    <option value="Benin" @if($data->country == "Benin") selected @endif>Benin</option>
                                                    <option value="Bermuda" @if($data->country == "Bermuda") selected @endif>Bermuda</option>
                                                    <option value="Bhutan" @if($data->country == "Bhutan") selected @endif>Bhutan</option>
                                                    <option value="Bolivia" @if($data->country == "Bolivia") selected @endif>Bolivia</option>
                                                    <option value="Bonaire" @if($data->country == "Bonaire") selected @endif>Bonaire</option>
                                                    <option value="Bosnia &amp; Herzegovina" @if($data->country == "Bosnia &amp; Herzegovina") selected @endif>Bosnia &amp; Herzegovina</option>
                                                    <option value="Botswana" @if($data->country == "Botswana") selected @endif>Botswana</option>
                                                    <option value="Brazil" @if($data->country == "Brazil") selected @endif>Brazil</option>
                                                    <option value="British Indian Ocean Ter" @if($data->country == "British Indian Ocean Ter") selected @endif>British Indian Ocean Ter</option>
                                                    <option value="Brunei" @if($data->country == "Brunei") selected @endif>Brunei</option>
                                                    <option value="Bulgaria" @if($data->country == "Bulgaria") selected @endif>Bulgaria</option>
                                                    <option value="Burkina Faso" @if($data->country == "Burkina Faso") selected @endif>Burkina Faso</option>
                                                    <option value="Burundi" @if($data->country == "Burundi") selected @endif>Burundi</option>
                                                    <option value="Cambodia" @if($data->country == "Cambodia") selected @endif>Cambodia</option>
                                                    <option value="Cameroon" @if($data->country == "Cameroon") selected @endif>Cameroon</option>
                                                    <option value="Canada" @if($data->country == "Canada") selected @endif>Canada</option>
                                                    <option value="Canary Islands" @if($data->country == "Canary Islands") selected @endif>Canary Islands</option>
                                                    <option value="Cape Verde" @if($data->country == "Cape Verde") selected @endif>Cape Verde</option>
                                                    <option value="Cayman Islands" @if($data->country == "Cayman Islands") selected @endif>Cayman Islands</option>
                                                    <option value="Central African Republic" @if($data->country == "Central African Republic") selected @endif>Central African Republic</option>
                                                    <option value="Chad" @if($data->country == "Chad") selected @endif>Chad</option>
                                                    <option value="Channel Islands" @if($data->country == "Channel Islands") selected @endif>Channel Islands</option>
                                                    <option value="Chile" @if($data->country == "Chile") selected @endif>Chile</option>
                                                    <option value="China" @if($data->country == "China") selected @endif>China</option>
                                                    <option value="Christmas Island" @if($data->country == "Christmas Island") selected @endif>Christmas Island</option>
                                                    <option value="Cocos Island" @if($data->country == "Cocos Island") selected @endif>Cocos Island</option>
                                                    <option value="Colombia" @if($data->country == "Colombia") selected @endif>Colombia</option>
                                                    <option value="Comoros" @if($data->country == "Comoros") selected @endif>Comoros</option>
                                                    <option value="Congo" @if($data->country == "Congo") selected @endif>Congo</option>
                                                    <option value="Cook Islands" @if($data->country == "Cook Islands") selected @endif>Cook Islands</option>
                                                    <option value="Costa Rica" @if($data->country == "Costa Rica") selected @endif>Costa Rica</option>
                                                    <option value="Cote DIvoire" @if($data->country == "Cote DIvoire") selected @endif>Cote DIvoire</option>
                                                    <option value="Croatia" @if($data->country == "Croatia") selected @endif>Croatia</option>
                                                    <option value="Cuba" @if($data->country == "Cuba") selected @endif>Cuba</option>
                                                    <option value="Curaco" @if($data->country == "Curaco") selected @endif>Curacao</option>
                                                    <option value="Cyprus" @if($data->country == "Cyprus") selected @endif>Cyprus</option>
                                                    <option value="Czech Republic" @if($data->country == "Czech Republic") selected @endif>Czech Republic</option>
                                                    <option value="Denmark" @if($data->country == "Denmark") selected @endif>Denmark</option>
                                                    <option value="Djibouti" @if($data->country == "Djibouti") selected @endif>Djibouti</option>
                                                    <option value="Dominica" @if($data->country == "Dominica") selected @endif>Dominica</option>
                                                    <option value="Dominican Republic" @if($data->country == "Dominican Republic") selected @endif>Dominican Republic</option>
                                                    <option value="East Timor" @if($data->country == "East Timor") selected @endif>East Timor</option>
                                                    <option value="Ecuador" @if($data->country == "Ecuador") selected @endif>Ecuador</option>
                                                    <option value="Egypt" @if($data->country == "Egypt") selected @endif>Egypt</option>
                                                    <option value="El Salvador" @if($data->country == "El Salvador") selected @endif>El Salvador</option>
                                                    <option value="Equatorial Guinea" @if($data->country == "Equatorial Guinea") selected @endif>Equatorial Guinea</option>
                                                    <option value="Eritrea" @if($data->country == "Eritrea") selected @endif>Eritrea</option>
                                                    <option value="Estonia" @if($data->country == "Estonia") selected @endif>Estonia</option>
                                                    <option value="Ethiopia" @if($data->country == "Ethiopia") selected @endif>Ethiopia</option>
                                                    <option value="Falkland Islands" @if($data->country == "Falkland Islands") selected @endif>Falkland Islands</option>
                                                    <option value="Faroe Islands" @if($data->country == "Faroe Islands") selected @endif>Faroe Islands</option>
                                                    <option value="Fiji" @if($data->country == "Fiji") selected @endif>Fiji</option>
                                                    <option value="Finland" @if($data->country == "Finland") selected @endif>Finland</option>
                                                    <option value="France" @if($data->country == "France") selected @endif>France</option>
                                                    <option value="French Guiana" @if($data->country == "French Guiana") selected @endif>French Guiana</option>
                                                    <option value="French Polynesia" @if($data->country == "French Polynesia") selected @endif>French Polynesia</option>
                                                    <option value="French Southern Ter" @if($data->country == "French Southern Ter") selected @endif>French Southern Ter</option>
                                                    <option value="Gabon" @if($data->country == "Gabon") selected @endif>Gabon</option>
                                                    <option value="Gambia" @if($data->country == "Gambia") selected @endif>Gambia</option>
                                                    <option value="Georgia" @if($data->country == "Georgia") selected @endif>Georgia</option>
                                                    <option value="Germany" @if($data->country == "Germany") selected @endif>Germany</option>
                                                    <option value="Ghana" @if($data->country == "Ghana") selected @endif>Ghana</option>
                                                    <option value="Gibraltar" @if($data->country == "Gibraltar") selected @endif>Gibraltar</option>
                                                    <option value="Great Britain" @if($data->country == "Great Britain") selected @endif>Great Britain</option>
                                                    <option value="Greece" @if($data->country == "Greece") selected @endif>Greece</option>
                                                    <option value="Greenland" @if($data->country == "Greenland") selected @endif>Greenland</option>
                                                    <option value="Grenada" @if($data->country == "Grenada") selected @endif>Grenada</option>
                                                    <option value="Guadeloupe" @if($data->country == "Guadeloupe") selected @endif>Guadeloupe</option>
                                                    <option value="Guam" @if($data->country == "Guam") selected @endif>Guam</option>
                                                    <option value="Guatemala" @if($data->country == "Guatemala") selected @endif>Guatemala</option>
                                                    <option value="Guinea" @if($data->country == "Guinea") selected @endif>Guinea</option>
                                                    <option value="Guyana" @if($data->country == "Guyana") selected @endif>Guyana</option>
                                                    <option value="Haiti" @if($data->country == "Haiti") selected @endif>Haiti</option>
                                                    <option value="Hawaii" @if($data->country == "Hawaii") selected @endif>Hawaii</option>
                                                    <option value="Honduras" @if($data->country == "Honduras") selected @endif>Honduras</option>
                                                    <option value="Hong Kong" @if($data->country == "Hong Kong") selected @endif>Hong Kong</option>
                                                    <option value="Hungary" @if($data->country == "Hungary") selected @endif>Hungary</option>
                                                    <option value="Iceland" @if($data->country == "Iceland") selected @endif>Iceland</option>
                                                    <option value="India" @if($data->country == "India") selected @endif>India</option>
                                                    <option value="Indonesia" @if($data->country == "Indonesia") selected @endif>Indonesia</option>
                                                    <option value="Iran" @if($data->country == "Iran") selected @endif>Iran</option>
                                                    <option value="Iraq" @if($data->country == "Iraq") selected @endif>Iraq</option>
                                                    <option value="Ireland" @if($data->country == "Ireland") selected @endif>Ireland</option>
                                                    <option value="Isle of Man" @if($data->country == "Isle of Man") selected @endif>Isle of Man</option>
                                                    <option value="Israel" @if($data->country == "Israel") selected @endif>Israel</option>
                                                    <option value="Italy" @if($data->country == "Italy") selected @endif>Italy</option>
                                                    <option value="Jamaica" @if($data->country == "Jamaica") selected @endif>Jamaica</option>
                                                    <option value="Japan" @if($data->country == "Japan") selected @endif>Japan</option>
                                                    <option value="Jordan" @if($data->country == "Jordan") selected @endif>Jordan</option>
                                                    <option value="Kazakhstan" @if($data->country == "Kazakhstan") selected @endif>Kazakhstan</option>
                                                    <option value="Kenya" @if($data->country == "Kenya") selected @endif>Kenya</option>
                                                    <option value="Kiribati" @if($data->country == "Kiribati") selected @endif>Kiribati</option>
                                                    <option value="Korea North" @if($data->country == "Korea North") selected @endif>Korea North</option>
                                                    <option value="Korea Sout" @if($data->country == "Korea Sout") selected @endif>Korea South</option>
                                                    <option value="Kuwait" @if($data->country == "Kuwait") selected @endif>Kuwait</option>
                                                    <option value="Kyrgyzstan" @if($data->country == "Kyrgyzstan") selected @endif>Kyrgyzstan</option>
                                                    <option value="Laos" @if($data->country == "Laos") selected @endif>Laos</option>
                                                    <option value="Latvia" @if($data->country == "Latvia") selected @endif>Latvia</option>
                                                    <option value="Lebanon" @if($data->country == "Lebanon") selected @endif>Lebanon</option>
                                                    <option value="Lesotho" @if($data->country == "Lesotho") selected @endif>Lesotho</option>
                                                    <option value="Liberia" @if($data->country == "Liberia") selected @endif>Liberia</option>
                                                    <option value="Libya" @if($data->country == "Libya") selected @endif>Libya</option>
                                                    <option value="Liechtenstein" @if($data->country == "Liechtenstein") selected @endif>Liechtenstein</option>
                                                    <option value="Lithuania" @if($data->country == "Lithuania") selected @endif>Lithuania</option>
                                                    <option value="Luxembourg" @if($data->country == "Luxembourg") selected @endif>Luxembourg</option>
                                                    <option value="Macau" @if($data->country == "Macau") selected @endif>Macau</option>
                                                    <option value="Macedonia" @if($data->country == "Macedonia") selected @endif>Macedonia</option>
                                                    <option value="Madagascar" @if($data->country == "Madagascar") selected @endif>Madagascar</option>
                                                    <option value="Malaysia" @if($data->country == "Malaysia") selected @endif>Malaysia</option>
                                                    <option value="Malawi" @if($data->country == "Malawi") selected @endif>Malawi</option>
                                                    <option value="Maldives" @if($data->country == "Maldives") selected @endif>Maldives</option>
                                                    <option value="Mali" @if($data->country == "Mali") selected @endif>Mali</option>
                                                    <option value="Malta" @if($data->country == "Malta") selected @endif>Malta</option>
                                                    <option value="Marshall Islands" @if($data->country == "Marshall Islands") selected @endif>Marshall Islands</option>
                                                    <option value="Martinique" @if($data->country == "Martinique") selected @endif>Martinique</option>
                                                    <option value="Mauritania" @if($data->country == "Mauritania") selected @endif>Mauritania</option>
                                                    <option value="Mauritius" @if($data->country == "Mauritius") selected @endif>Mauritius</option>
                                                    <option value="Mayotte" @if($data->country == "Mayotte") selected @endif>Mayotte</option>
                                                    <option value="Mexico" @if($data->country == "Mexico") selected @endif>Mexico</option>
                                                    <option value="Midway Islands" @if($data->country == "Midway Islands") selected @endif>Midway Islands</option>
                                                    <option value="Moldova" @if($data->country == "Moldova") selected @endif>Moldova</option>
                                                    <option value="Monaco" @if($data->country == "Monaco") selected @endif>Monaco</option>
                                                    <option value="Mongolia" @if($data->country == "Mongolia") selected @endif>Mongolia</option>
                                                    <option value="Montserrat" @if($data->country == "Montserrat") selected @endif>Montserrat</option>
                                                    <option value="Morocco" @if($data->country == "Morocco") selected @endif>Morocco</option>
                                                    <option value="Mozambique" @if($data->country == "Mozambique") selected @endif>Mozambique</option>
                                                    <option value="Myanmar" @if($data->country == "Myanmar") selected @endif>Myanmar</option>
                                                    <option value="Nambia" @if($data->country == "Nambia") selected @endif>Nambia</option>
                                                    <option value="Nauru" @if($data->country == "Nauru") selected @endif>Nauru</option>
                                                    <option value="Nepal" @if($data->country == "Nepal") selected @endif>Nepal</option>
                                                    <option value="Netherland Antilles" @if($data->country == "Netherland Antilles") selected @endif>Netherland Antilles</option>
                                                    <option value="Netherlands" @if($data->country == "Netherlands") selected @endif>Netherlands (Holland, Europe)</option>
                                                    <option value="Nevis" @if($data->country == "Nevis") selected @endif>Nevis</option>
                                                    <option value="New Caledonia" @if($data->country == "New Caledonia") selected @endif>New Caledonia</option>
                                                    <option value="New Zealand" @if($data->country == "New Zealand") selected @endif>New Zealand</option>
                                                    <option value="Nicaragua" @if($data->country == "Nicaragua") selected @endif>Nicaragua</option>
                                                    <option value="Niger" @if($data->country == "Niger") selected @endif>Niger</option>
                                                    <option value="Nigeria" @if($data->country == "Nigeria") selected @endif>Nigeria</option>
                                                    <option value="Niue" @if($data->country == "Niue") selected @endif>Niue</option>
                                                    <option value="Norfolk Island" @if($data->country == "Norfolk Island") selected @endif>Norfolk Island</option>
                                                    <option value="Norway" @if($data->country == "Norway") selected @endif>Norway</option>
                                                    <option value="Oman" @if($data->country == "Oman") selected @endif>Oman</option>
                                                    <option value="Pakistan" @if($data->country == "Pakistan") selected @endif>Pakistan</option>
                                                    <option value="Palau Island" @if($data->country == "Palau Island") selected @endif>Palau Island</option>
                                                    <option value="Palestine" @if($data->country == "Palestine") selected @endif>Palestine</option>
                                                    <option value="Panama" @if($data->country == "Panama") selected @endif>Panama</option>
                                                    <option value="Papua New Guinea" @if($data->country == "Papua New Guinea") selected @endif>Papua New Guinea</option>
                                                    <option value="Paraguay" @if($data->country == "Paraguay") selected @endif>Paraguay</option>
                                                    <option value="Peru" @if($data->country == "Peru") selected @endif>Peru</option>
                                                    <option value="Phillipines" @if($data->country == "Phillipines") selected @endif>Philippines</option>
                                                    <option value="Pitcairn Island" @if($data->country == "Pitcairn Island") selected @endif>Pitcairn Island</option>
                                                    <option value="Poland" @if($data->country == "Poland") selected @endif>Poland</option>
                                                    <option value="Portugal" @if($data->country == "Portugal") selected @endif>Portugal</option>
                                                    <option value="Puerto Rico" @if($data->country == "Puerto Rico") selected @endif>Puerto Rico</option>
                                                    <option value="Qatar" @if($data->country == "Qatar") selected @endif>Qatar</option>
                                                    <option value="Republic of Montenegro" @if($data->country == "Republic of Montenegro") selected @endif>Republic of Montenegro</option>
                                                    <option value="Republic of Serbia" @if($data->country == "Republic of Serbia") selected @endif>Republic of Serbia</option>
                                                    <option value="Reunion" @if($data->country == "Reunion") selected @endif>Reunion</option>
                                                    <option value="Romania" @if($data->country == "Romania") selected @endif>Romania</option>
                                                    <option value="Russia" @if($data->country == "Russia") selected @endif>Russia</option>
                                                    <option value="Rwanda" @if($data->country == "Rwanda") selected @endif>Rwanda</option>
                                                    <option value="St Barthelemy" @if($data->country == "St Barthelemy") selected @endif>St Barthelemy</option>
                                                    <option value="St Eustatius" @if($data->country == "St Eustatius") selected @endif>St Eustatius</option>
                                                    <option value="St Helena" @if($data->country == "St Helena") selected @endif>St Helena</option>
                                                    <option value="St Kitts-Nevis" @if($data->country == "St Kitts-Nevis") selected @endif>St Kitts-Nevis</option>
                                                    <option value="St Lucia" @if($data->country == "St Lucia") selected @endif>St Lucia</option>
                                                    <option value="St Maarten" @if($data->country == "St Maarten") selected @endif>St Maarten</option>
                                                    <option value="St Pierre &amp; Miquelon" @if($data->country == "St Pierre &amp; Miquelon") selected @endif>St Pierre &amp; Miquelon</option>
                                                    <option value="St Vincent &amp; Grenadines" @if($data->country == "St Vincent &amp; Grenadines") selected @endif>St Vincent &amp; Grenadines</option>
                                                    <option value="Saipan" @if($data->country == "Saipan") selected @endif>Saipan</option>
                                                    <option value="Samoa" @if($data->country == "Samoa") selected @endif>Samoa</option>
                                                    <option value="Samoa American" @if($data->country == "Samoa American") selected @endif>Samoa American</option>
                                                    <option value="San Marino" @if($data->country == "San Marino") selected @endif>San Marino</option>
                                                    <option value="Sao Tome &amp; Principe" @if($data->country == "Sao Tome &amp; Principe") selected @endif>Sao Tome &amp; Principe</option>
                                                    <option value="Saudi Arabia" @if($data->country == "Saudi Arabia") selected @endif>Saudi Arabia</option>
                                                    <option value="Senegal" @if($data->country == "Senegal") selected @endif>Senegal</option>
                                                    <option value="Serbia" @if($data->country == "Serbia") selected @endif>Serbia</option>
                                                    <option value="Seychelles" @if($data->country == "Seychelles") selected @endif>Seychelles</option>
                                                    <option value="Sierra Leone" @if($data->country == "Sierra Leone") selected @endif>Sierra Leone</option>
                                                    <option value="Singapore" @if($data->country == "Singapore") selected @endif>Singapore</option>
                                                    <option value="Slovakia" @if($data->country == "Slovakia") selected @endif>Slovakia</option>
                                                    <option value="Slovenia" @if($data->country == "Slovenia") selected @endif>Slovenia</option>
                                                    <option value="Solomon Islands" @if($data->country == "Solomon Islands") selected @endif>Solomon Islands</option>
                                                    <option value="Somalia" @if($data->country == "Somalia") selected @endif>Somalia</option>
                                                    <option value="South Africa" @if($data->country == "South Africa") selected @endif>South Africa</option>
                                                    <option value="Spain" @if($data->country == "Spain") selected @endif>Spain</option>
                                                    <option value="Sri Lanka" @if($data->country == "Sri Lanka") selected @endif>Sri Lanka</option>
                                                    <option value="Sudan" @if($data->country == "Sudan") selected @endif>Sudan</option>
                                                    <option value="Suriname" @if($data->country == "Suriname") selected @endif>Suriname</option>
                                                    <option value="Swaziland" @if($data->country == "Swaziland") selected @endif>Swaziland</option>
                                                    <option value="Sweden" @if($data->country == "Sweden") selected @endif>Sweden</option>
                                                    <option value="Switzerland" @if($data->country == "Switzerland") selected @endif>Switzerland</option>
                                                    <option value="Syria" @if($data->country == "Syria") selected @endif>Syria</option>
                                                    <option value="Tahiti" @if($data->country == "Tahiti") selected @endif>Tahiti</option>
                                                    <option value="Taiwan" @if($data->country == "Taiwan") selected @endif>Taiwan</option>
                                                    <option value="Tajikistan" @if($data->country == "Tajikistan") selected @endif>Tajikistan</option>
                                                    <option value="Tanzania" @if($data->country == "Tanzania") selected @endif>Tanzania</option>
                                                    <option value="Thailand" @if($data->country == "Thailand") selected @endif>Thailand</option>
                                                    <option value="Togo" @if($data->country == "Togo") selected @endif>Togo</option>
                                                    <option value="Tokelau" @if($data->country == "Tokelau") selected @endif>Tokelau</option>
                                                    <option value="Tonga" @if($data->country == "Tonga") selected @endif>Tonga</option>
                                                    <option value="Trinidad &amp; Tobago" @if($data->country == "Trinidad &amp; Tobago") selected @endif>Trinidad &amp; Tobago</option>
                                                    <option value="Tunisia" @if($data->country == "Tunisia") selected @endif>Tunisia</option>
                                                    <option value="Turkey" @if($data->country == "Turkey") selected @endif>Turkey</option>
                                                    <option value="Turkmenistan" @if($data->country == "Turkmenistan") selected @endif>Turkmenistan</option>
                                                    <option value="Turks &amp; Caicos Is" @if($data->country == "Turks &amp; Caicos Is") selected @endif>Turks &amp; Caicos Is</option>
                                                    <option value="Tuvalu" @if($data->country == "Tuvalu") selected @endif>Tuvalu</option>
                                                    <option value="Uganda" @if($data->country == "Uganda") selected @endif>Uganda</option>
                                                    <option value="Ukraine" @if($data->country == "Ukraine") selected @endif>Ukraine</option>
                                                    <option value="United Arab Erimates" @if($data->country == "United Arab Erimates") selected @endif>United Arab Emirates</option>
                                                    <option value="United Kingdom" @if($data->country == "United Kingdom") selected @endif>United Kingdom</option>
                                                    <option value="United States of America" @if($data->country == "United States of America") selected @endif>United States of America</option>
                                                    <option value="Uraguay" @if($data->country == "Uraguay") selected @endif>Uruguay</option>
                                                    <option value="Uzbekistan" @if($data->country == "Uzbekistan") selected @endif>Uzbekistan</option>
                                                    <option value="Vanuatu" @if($data->country == "Vanuatu") selected @endif>Vanuatu</option>
                                                    <option value="Vatican City State" @if($data->country == "Vatican City State") selected @endif>Vatican City State</option>
                                                    <option value="Venezuela" @if($data->country == "Venezuela") selected @endif>Venezuela</option>
                                                    <option value="Vietnam" @if($data->country == "Vietnam") selected @endif>Vietnam</option>
                                                    <option value="Virgin Islands (Brit)" @if($data->country == "Virgin Islands (Brit)") selected @endif>Virgin Islands (Brit)</option>
                                                    <option value="Virgin Islands (USA)" @if($data->country == "Virgin Islands (USA)") selected @endif>Virgin Islands (USA)</option>
                                                    <option value="Wake Island" @if($data->country == "Wake Island") selected @endif>Wake Island</option>
                                                    <option value="Wallis &amp; Futana Is" @if($data->country == "Wallis &amp; Futana Is") selected @endif>Wallis &amp; Futana Is</option>
                                                    <option value="Yemen" @if($data->country == "Yemen") selected @endif>Yemen</option>
                                                    <option value="Zaire" @if($data->country == "Zaire") selected @endif>Zaire</option>
                                                    <option value="Zambia" @if($data->country == "Zambia") selected @endif>Zambia</option>
                                                    <option value="Zimbabwe" @if($data->country == "Zimbabwe") selected @endif>Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Timezone</label>
                                                <select name="timezone" class="ui search dropdown uppercase">
                                                    <option value="">Select Timezone</option>
                                                    <option value="Pacific/Midway" @if($data->timezone == "Pacific/Midway") selected @endif>(UTC -11:00) Pacific/Midway</option>
                                                    <option value="Pacific/Niue" @if($data->timezone == "Pacific/Niue") selected @endif>(UTC -11:00) Pacific/Niue</option>
                                                    <option value="Pacific/Pago_Pago" @if($data->timezone == "Pacific/Pago_Pago") selected @endif>(UTC -11:00) Pacific/Pago_Pago</option>
                                                    <option value="America/Adak" @if($data->timezone == "America/Adak") selected @endif>(UTC -10:00) America/Adak</option>
                                                    <option value="Pacific/Honolulu" @if($data->timezone == "Pacific/Honolulu") selected @endif>(UTC -10:00) Pacific/Honolulu</option>
                                                    <option value="Pacific/Rarotonga" @if($data->timezone == "Pacific/Rarotonga") selected @endif>(UTC -10:00) Pacific/Rarotonga</option>
                                                    <option value="Pacific/Tahiti" @if($data->timezone == "Pacific/Tahiti") selected @endif>(UTC -10:00) Pacific/Tahiti</option>
                                                    <option value="Pacific/Marquesas" @if($data->timezone == "Pacific/Marquesas") selected @endif>(UTC -09:30) Pacific/Marquesas</option>
                                                    <option value="America/Anchorage" @if($data->timezone == "America/Anchorage") selected @endif>(UTC -09:00) America/Anchorage</option>
                                                    <option value="America/Juneau" @if($data->timezone == "America/Juneau") selected @endif>(UTC -09:00) America/Juneau</option>
                                                    <option value="America/Metlakatla" @if($data->timezone == "America/Metlakatla") selected @endif>(UTC -09:00) America/Metlakatla</option>
                                                    <option value="America/Nome" @if($data->timezone == "America/Nome") selected @endif>(UTC -09:00) America/Nome</option>
                                                    <option value="America/Sitka" @if($data->timezone == "America/Sitka") selected @endif>(UTC -09:00) America/Sitka</option>
                                                    <option value="America/Yakutat" @if($data->timezone == "America/Yakutat") selected @endif>(UTC -09:00) America/Yakutat</option>
                                                    <option value="Pacific/Gambier" @if($data->timezone == "Pacific/Gambier") selected @endif>(UTC -09:00) Pacific/Gambier</option>
                                                    <option value="America/Dawson" @if($data->timezone == "America/Dawson") selected @endif>(UTC -08:00) America/Dawson</option>
                                                    <option value="America/Los_Angeles" @if($data->timezone == "America/Los_Angeles") selected @endif>(UTC -08:00) America/Los_Angeles</option>
                                                    <option value="America/Tijuana" @if($data->timezone == "America/Tijuana") selected @endif>(UTC -08:00) America/Tijuana</option>
                                                    <option value="America/Vancouver" @if($data->timezone == "America/Vancouver") selected @endif>(UTC -08:00) America/Vancouver</option>
                                                    <option value="America/Whitehorse" @if($data->timezone == "America/Whitehorse") selected @endif>(UTC -08:00) America/Whitehorse</option>
                                                    <option value="Pacific/Pitcairn" @if($data->timezone == "Pacific/Pitcairn") selected @endif>(UTC -08:00) Pacific/Pitcairn</option>
                                                    <option value="America/Boise" @if($data->timezone == "America/Boise") selected @endif>(UTC -07:00) America/Boise</option>
                                                    <option value="America/Cambridge_Bay" @if($data->timezone == "America/Cambridge_Bay") selected @endif>(UTC -07:00) America/Cambridge_Bay</option>
                                                    <option value="America/Chihuahua" @if($data->timezone == "America/Chihuahua") selected @endif>(UTC -07:00) America/Chihuahua</option>
                                                    <option value="America/Creston" @if($data->timezone == "America/Creston") selected @endif>(UTC -07:00) America/Creston</option>
                                                    <option value="America/Dawson_Creek" @if($data->timezone == "America/Dawson_Creek") selected @endif>(UTC -07:00) America/Dawson_Creek</option>
                                                    <option value="America/Denver" @if($data->timezone == "America/Denver") selected @endif>(UTC -07:00) America/Denver</option>
                                                    <option value="America/Edmonton" @if($data->timezone == "America/Edmonton") selected @endif>(UTC -07:00) America/Edmonton</option>
                                                    <option value="America/Fort_Nelson" @if($data->timezone == "America/Fort_Nelson") selected @endif>(UTC -07:00) America/Fort_Nelson</option>
                                                    <option value="America/Hermosillo" @if($data->timezone == "America/Hermosillo") selected @endif>(UTC -07:00) America/Hermosillo</option>
                                                    <option value="America/Inuvik" @if($data->timezone == "America/Inuvik") selected @endif>(UTC -07:00) America/Inuvik</option>
                                                    <option value="America/Mazatlan" @if($data->timezone == "America/Mazatlan") selected @endif>(UTC -07:00) America/Mazatlan</option>
                                                    <option value="America/Ojinaga" @if($data->timezone == "America/Ojinaga") selected @endif>(UTC -07:00) America/Ojinaga</option>
                                                    <option value="America/Phoenix" @if($data->timezone == "America/Phoenix") selected @endif>(UTC -07:00) America/Phoenix</option>
                                                    <option value="America/Yellowknife" @if($data->timezone == "America/Yellowknife") selected @endif>(UTC -07:00) America/Yellowknife</option>
                                                    <option value="America/Bahia_Banderas" @if($data->timezone == "America/Bahia_Banderas") selected @endif>(UTC -06:00) America/Bahia_Banderas</option>
                                                    <option value="America/Belize" @if($data->timezone == "America/Belize") selected @endif>(UTC -06:00) America/Belize</option>
                                                    <option value="America/Chicago" @if($data->timezone == "America/Chicago") selected @endif>(UTC -06:00) America/Chicago</option>
                                                    <option value="America/Costa_Rica" @if($data->timezone == "America/Costa_Rica") selected @endif>(UTC -06:00) America/Costa_Rica</option>
                                                    <option value="America/El_Salvador" @if($data->timezone == "America/El_Salvador") selected @endif>(UTC -06:00) America/El_Salvador</option>
                                                    <option value="America/Guatemala" @if($data->timezone == "America/Guatemala") selected @endif>(UTC -06:00) America/Guatemala</option>
                                                    <option value="America/Indiana/Knox" @if($data->timezone == "America/Indiana/Knox") selected @endif>(UTC -06:00) America/Indiana/Knox</option>
                                                    <option value="America/Indiana/Tell_City" @if($data->timezone == "America/Indiana/Tell_City") selected @endif>(UTC -06:00) America/Indiana/Tell_City</option>
                                                    <option value="America/Managua" @if($data->timezone == "America/Managua") selected @endif>(UTC -06:00) America/Managua</option>
                                                    <option value="America/Matamoros" @if($data->timezone == "America/Matamoros") selected @endif>(UTC -06:00) America/Matamoros</option>
                                                    <option value="America/Menominee" @if($data->timezone == "America/Menominee") selected @endif>(UTC -06:00) America/Menominee</option>
                                                    <option value="America/Merida" @if($data->timezone == "America/Merida") selected @endif>(UTC -06:00) America/Merida</option>
                                                    <option value="America/Mexico_City" @if($data->timezone == "America/Mexico_City") selected @endif>(UTC -06:00) America/Mexico_City</option>
                                                    <option value="America/Monterrey" @if($data->timezone == "America/Monterrey") selected @endif>(UTC -06:00) America/Monterrey</option>
                                                    <option value="America/North_Dakota/Beulah" @if($data->timezone == "America/North_Dakota/Beulah") selected @endif>(UTC -06:00) America/North_Dakota/Beulah</option>
                                                    <option value="America/North_Dakota/Center" @if($data->timezone == "America/North_Dakota/Center") selected @endif>(UTC -06:00) America/North_Dakota/Center</option>
                                                    <option value="America/North_Dakota/New_Salem" @if($data->timezone == "America/North_Dakota/New_Salem") selected @endif>(UTC -06:00) America/North_Dakota/New_Salem</option>
                                                    <option value="America/Rainy_River" @if($data->timezone == "America/Rainy_River") selected @endif>(UTC -06:00) America/Rainy_River</option>
                                                    <option value="America/Rankin_Inlet" @if($data->timezone == "America/Rankin_Inlet") selected @endif>(UTC -06:00) America/Rankin_Inlet</option>
                                                    <option value="America/Regina" @if($data->timezone == "America/Regina") selected @endif>(UTC -06:00) America/Regina</option>
                                                    <option value="America/Resolute" @if($data->timezone == "America/Resolute") selected @endif>(UTC -06:00) America/Resolute</option>
                                                    <option value="America/Swift_Current" @if($data->timezone == "America/Swift_Current") selected @endif>(UTC -06:00) America/Swift_Current</option>
                                                    <option value="America/Tegucigalpa" @if($data->timezone == "America/Tegucigalpa") selected @endif>(UTC -06:00) America/Tegucigalpa</option>
                                                    <option value="America/Winnipeg" @if($data->timezone == "America/Winnipeg") selected @endif>(UTC -06:00) America/Winnipeg</option>
                                                    <option value="Pacific/Galapagos" @if($data->timezone == "Pacific/Galapagos") selected @endif>(UTC -06:00) Pacific/Galapagos</option>
                                                    <option value="America/Atikokan" @if($data->timezone == "America/Atikokan") selected @endif>(UTC -05:00) America/Atikokan</option>
                                                    <option value="America/Bogota" @if($data->timezone == "America/Bogota") selected @endif>(UTC -05:00) America/Bogota</option>
                                                    <option value="America/Cancun" @if($data->timezone == "America/Cancun") selected @endif>(UTC -05:00) America/Cancun</option>
                                                    <option value="America/Cayman" @if($data->timezone == "America/Cayman") selected @endif>(UTC -05:00) America/Cayman</option>
                                                    <option value="America/Detroit" @if($data->timezone == "America/Detroit") selected @endif>(UTC -05:00) America/Detroit</option>
                                                    <option value="America/Eirunepe" @if($data->timezone == "America/Eirunepe") selected @endif>(UTC -05:00) America/Eirunepe</option>
                                                    <option value="America/Guayaquil" @if($data->timezone == "America/Guayaquil") selected @endif>(UTC -05:00) America/Guayaquil</option>
                                                    <option value="America/Havana" @if($data->timezone == "America/Havana") selected @endif>(UTC -05:00) America/Havana</option>
                                                    <option value="America/Indiana/Indianapolis" @if($data->timezone == "America/Indiana/Indianapolis") selected @endif>(UTC -05:00) America/Indiana/Indianapolis</option>
                                                    <option value="America/Indiana/Marengo" @if($data->timezone == "America/Indiana/Marengo") selected @endif>(UTC -05:00) America/Indiana/Marengo</option>
                                                    <option value="America/Indiana/Petersburg" @if($data->timezone == "America/Indiana/Petersburg") selected @endif>(UTC -05:00) America/Indiana/Petersburg</option>
                                                    <option value="America/Indiana/Vevay" @if($data->timezone == "America/Indiana/Vevay") selected @endif>(UTC -05:00) America/Indiana/Vevay</option>
                                                    <option value="America/Indiana/Vincennes" @if($data->timezone == "America/Indiana/Vincennes") selected @endif>(UTC -05:00) America/Indiana/Vincennes</option>
                                                    <option value="America/Indiana/Winamac" @if($data->timezone == "America/Indiana/Winamac") selected @endif>(UTC -05:00) America/Indiana/Winamac</option>
                                                    <option value="America/Iqaluit" @if($data->timezone == "America/Iqaluit") selected @endif>(UTC -05:00) America/Iqaluit</option>
                                                    <option value="America/Jamaica" @if($data->timezone == "America/Jamaica") selected @endif>(UTC -05:00) America/Jamaica</option>
                                                    <option value="America/Kentucky/Louisville" @if($data->timezone == "America/Kentucky/Louisville") selected @endif>(UTC -05:00) America/Kentucky/Louisville</option>
                                                    <option value="America/Kentucky/Monticello" @if($data->timezone == "America/Kentucky/Monticello") selected @endif>(UTC -05:00) America/Kentucky/Monticello</option>
                                                    <option value="America/Lima" @if($data->timezone == "America/Lima") selected @endif>(UTC -05:00) America/Lima</option>
                                                    <option value="America/Nassau" @if($data->timezone == "America/Nassau") selected @endif>(UTC -05:00) America/Nassau</option>
                                                    <option value="America/New_York" @if($data->timezone == "America/New_York") selected @endif>(UTC -05:00) America/New_York</option>
                                                    <option value="America/Nipigon" @if($data->timezone == "America/Nipigon") selected @endif>(UTC -05:00) America/Nipigon</option>
                                                    <option value="America/Panama" @if($data->timezone == "America/Panama") selected @endif>(UTC -05:00) America/Panama</option>
                                                    <option value="America/Pangnirtung" @if($data->timezone == "America/Pangnirtung") selected @endif>(UTC -05:00) America/Pangnirtung</option>
                                                    <option value="America/Port-au-Prince" @if($data->timezone == "America/Port-au-Prince") selected @endif>(UTC -05:00) America/Port-au-Prince</option>
                                                    <option value="America/Rio_Branco" @if($data->timezone == "America/Rio_Branco") selected @endif>(UTC -05:00) America/Rio_Branco</option>
                                                    <option value="America/Thunder_Bay" @if($data->timezone == "America/Thunder_Bay") selected @endif>(UTC -05:00) America/Thunder_Bay</option>
                                                    <option value="America/Toronto" @if($data->timezone == "America/Toronto") selected @endif>(UTC -05:00) America/Toronto</option>
                                                    <option value="Pacific/Easter" @if($data->timezone == "Pacific/Easter") selected @endif>(UTC -05:00) Pacific/Easter</option>
                                                    <option value="America/Anguilla" @if($data->timezone == "America/Anguilla") selected @endif>(UTC -04:00) America/Anguilla</option>
                                                    <option value="America/Antigua" @if($data->timezone == "America/Antigua") selected @endif>(UTC -04:00) America/Antigua</option>
                                                    <option value="America/Aruba" @if($data->timezone == "America/Aruba") selected @endif>(UTC -04:00) America/Aruba</option>
                                                    <option value="America/Barbados" @if($data->timezone == "America/Barbados") selected @endif>(UTC -04:00) America/Barbados</option>
                                                    <option value="America/Blanc-Sablon" @if($data->timezone == "America/Blanc-Sablon") selected @endif>(UTC -04:00) America/Blanc-Sablon</option>
                                                    <option value="America/Boa_Vista" @if($data->timezone == "America/Boa_Vista") selected @endif>(UTC -04:00) America/Boa_Vista</option>
                                                    <option value="America/Caracas" @if($data->timezone == "America/Caracas") selected @endif>(UTC -04:00) America/Caracas</option>
                                                    <option value="America/Curacao" @if($data->timezone == "America/Curacao") selected @endif>(UTC -04:00) America/Curacao</option>
                                                    <option value="America/Dominica" @if($data->timezone == "America/Dominica") selected @endif>(UTC -04:00) America/Dominica</option>
                                                    <option value="America/Glace_Bay" @if($data->timezone == "America/Glace_Bay") selected @endif>(UTC -04:00) America/Glace_Bay</option>
                                                    <option value="America/Goose_Bay" @if($data->timezone == "America/Goose_Bay") selected @endif>(UTC -04:00) America/Goose_Bay</option>
                                                    <option value="America/Grand_Turk" @if($data->timezone == "America/Grand_Turk") selected @endif>(UTC -04:00) America/Grand_Turk</option>
                                                    <option value="America/Grenada" @if($data->timezone == "America/Grenada") selected @endif>(UTC -04:00) America/Grenada</option>
                                                    <option value="America/Guadeloupe" @if($data->timezone == "America/Guadeloupe") selected @endif>(UTC -04:00) America/Guadeloupe</option>
                                                    <option value="America/Guyana" @if($data->timezone == "America/Guyana") selected @endif>(UTC -04:00) America/Guyana</option>
                                                    <option value="America/Halifax" @if($data->timezone == "America/Halifax") selected @endif>(UTC -04:00) America/Halifax</option>
                                                    <option value="America/Kralendijk" @if($data->timezone == "America/Kralendijk") selected @endif>(UTC -04:00) America/Kralendijk</option>
                                                    <option value="America/La_Paz" @if($data->timezone == "America/La_Paz") selected @endif>(UTC -04:00) America/La_Paz</option>
                                                    <option value="America/Lower_Princes" @if($data->timezone == "America/Lower_Princes") selected @endif>(UTC -04:00) America/Lower_Princes</option>
                                                    <option value="America/Manaus" @if($data->timezone == "America/Manaus") selected @endif>(UTC -04:00) America/Manaus</option>
                                                    <option value="America/Marigot" @if($data->timezone == "America/Marigot") selected @endif>(UTC -04:00) America/Marigot</option>
                                                    <option value="America/Martinique" @if($data->timezone == "America/Martinique") selected @endif>(UTC -04:00) America/Martinique</option>
                                                    <option value="America/Moncton" @if($data->timezone == "America/Moncton") selected @endif>(UTC -04:00) America/Moncton</option>
                                                    <option value="America/Montserrat" @if($data->timezone == "America/Montserrat") selected @endif>(UTC -04:00) America/Montserrat</option>
                                                    <option value="America/Port_of_Spain" @if($data->timezone == "America/Port_of_Spain") selected @endif>(UTC -04:00) America/Port_of_Spain</option>
                                                    <option value="America/Porto_Velho" @if($data->timezone == "America/Porto_Velho") selected @endif>(UTC -04:00) America/Porto_Velho</option>
                                                    <option value="America/Puerto_Rico" @if($data->timezone == "America/Puerto_Rico") selected @endif>(UTC -04:00) America/Puerto_Rico</option>
                                                    <option value="America/Santo_Domingo" @if($data->timezone == "America/Santo_Domingo") selected @endif>(UTC -04:00) America/Santo_Domingo</option>
                                                    <option value="America/St_Barthelemy" @if($data->timezone == "America/St_Barthelemy") selected @endif>(UTC -04:00) America/St_Barthelemy</option>
                                                    <option value="America/St_Kitts" @if($data->timezone == "America/St_Kitts") selected @endif>(UTC -04:00) America/St_Kitts</option>
                                                    <option value="America/St_Lucia" @if($data->timezone == "America/St_Lucia") selected @endif>(UTC -04:00) America/St_Lucia</option>
                                                    <option value="America/St_Thomas" @if($data->timezone == "America/St_Thomas") selected @endif>(UTC -04:00) America/St_Thomas</option>
                                                    <option value="America/St_Vincent" @if($data->timezone == "America/St_Vincent") selected @endif>(UTC -04:00) America/St_Vincent</option>
                                                    <option value="America/Thule" @if($data->timezone == "America/Thule") selected @endif>(UTC -04:00) America/Thule</option>
                                                    <option value="America/Tortola" @if($data->timezone == "America/Tortola") selected @endif>(UTC -04:00) America/Tortola</option>
                                                    <option value="Atlantic/Bermuda" @if($data->timezone == "Atlantic/Bermuda") selected @endif>(UTC -04:00) Atlantic/Bermuda</option>
                                                    <option value="America/St_Johns" @if($data->timezone == "America/St_Johns") selected @endif>(UTC -03:30) America/St_Johns</option>
                                                    <option value="America/Araguaina" @if($data->timezone == "America/Araguaina") selected @endif>(UTC -03:00) America/Araguaina</option>
                                                    <option value="America/Argentina/Buenos_Aires" @if($data->timezone == "America/Argentina/Buenos_Aires") selected @endif>(UTC -03:00) America/Argentina/Buenos_Aires</option>
                                                    <option value="America/Argentina/Catamarca" @if($data->timezone == "America/Argentina/Catamarca") selected @endif>(UTC -03:00) America/Argentina/Catamarca</option>
                                                    <option value="America/Argentina/Cordoba" @if($data->timezone == "America/Argentina/Cordoba") selected @endif>(UTC -03:00) America/Argentina/Cordoba</option>
                                                    <option value="America/Argentina/Jujuy" @if($data->timezone == "America/Argentina/Jujuy") selected @endif>(UTC -03:00) America/Argentina/Jujuy</option>
                                                    <option value="America/Argentina/La_Rioja" @if($data->timezone == "America/Argentina/La_Rioja") selected @endif>(UTC -03:00) America/Argentina/La_Rioja</option>
                                                    <option value="America/Argentina/Mendoza" @if($data->timezone == "America/Argentina/Mendoza") selected @endif>(UTC -03:00) America/Argentina/Mendoza</option>
                                                    <option value="America/Argentina/Rio_Gallegos" @if($data->timezone == "America/Argentina/Rio_Gallegos") selected @endif>(UTC -03:00) America/Argentina/Rio_Gallegos</option>
                                                    <option value="America/Argentina/Salta" @if($data->timezone == "America/Argentina/Salta") selected @endif>(UTC -03:00) America/Argentina/Salta</option>
                                                    <option value="America/Argentina/San_Juan" @if($data->timezone == "America/Argentina/San_Juan") selected @endif>(UTC -03:00) America/Argentina/San_Juan</option>
                                                    <option value="America/Argentina/San_Luis" @if($data->timezone == "America/Argentina/San_Luis") selected @endif>(UTC -03:00) America/Argentina/San_Luis</option>
                                                    <option value="America/Argentina/Tucuman" @if($data->timezone == "America/Argentina/Tucuman") selected @endif>(UTC -03:00) America/Argentina/Tucuman</option>
                                                    <option value="America/Argentina/Ushuaia" @if($data->timezone == "America/Argentina/Ushuaia") selected @endif>(UTC -03:00) America/Argentina/Ushuaia</option>
                                                    <option value="America/Asuncion" @if($data->timezone == "America/Asuncion") selected @endif>(UTC -03:00) America/Asuncion</option>
                                                    <option value="America/Bahia" @if($data->timezone == "America/Bahia") selected @endif>(UTC -03:00) America/Bahia</option>
                                                    <option value="America/Belem" @if($data->timezone == "America/Belem") selected @endif>(UTC -03:00) America/Belem</option>
                                                    <option value="America/Campo_Grande" @if($data->timezone == "America/Campo_Grande") selected @endif>(UTC -03:00) America/Campo_Grande</option>
                                                    <option value="America/Cayenne" @if($data->timezone == "America/Cayenne") selected @endif>(UTC -03:00) America/Cayenne</option>
                                                    <option value="America/Cuiaba" @if($data->timezone == "America/Cuiaba") selected @endif>(UTC -03:00) America/Cuiaba</option>
                                                    <option value="America/Fortaleza" @if($data->timezone == "America/Fortaleza") selected @endif>(UTC -03:00) America/Fortaleza</option>
                                                    <option value="America/Godthab" @if($data->timezone == "America/Godthab") selected @endif>(UTC -03:00) America/Godthab</option>
                                                    <option value="America/Maceio" @if($data->timezone == "America/Maceio") selected @endif>(UTC -03:00) America/Maceio</option>
                                                    <option value="America/Miquelon" @if($data->timezone == "America/Miquelon") selected @endif>(UTC -03:00) America/Miquelon</option>
                                                    <option value="America/Montevideo" @if($data->timezone == "America/Montevideo") selected @endif>(UTC -03:00) America/Montevideo</option>
                                                    <option value="America/Paramaribo" @if($data->timezone == "America/Paramaribo") selected @endif>(UTC -03:00) America/Paramaribo</option>
                                                    <option value="America/Punta_Arenas" @if($data->timezone == "America/Punta_Arenas") selected @endif>(UTC -03:00) America/Punta_Arenas</option>
                                                    <option value="America/Recife" @if($data->timezone == "America/Recife") selected @endif>(UTC -03:00) America/Recife</option>
                                                    <option value="America/Santarem" @if($data->timezone == "America/Santarem") selected @endif>(UTC -03:00) America/Santarem</option>
                                                    <option value="America/Santiago" @if($data->timezone == "America/Santiago") selected @endif>(UTC -03:00) America/Santiago</option>
                                                    <option value="Antarctica/Palmer" @if($data->timezone == "Antarctica/Palmer") selected @endif>(UTC -03:00) Antarctica/Palmer</option>
                                                    <option value="Antarctica/Rothera" @if($data->timezone == "Antarctica/Rothera") selected @endif>(UTC -03:00) Antarctica/Rothera</option>
                                                    <option value="Atlantic/Stanley" @if($data->timezone == "Atlantic/Stanley") selected @endif>(UTC -03:00) Atlantic/Stanley</option>
                                                    <option value="America/Noronha" @if($data->timezone == "America/Noronha") selected @endif>(UTC -02:00) America/Noronha</option>
                                                    <option value="America/Sao_Paulo" @if($data->timezone == "America/Sao_Paulo") selected @endif>(UTC -02:00) America/Sao_Paulo</option>
                                                    <option value="Atlantic/South_Georgia" @if($data->timezone == "Atlantic/South_Georgia") selected @endif>(UTC -02:00) Atlantic/South_Georgia</option>
                                                    <option value="America/Scoresbysund" @if($data->timezone == "America/Scoresbysund") selected @endif>(UTC -01:00) America/Scoresbysund</option>
                                                    <option value="Atlantic/Azores" @if($data->timezone == "Atlantic/Azores") selected @endif>(UTC -01:00) Atlantic/Azores</option>
                                                    <option value="Atlantic/Cape_Verde" @if($data->timezone == "Atlantic/Cape_Verde") selected @endif>(UTC -01:00) Atlantic/Cape_Verde</option>
                                                    <option value="Africa/Abidjan" @if($data->timezone == "Africa/Abidjan") selected @endif>(UTC -00:00) Africa/Abidjan</option>
                                                    <option value="Africa/Accra" @if($data->timezone == "Africa/Accra") selected @endif>(UTC -00:00) Africa/Accra</option>
                                                    <option value="Africa/Bamako" @if($data->timezone == "Africa/Bamako") selected @endif>(UTC -00:00) Africa/Bamako</option>
                                                    <option value="Africa/Banjul" @if($data->timezone == "Africa/Banjul") selected @endif>(UTC -00:00) Africa/Banjul</option>
                                                    <option value="Africa/Bissau" @if($data->timezone == "Africa/Bissau") selected @endif>(UTC -00:00) Africa/Bissau</option>
                                                    <option value="Africa/Casablanca" @if($data->timezone == "Africa/Casablanca") selected @endif>(UTC -00:00) Africa/Casablanca</option>
                                                    <option value="Africa/Conakry" @if($data->timezone == "Africa/Conakry") selected @endif>(UTC -00:00) Africa/Conakry</option>
                                                    <option value="Africa/Dakar" @if($data->timezone == "Africa/Dakar") selected @endif>(UTC -00:00) Africa/Dakar</option>
                                                    <option value="Africa/El_Aaiun" @if($data->timezone == "Africa/El_Aaiun") selected @endif>(UTC -00:00) Africa/El_Aaiun</option>
                                                    <option value="Africa/Freetown" @if($data->timezone == "Africa/Freetown") selected @endif>(UTC -00:00) Africa/Freetown</option>
                                                    <option value="Africa/Lome" @if($data->timezone == "Africa/Lome") selected @endif>(UTC -00:00) Africa/Lome</option>
                                                    <option value="Africa/Monrovia" @if($data->timezone == "Africa/Monrovia") selected @endif>(UTC -00:00) Africa/Monrovia</option>
                                                    <option value="Africa/Nouakchott" @if($data->timezone == "Africa/Nouakchott") selected @endif>(UTC -00:00) Africa/Nouakchott</option>
                                                    <option value="Africa/Ouagadougou" @if($data->timezone == "Africa/Ouagadougou") selected @endif>(UTC -00:00) Africa/Ouagadougou</option>
                                                    <option value="Africa/Sao_Tome" @if($data->timezone == "Africa/Sao_Tome") selected @endif>(UTC -00:00) Africa/Sao_Tome</option>
                                                    <option value="America/Danmarkshavn" @if($data->timezone == "America/Danmarkshavn") selected @endif>(UTC -00:00) America/Danmarkshavn</option>
                                                    <option value="Antarctica/Troll" @if($data->timezone == "Antarctica/Troll") selected @endif>(UTC -00:00) Antarctica/Troll</option>
                                                    <option value="Atlantic/Canary" @if($data->timezone == "Atlantic/Canary") selected @endif>(UTC -00:00) Atlantic/Canary</option>
                                                    <option value="Atlantic/Faroe" @if($data->timezone == "Atlantic/Faroe") selected @endif>(UTC -00:00) Atlantic/Faroe</option>
                                                    <option value="Atlantic/Madeira" @if($data->timezone == "Atlantic/Madeira") selected @endif>(UTC -00:00) Atlantic/Madeira</option>
                                                    <option value="Atlantic/Reykjavik" @if($data->timezone == "Atlantic/Reykjavik") selected @endif>(UTC -00:00) Atlantic/Reykjavik</option>
                                                    <option value="Atlantic/St_Helena" @if($data->timezone == "Atlantic/St_Helena") selected @endif>(UTC -00:00) Atlantic/St_Helena</option>
                                                    <option value="Europe/Dublin" @if($data->timezone == "Europe/Dublin") selected @endif>(UTC -00:00) Europe/Dublin</option>
                                                    <option value="Europe/Guernsey" @if($data->timezone == "Europe/Guernsey") selected @endif>(UTC -00:00) Europe/Guernsey</option>
                                                    <option value="Europe/Isle_of_Man" @if($data->timezone == "Europe/Isle_of_Man") selected @endif>(UTC -00:00) Europe/Isle_of_Man</option>
                                                    <option value="Europe/Jersey" @if($data->timezone == "Europe/Jersey") selected @endif>(UTC -00:00) Europe/Jersey</option>
                                                    <option value="Europe/Lisbon" @if($data->timezone == "Europe/Lisbon") selected @endif>(UTC -00:00) Europe/Lisbon</option>
                                                    <option value="Europe/London" @if($data->timezone == "Europe/London") selected @endif>(UTC -00:00) Europe/London</option>
                                                    <option value="UTC" @if($data->timezone == "UTC") selected @endif>(UTC -00:00) UTC</option>
                                                    <option value="Africa/Algiers" @if($data->timezone == "Africa/Algiers") selected @endif>(UTC +01:00) Africa/Algiers</option>
                                                    <option value="Africa/Bangui" @if($data->timezone == "Africa/Bangui") selected @endif>(UTC +01:00) Africa/Bangui</option>
                                                    <option value="Africa/Brazzaville" @if($data->timezone == "Africa/Brazzaville") selected @endif>(UTC +01:00) Africa/Brazzaville</option>
                                                    <option value="Africa/Ceuta" @if($data->timezone == "Africa/Ceuta") selected @endif>(UTC +01:00) Africa/Ceuta</option>
                                                    <option value="Africa/Douala" @if($data->timezone == "Africa/Douala") selected @endif>(UTC +01:00) Africa/Douala</option>
                                                    <option value="Africa/Kinshasa" @if($data->timezone == "Africa/Kinshasa") selected @endif>(UTC +01:00) Africa/Kinshasa</option>
                                                    <option value="Africa/Lagos" @if($data->timezone == "Africa/Lagos") selected @endif>(UTC +01:00) Africa/Lagos</option>
                                                    <option value="Africa/Libreville" @if($data->timezone == "Africa/Libreville") selected @endif>(UTC +01:00) Africa/Libreville</option>
                                                    <option value="Africa/Luanda" @if($data->timezone == "Africa/Luanda") selected @endif>(UTC +01:00) Africa/Luanda</option>
                                                    <option value="Africa/Malabo" @if($data->timezone == "Africa/Malabo") selected @endif>(UTC +01:00) Africa/Malabo</option>
                                                    <option value="Africa/Ndjamena" @if($data->timezone == "Africa/Ndjamena") selected @endif>(UTC +01:00) Africa/Ndjamena</option>
                                                    <option value="Africa/Niamey" @if($data->timezone == "Africa/Niamey") selected @endif>(UTC +01:00) Africa/Niamey</option>
                                                    <option value="Africa/Porto-Novo" @if($data->timezone == "Africa/Porto-Novo") selected @endif>(UTC +01:00) Africa/Porto-Novo</option>
                                                    <option value="Africa/Tunis" @if($data->timezone == "Africa/Tunis") selected @endif>(UTC +01:00) Africa/Tunis</option>
                                                    <option value="Arctic/Longyearbyen" @if($data->timezone == "Arctic/Longyearbyen") selected @endif>(UTC +01:00) Arctic/Longyearbyen</option>
                                                    <option value="Europe/Amsterdam" @if($data->timezone == "Europe/Amsterdam") selected @endif>(UTC +01:00) Europe/Amsterdam</option>
                                                    <option value="Europe/Andorra" @if($data->timezone == "Europe/Andorra") selected @endif>(UTC +01:00) Europe/Andorra</option>
                                                    <option value="Europe/Belgrade" @if($data->timezone == "Europe/Belgrade") selected @endif>(UTC +01:00) Europe/Belgrade</option>
                                                    <option value="Europe/Berlin" @if($data->timezone == "Europe/Berlin") selected @endif>(UTC +01:00) Europe/Berlin</option>
                                                    <option value="Europe/Bratislava" @if($data->timezone == "Europe/Bratislava") selected @endif>(UTC +01:00) Europe/Bratislava</option>
                                                    <option value="Europe/Brussels" @if($data->timezone == "Europe/Brussels") selected @endif>(UTC +01:00) Europe/Brussels</option>
                                                    <option value="Europe/Budapest" @if($data->timezone == "Europe/Budapest") selected @endif>(UTC +01:00) Europe/Budapest</option>
                                                    <option value="Europe/Busingen" @if($data->timezone == "Europe/Busingen") selected @endif>(UTC +01:00) Europe/Busingen</option>
                                                    <option value="Europe/Copenhagen" @if($data->timezone == "Europe/Copenhagen") selected @endif>(UTC +01:00) Europe/Copenhagen</option>
                                                    <option value="Europe/Gibraltar" @if($data->timezone == "Europe/Gibraltar") selected @endif>(UTC +01:00) Europe/Gibraltar</option>
                                                    <option value="Europe/Ljubljana" @if($data->timezone == "Europe/Ljubljana") selected @endif>(UTC +01:00) Europe/Ljubljana</option>
                                                    <option value="Europe/Luxembourg" @if($data->timezone == "Europe/Luxembourg") selected @endif>(UTC +01:00) Europe/Luxembourg</option>
                                                    <option value="Europe/Madrid" @if($data->timezone == "Europe/Madrid") selected @endif>(UTC +01:00) Europe/Madrid</option>
                                                    <option value="Europe/Malta" @if($data->timezone == "Europe/Malta") selected @endif>(UTC +01:00) Europe/Malta</option>
                                                    <option value="Europe/Monaco" @if($data->timezone == "Europe/Monaco") selected @endif>(UTC +01:00) Europe/Monaco</option>
                                                    <option value="Europe/Oslo" @if($data->timezone == "Europe/Oslo") selected @endif>(UTC +01:00) Europe/Oslo</option>
                                                    <option value="Europe/Paris" @if($data->timezone == "Europe/Paris") selected @endif>(UTC +01:00) Europe/Paris</option>
                                                    <option value="Europe/Podgorica" @if($data->timezone == "Europe/Podgorica") selected @endif>(UTC +01:00) Europe/Podgorica</option>
                                                    <option value="Europe/Prague" @if($data->timezone == "Europe/Prague") selected @endif>(UTC +01:00) Europe/Prague</option>
                                                    <option value="Europe/Rome" @if($data->timezone == "Europe/Rome") selected @endif>(UTC +01:00) Europe/Rome</option>
                                                    <option value="Europe/San_Marino" @if($data->timezone == "Europe/San_Marino") selected @endif>(UTC +01:00) Europe/San_Marino</option>
                                                    <option value="Europe/Sarajevo" @if($data->timezone == "Europe/Sarajevo") selected @endif>(UTC +01:00) Europe/Sarajevo</option>
                                                    <option value="Europe/Skopje" @if($data->timezone == "Europe/Skopje") selected @endif>(UTC +01:00) Europe/Skopje</option>
                                                    <option value="Europe/Stockholm" @if($data->timezone == "Europe/Stockholm") selected @endif>(UTC +01:00) Europe/Stockholm</option>
                                                    <option value="Europe/Tirane" @if($data->timezone == "Europe/Tirane") selected @endif>(UTC +01:00) Europe/Tirane</option>
                                                    <option value="Europe/Vaduz" @if($data->timezone == "Europe/Vaduz") selected @endif>(UTC +01:00) Europe/Vaduz</option>
                                                    <option value="Europe/Vatican" @if($data->timezone == "Europe/Vatican") selected @endif>(UTC +01:00) Europe/Vatican</option>
                                                    <option value="Europe/Vienna" @if($data->timezone == "Europe/Vienna") selected @endif>(UTC +01:00) Europe/Vienna</option>
                                                    <option value="Europe/Warsaw" @if($data->timezone == "Europe/Warsaw") selected @endif>(UTC +01:00) Europe/Warsaw</option>
                                                    <option value="Europe/Zagreb" @if($data->timezone == "Europe/Zagreb") selected @endif>(UTC +01:00) Europe/Zagreb</option>
                                                    <option value="Europe/Zurich" @if($data->timezone == "Europe/Zurich") selected @endif>(UTC +01:00) Europe/Zurich</option>
                                                    <option value="Africa/Blantyre" @if($data->timezone == "Africa/Blantyre") selected @endif>(UTC +02:00) Africa/Blantyre</option>
                                                    <option value="Africa/Bujumbura" @if($data->timezone == "Africa/Bujumbura") selected @endif>(UTC +02:00) Africa/Bujumbura</option>
                                                    <option value="Africa/Cairo" @if($data->timezone == "Africa/Cairo") selected @endif>(UTC +02:00) Africa/Cairo</option>
                                                    <option value="Africa/Gaborone" @if($data->timezone == "Africa/Gaborone") selected @endif>(UTC +02:00) Africa/Gaborone</option>
                                                    <option value="Africa/Harare" @if($data->timezone == "Africa/Harare") selected @endif>(UTC +02:00) Africa/Harare</option>
                                                    <option value="Africa/Johannesburg" @if($data->timezone == "Africa/Johannesburg") selected @endif>(UTC +02:00) Africa/Johannesburg</option>
                                                    <option value="Africa/Kigali" @if($data->timezone == "Africa/Kigali") selected @endif>(UTC +02:00) Africa/Kigali</option>
                                                    <option value="Africa/Lubumbashi" @if($data->timezone == "Africa/Lubumbashi") selected @endif>(UTC +02:00) Africa/Lubumbashi</option>
                                                    <option value="Africa/Lusaka" @if($data->timezone == "Africa/Lusaka") selected @endif>(UTC +02:00) Africa/Lusaka</option>
                                                    <option value="Africa/Maputo" @if($data->timezone == "Africa/Maputo") selected @endif>(UTC +02:00) Africa/Maputo</option>
                                                    <option value="Africa/Maseru" @if($data->timezone == "Africa/Maseru") selected @endif>(UTC +02:00) Africa/Maseru</option>
                                                    <option value="Africa/Mbabane" @if($data->timezone == "Africa/Mbabane") selected @endif>(UTC +02:00) Africa/Mbabane</option>
                                                    <option value="Africa/Tripoli" @if($data->timezone == "Africa/Tripoli") selected @endif>(UTC +02:00) Africa/Tripoli</option>
                                                    <option value="Africa/Windhoek" @if($data->timezone == "Africa/Windhoek") selected @endif>(UTC +02:00) Africa/Windhoek</option>
                                                    <option value="Asia/Amman" @if($data->timezone == "Asia/Amman") selected @endif>(UTC +02:00) Asia/Amman</option>
                                                    <option value="Asia/Beirut" @if($data->timezone == "Asia/Beirut") selected @endif>(UTC +02:00) Asia/Beirut</option>
                                                    <option value="Asia/Damascus" @if($data->timezone == "Asia/Damascus") selected @endif>(UTC +02:00) Asia/Damascus</option>
                                                    <option value="Asia/Gaza" @if($data->timezone == "Asia/Gaza") selected @endif>(UTC +02:00) Asia/Gaza</option>
                                                    <option value="Asia/Hebron" @if($data->timezone == "Asia/Hebron") selected @endif>(UTC +02:00) Asia/Hebron</option>
                                                    <option value="Asia/Jerusalem" @if($data->timezone == "Asia/Jerusalem") selected @endif>(UTC +02:00) Asia/Jerusalem</option>
                                                    <option value="Asia/Nicosia" @if($data->timezone == "Asia/Nicosia") selected @endif>(UTC +02:00) Asia/Nicosia</option>
                                                    <option value="Europe/Athens" @if($data->timezone == "Europe/Athens") selected @endif>(UTC +02:00) Europe/Athens</option>
                                                    <option value="Europe/Bucharest" @if($data->timezone == "Europe/Bucharest") selected @endif>(UTC +02:00) Europe/Bucharest</option>
                                                    <option value="Europe/Chisinau" @if($data->timezone == "Europe/Chisinau") selected @endif>(UTC +02:00) Europe/Chisinau</option>
                                                    <option value="Europe/Helsinki" @if($data->timezone == "Europe/Helsinki") selected @endif>(UTC +02:00) Europe/Helsinki</option>
                                                    <option value="Europe/Kaliningrad" @if($data->timezone == "Europe/Kaliningrad") selected @endif>(UTC +02:00) Europe/Kaliningrad</option>
                                                    <option value="Europe/Kiev" @if($data->timezone == "Europe/Kiev") selected @endif>(UTC +02:00) Europe/Kiev</option>
                                                    <option value="Europe/Mariehamn" @if($data->timezone == "Europe/Mariehamn") selected @endif>(UTC +02:00) Europe/Mariehamn</option>
                                                    <option value="Europe/Riga" @if($data->timezone == "Europe/Riga") selected @endif>(UTC +02:00) Europe/Riga</option>
                                                    <option value="Europe/Sofia" @if($data->timezone == "Europe/Sofia") selected @endif>(UTC +02:00) Europe/Sofia</option>
                                                    <option value="Europe/Tallinn" @if($data->timezone == "Europe/Tallinn") selected @endif>(UTC +02:00) Europe/Tallinn</option>
                                                    <option value="Europe/Uzhgorod" @if($data->timezone == "Europe/Uzhgorod") selected @endif>(UTC +02:00) Europe/Uzhgorod</option>
                                                    <option value="Europe/Vilnius" @if($data->timezone == "Europe/Vilnius") selected @endif>(UTC +02:00) Europe/Vilnius</option>
                                                    <option value="Europe/Zaporozhye" @if($data->timezone == "Europe/Zaporozhye") selected @endif>(UTC +02:00) Europe/Zaporozhye</option>
                                                    <option value="Africa/Addis_Ababa" @if($data->timezone == "Africa/Addis_Ababa") selected @endif>(UTC +03:00) Africa/Addis_Ababa</option>
                                                    <option value="Africa/Asmara" @if($data->timezone == "Africa/Asmara") selected @endif>(UTC +03:00) Africa/Asmara</option>
                                                    <option value="Africa/Dar_es_Salaam" @if($data->timezone == "Africa/Dar_es_Salaam") selected @endif>(UTC +03:00) Africa/Dar_es_Salaam</option>
                                                    <option value="Africa/Djibouti" @if($data->timezone == "Africa/Djibouti") selected @endif>(UTC +03:00) Africa/Djibouti</option>
                                                    <option value="Africa/Juba" @if($data->timezone == "Africa/Juba") selected @endif>(UTC +03:00) Africa/Juba</option>
                                                    <option value="Africa/Kampala" @if($data->timezone == "Africa/Kampala") selected @endif>(UTC +03:00) Africa/Kampala</option>
                                                    <option value="Africa/Khartoum" @if($data->timezone == "Africa/Khartoum") selected @endif>(UTC +03:00) Africa/Khartoum</option>
                                                    <option value="Africa/Mogadishu" @if($data->timezone == "Africa/Mogadishu") selected @endif>(UTC +03:00) Africa/Mogadishu</option>
                                                    <option value="Africa/Nairobi" @if($data->timezone == "Africa/Nairobi") selected @endif>(UTC +03:00) Africa/Nairobi</option>
                                                    <option value="Antarctica/Syowa" @if($data->timezone == "Antarctica/Syowa") selected @endif>(UTC +03:00) Antarctica/Syowa</option>
                                                    <option value="Asia/Aden" @if($data->timezone == "Asia/Aden") selected @endif>(UTC +03:00) Asia/Aden</option>
                                                    <option value="Asia/Baghdad" @if($data->timezone == "Asia/Baghdad") selected @endif>(UTC +03:00) Asia/Baghdad</option>
                                                    <option value="Asia/Bahrain" @if($data->timezone == "Asia/Bahrain") selected @endif>(UTC +03:00) Asia/Bahrain</option>
                                                    <option value="Asia/Famagusta" @if($data->timezone == "Asia/Famagusta") selected @endif>(UTC +03:00) Asia/Famagusta</option>
                                                    <option value="Asia/Kuwait" @if($data->timezone == "Asia/Kuwait") selected @endif>(UTC +03:00) Asia/Kuwait</option>
                                                    <option value="Asia/Qatar" @if($data->timezone == "Asia/Qatar") selected @endif>(UTC +03:00) Asia/Qatar</option>
                                                    <option value="Asia/Riyadh" @if($data->timezone == "Asia/Riyadh") selected @endif>(UTC +03:00) Asia/Riyadh</option>
                                                    <option value="Europe/Istanbul" @if($data->timezone == "Europe/Istanbul") selected @endif>(UTC +03:00) Europe/Istanbul</option>
                                                    <option value="Europe/Kirov" @if($data->timezone == "Europe/Kirov") selected @endif>(UTC +03:00) Europe/Kirov</option>
                                                    <option value="Europe/Minsk" @if($data->timezone == "Europe/Minsk") selected @endif>(UTC +03:00) Europe/Minsk</option>
                                                    <option value="Europe/Moscow" @if($data->timezone == "Europe/Moscow") selected @endif>(UTC +03:00) Europe/Moscow</option>
                                                    <option value="Europe/Simferopol" @if($data->timezone == "Europe/Simferopol") selected @endif>(UTC +03:00) Europe/Simferopol</option>
                                                    <option value="Europe/Volgograd" @if($data->timezone == "Europe/Volgograd") selected @endif>(UTC +03:00) Europe/Volgograd</option>
                                                    <option value="Indian/Antananarivo" @if($data->timezone == "Indian/Antananarivo") selected @endif>(UTC +03:00) Indian/Antananarivo</option>
                                                    <option value="Indian/Comoro" @if($data->timezone == "Indian/Comoro") selected @endif>(UTC +03:00) Indian/Comoro</option>
                                                    <option value="Indian/Mayotte" @if($data->timezone == "Indian/Mayotte") selected @endif>(UTC +03:00) Indian/Mayotte</option>
                                                    <option value="Asia/Tehran" @if($data->timezone == "Asia/Tehran") selected @endif>(UTC +03:30) Asia/Tehran</option>
                                                    <option value="Asia/Baku" @if($data->timezone == "Asia/Baku") selected @endif>(UTC +04:00) Asia/Baku</option>
                                                    <option value="Asia/Dubai" @if($data->timezone == "Asia/Dubai") selected @endif>(UTC +04:00) Asia/Dubai</option>
                                                    <option value="Asia/Muscat" @if($data->timezone == "Asia/Muscat") selected @endif>(UTC +04:00) Asia/Muscat</option>
                                                    <option value="Asia/Tbilisi" @if($data->timezone == "Asia/Tbilisi") selected @endif>(UTC +04:00) Asia/Tbilisi</option>
                                                    <option value="Asia/Yerevan" @if($data->timezone == "Asia/Yerevan") selected @endif>(UTC +04:00) Asia/Yerevan</option>
                                                    <option value="Europe/Astrakhan" @if($data->timezone == "Europe/Astrakhan") selected @endif>(UTC +04:00) Europe/Astrakhan</option>
                                                    <option value="Europe/Samara" @if($data->timezone == "Europe/Samara") selected @endif>(UTC +04:00) Europe/Samara</option>
                                                    <option value="Europe/Saratov" @if($data->timezone == "Europe/Saratov") selected @endif>(UTC +04:00) Europe/Saratov</option>
                                                    <option value="Europe/Ulyanovsk" @if($data->timezone == "Europe/Ulyanovsk") selected @endif>(UTC +04:00) Europe/Ulyanovsk</option>
                                                    <option value="Indian/Mahe" @if($data->timezone == "Indian/Mahe") selected @endif>(UTC +04:00) Indian/Mahe</option>
                                                    <option value="Indian/Mauritius" @if($data->timezone == "Indian/Mauritius") selected @endif>(UTC +04:00) Indian/Mauritius</option>
                                                    <option value="Indian/Reunion" @if($data->timezone == "Indian/Reunion") selected @endif>(UTC +04:00) Indian/Reunion</option>
                                                    <option value="Asia/Kabul" @if($data->timezone == "Asia/Kabul") selected @endif>(UTC +04:30) Asia/Kabul</option>
                                                    <option value="Antarctica/Mawson" @if($data->timezone == "Antarctica/Mawson") selected @endif>(UTC +05:00) Antarctica/Mawson</option>
                                                    <option value="Asia/Aqtau" @if($data->timezone == "Asia/Aqtau") selected @endif>(UTC +05:00) Asia/Aqtau</option>
                                                    <option value="Asia/Aqtobe" @if($data->timezone == "Asia/Aqtobe") selected @endif>(UTC +05:00) Asia/Aqtobe</option>
                                                    <option value="Asia/Ashgabat" @if($data->timezone == "Asia/Ashgabat") selected @endif>(UTC +05:00) Asia/Ashgabat</option>
                                                    <option value="Asia/Atyrau" @if($data->timezone == "Asia/Atyrau") selected @endif>(UTC +05:00) Asia/Atyrau</option>
                                                    <option value="Asia/Dushanbe" @if($data->timezone == "Asia/Dushanbe") selected @endif>(UTC +05:00) Asia/Dushanbe</option>
                                                    <option value="Asia/Karachi" @if($data->timezone == "Asia/Karachi") selected @endif>(UTC +05:00) Asia/Karachi</option>
                                                    <option value="Asia/Oral" @if($data->timezone == "Asia/Oral") selected @endif>(UTC +05:00) Asia/Oral</option>
                                                    <option value="Asia/Samarkand" @if($data->timezone == "Asia/Samarkand") selected @endif>(UTC +05:00) Asia/Samarkand</option>
                                                    <option value="Asia/Tashkent" @if($data->timezone == "Asia/Tashkent") selected @endif>(UTC +05:00) Asia/Tashkent</option>
                                                    <option value="Asia/Yekaterinburg" @if($data->timezone == "Asia/Yekaterinburg") selected @endif>(UTC +05:00) Asia/Yekaterinburg</option>
                                                    <option value="Indian/Kerguelen" @if($data->timezone == "Indian/Kerguelen") selected @endif>(UTC +05:00) Indian/Kerguelen</option>
                                                    <option value="Indian/Maldives" @if($data->timezone == "Indian/Maldives") selected @endif>(UTC +05:00) Indian/Maldives</option>
                                                    <option value="Asia/Colombo" @if($data->timezone == "Asia/Colombo") selected @endif>(UTC +05:30) Asia/Colombo</option>
                                                    <option value="Asia/Kolkata" @if($data->timezone == "Asia/Kolkata") selected @endif>(UTC +05:30) Asia/Kolkata</option>
                                                    <option value="Asia/Kathmandu" @if($data->timezone == "Asia/Kathmandu") selected @endif>(UTC +05:45) Asia/Kathmandu</option>
                                                    <option value="Antarctica/Vostok" @if($data->timezone == "Antarctica/Vostok") selected @endif>(UTC +06:00) Antarctica/Vostok</option>
                                                    <option value="Asia/Almaty" @if($data->timezone == "Asia/Almaty") selected @endif>(UTC +06:00) Asia/Almaty</option>
                                                    <option value="Asia/Bishkek" @if($data->timezone == "Asia/Bishkek") selected @endif>(UTC +06:00) Asia/Bishkek</option>
                                                    <option value="Asia/Dhaka" @if($data->timezone == "Asia/Dhaka") selected @endif>(UTC +06:00) Asia/Dhaka</option>
                                                    <option value="Asia/Omsk" @if($data->timezone == "Asia/Omsk") selected @endif>(UTC +06:00) Asia/Omsk</option>
                                                    <option value="Asia/Qyzylorda" @if($data->timezone == "Asia/Qyzylorda") selected @endif>(UTC +06:00) Asia/Qyzylorda</option>
                                                    <option value="Asia/Thimphu" @if($data->timezone == "Asia/Thimphu") selected @endif>(UTC +06:00) Asia/Thimphu</option>
                                                    <option value="Asia/Urumqi" @if($data->timezone == "Asia/Urumqi") selected @endif>(UTC +06:00) Asia/Urumqi</option>
                                                    <option value="Indian/Chagos" @if($data->timezone == "Indian/Chagos") selected @endif>(UTC +06:00) Indian/Chagos</option>
                                                    <option value="Asia/Yangon" @if($data->timezone == "Asia/Yangon") selected @endif>(UTC +06:30) Asia/Yangon</option>
                                                    <option value="Indian/Cocos" @if($data->timezone == "Indian/Cocos") selected @endif>(UTC +06:30) Indian/Cocos</option>
                                                    <option value="Antarctica/Davis" @if($data->timezone == "Antarctica/Davis") selected @endif>(UTC +07:00) Antarctica/Davis</option>
                                                    <option value="Asia/Bangkok" @if($data->timezone == "Asia/Bangkok") selected @endif>(UTC +07:00) Asia/Bangkok</option>
                                                    <option value="Asia/Barnaul" @if($data->timezone == "Asia/Barnaul") selected @endif>(UTC +07:00) Asia/Barnaul</option>
                                                    <option value="Asia/Ho_Chi_Minh" @if($data->timezone == "Asia/Ho_Chi_Minh") selected @endif>(UTC +07:00) Asia/Ho_Chi_Minh</option>
                                                    <option value="Asia/Hovd" @if($data->timezone == "Asia/Hovd") selected @endif>(UTC +07:00) Asia/Hovd</option>
                                                    <option value="Asia/Jakarta" @if($data->timezone == "Asia/Jakarta") selected @endif>(UTC +07:00) Asia/Jakarta</option>
                                                    <option value="Asia/Krasnoyarsk" @if($data->timezone == "Asia/Krasnoyarsk") selected @endif>(UTC +07:00) Asia/Krasnoyarsk</option>
                                                    <option value="Asia/Novokuznetsk" @if($data->timezone == "Asia/Novokuznetsk") selected @endif>(UTC +07:00) Asia/Novokuznetsk</option>
                                                    <option value="Asia/Novosibirsk" @if($data->timezone == "Asia/Novosibirsk") selected @endif>(UTC +07:00) Asia/Novosibirsk</option>
                                                    <option value="Asia/Phnom_Penh" @if($data->timezone == "Asia/Phnom_Penh") selected @endif>(UTC +07:00) Asia/Phnom_Penh</option>
                                                    <option value="Asia/Pontianak" @if($data->timezone == "Asia/Pontianak") selected @endif>(UTC +07:00) Asia/Pontianak</option>
                                                    <option value="Asia/Tomsk" @if($data->timezone == "Asia/Tomsk") selected @endif>(UTC +07:00) Asia/Tomsk</option>
                                                    <option value="Asia/Vientiane" @if($data->timezone == "Asia/Vientiane") selected @endif>(UTC +07:00) Asia/Vientiane</option>
                                                    <option value="Indian/Christmas" @if($data->timezone == "Indian/Christmas") selected @endif>(UTC +07:00) Indian/Christmas</option>
                                                    <option value="Asia/Brunei" @if($data->timezone == "Asia/Brunei") selected @endif>(UTC +08:00) Asia/Brunei</option>
                                                    <option value="Asia/Choibalsan" @if($data->timezone == "Asia/Choibalsan") selected @endif>(UTC +08:00) Asia/Choibalsan</option>
                                                    <option value="Asia/Hong_Kong" @if($data->timezone == "Asia/Hong_Kong") selected @endif>(UTC +08:00) Asia/Hong_Kong</option>
                                                    <option value="Asia/Irkutsk" @if($data->timezone == "Asia/Irkutsk") selected @endif>(UTC +08:00) Asia/Irkutsk</option>
                                                    <option value="Asia/Kuala_Lumpur" @if($data->timezone == "Asia/Kuala_Lumpur") selected @endif>(UTC +08:00) Asia/Kuala_Lumpur</option>
                                                    <option value="Asia/Kuching" @if($data->timezone == "Asia/Kuching") selected @endif>(UTC +08:00) Asia/Kuching</option>
                                                    <option value="Asia/Macau" @if($data->timezone == "Asia/Macau") selected @endif>(UTC +08:00) Asia/Macau</option>
                                                    <option value="Asia/Makassar" @if($data->timezone == "Asia/Makassar") selected @endif>(UTC +08:00) Asia/Makassar</option>
                                                    <option value="Asia/Manila" @if($data->timezone == "Asia/Manila") selected @endif>(UTC +08:00) Asia/Manila</option>
                                                    <option value="Asia/Shanghai" @if($data->timezone == "Asia/Shanghai") selected @endif>(UTC +08:00) Asia/Shanghai</option>
                                                    <option value="Asia/Singapore" @if($data->timezone == "Asia/Singapore") selected @endif>(UTC +08:00) Asia/Singapore</option>
                                                    <option value="Asia/Taipei" @if($data->timezone == "Asia/Taipei") selected @endif>(UTC +08:00) Asia/Taipei</option>
                                                    <option value="Asia/Ulaanbaatar" @if($data->timezone == "Asia/Ulaanbaatar") selected @endif>(UTC +08:00) Asia/Ulaanbaatar</option>
                                                    <option value="Australia/Perth" @if($data->timezone == "Australia/Perth") selected @endif>(UTC +08:00) Australia/Perth</option>
                                                    <option value="Asia/Pyongyang" @if($data->timezone == "Asia/Pyongyang") selected @endif>(UTC +08:30) Asia/Pyongyang</option>
                                                    <option value="Australia/Eucla" @if($data->timezone == "Australia/Eucla") selected @endif>(UTC +08:45) Australia/Eucla</option>
                                                    <option value="Asia/Chita" @if($data->timezone == "Asia/Chita") selected @endif>(UTC +09:00) Asia/Chita</option>
                                                    <option value="Asia/Dili" @if($data->timezone == "Asia/Dili") selected @endif>(UTC +09:00) Asia/Dili</option>
                                                    <option value="Asia/Jayapura" @if($data->timezone == "Asia/Jayapura") selected @endif>(UTC +09:00) Asia/Jayapura</option>
                                                    <option value="Asia/Khandyga" @if($data->timezone == "Asia/Khandyga") selected @endif>(UTC +09:00) Asia/Khandyga</option>
                                                    <option value="Asia/Seoul" @if($data->timezone == "Asia/Seoul") selected @endif>(UTC +09:00) Asia/Seoul</option>
                                                    <option value="Asia/Tokyo" @if($data->timezone == "Asia/Tokyo") selected @endif>(UTC +09:00) Asia/Tokyo</option>
                                                    <option value="Asia/Yakutsk" @if($data->timezone == "Asia/Yakutsk") selected @endif>(UTC +09:00) Asia/Yakutsk</option>
                                                    <option value="Pacific/Palau" @if($data->timezone == "Pacific/Palau") selected @endif>(UTC +09:00) Pacific/Palau</option>
                                                    <option value="Australia/Darwin" @if($data->timezone == "Australia/Darwin") selected @endif>(UTC +09:30) Australia/Darwin</option>
                                                    <option value="Antarctica/DumontDUrville" @if($data->timezone == "Antarctica/DumontDUrville") selected @endif>(UTC +10:00) Antarctica/DumontDUrville</option>
                                                    <option value="Asia/Ust-Nera" @if($data->timezone == "Asia/Ust-Nera") selected @endif>(UTC +10:00) Asia/Ust-Nera</option>
                                                    <option value="Asia/Vladivostok" @if($data->timezone == "Asia/Vladivostok") selected @endif>(UTC +10:00) Asia/Vladivostok</option>
                                                    <option value="Australia/Brisbane" @if($data->timezone == "Australia/Brisbane") selected @endif>(UTC +10:00) Australia/Brisbane</option>
                                                    <option value="Australia/Lindeman" @if($data->timezone == "Australia/Lindeman") selected @endif>(UTC +10:00) Australia/Lindeman</option>
                                                    <option value="Pacific/Chuuk" @if($data->timezone == "Pacific/Chuuk") selected @endif>(UTC +10:00) Pacific/Chuuk</option>
                                                    <option value="Pacific/Guam" @if($data->timezone == "Pacific/Guam") selected @endif>(UTC +10:00) Pacific/Guam</option>
                                                    <option value="Pacific/Port_Moresby" @if($data->timezone == "Pacific/Port_Moresby") selected @endif>(UTC +10:00) Pacific/Port_Moresby</option>
                                                    <option value="Pacific/Saipan" @if($data->timezone == "Pacific/Saipan") selected @endif>(UTC +10:00) Pacific/Saipan</option>
                                                    <option value="Australia/Adelaide" @if($data->timezone == "Australia/Adelaide") selected @endif>(UTC +10:30) Australia/Adelaide</option>
                                                    <option value="Australia/Broken_Hill" @if($data->timezone == "Australia/Broken_Hill") selected @endif>(UTC +10:30) Australia/Broken_Hill</option>
                                                    <option value="Antarctica/Casey" @if($data->timezone == "Antarctica/Casey") selected @endif>(UTC +11:00) Antarctica/Casey</option>
                                                    <option value="Antarctica/Macquarie" @if($data->timezone == "Antarctica/Macquarie") selected @endif>(UTC +11:00) Antarctica/Macquarie</option>
                                                    <option value="Asia/Magadan" @if($data->timezone == "Asia/Magadan") selected @endif>(UTC +11:00) Asia/Magadan</option>
                                                    <option value="Asia/Sakhalin" @if($data->timezone == "Asia/Sakhalin") selected @endif>(UTC +11:00) Asia/Sakhalin</option>
                                                    <option value="Asia/Srednekolymsk" @if($data->timezone == "Asia/Srednekolymsk") selected @endif>(UTC +11:00) Asia/Srednekolymsk</option>
                                                    <option value="Australia/Currie" @if($data->timezone == "Australia/Currie") selected @endif>(UTC +11:00) Australia/Currie</option>
                                                    <option value="Australia/Hobart" @if($data->timezone == "Australia/Hobart") selected @endif>(UTC +11:00) Australia/Hobart</option>
                                                    <option value="Australia/Lord_Howe" @if($data->timezone == "Australia/Lord_Howe") selected @endif>(UTC +11:00) Australia/Lord_Howe</option>
                                                    <option value="Australia/Melbourne" @if($data->timezone == "Australia/Melbourne") selected @endif>(UTC +11:00) Australia/Melbourne</option>
                                                    <option value="Australia/Sydney" @if($data->timezone == "Australia/Sydney") selected @endif>(UTC +11:00) Australia/Sydney</option>
                                                    <option value="Pacific/Bougainville" @if($data->timezone == "Pacific/Bougainville") selected @endif>(UTC +11:00) Pacific/Bougainville</option>
                                                    <option value="Pacific/Efate" @if($data->timezone == "Pacific/Efate") selected @endif>(UTC +11:00) Pacific/Efate</option>
                                                    <option value="Pacific/Guadalcanal" @if($data->timezone == "Pacific/Guadalcanal") selected @endif>(UTC +11:00) Pacific/Guadalcanal</option>
                                                    <option value="Pacific/Kosrae" @if($data->timezone == "Pacific/Kosrae") selected @endif>(UTC +11:00) Pacific/Kosrae</option>
                                                    <option value="Pacific/Norfolk" @if($data->timezone == "Pacific/Norfolk") selected @endif>(UTC +11:00) Pacific/Norfolk</option>
                                                    <option value="Pacific/Noumea" @if($data->timezone == "Pacific/Noumea") selected @endif>(UTC +11:00) Pacific/Noumea</option>
                                                    <option value="Pacific/Pohnpei" @if($data->timezone == "Pacific/Pohnpei") selected @endif>(UTC +11:00) Pacific/Pohnpei</option>
                                                    <option value="Asia/Anadyr" @if($data->timezone == "Asia/Anadyr") selected @endif>(UTC +12:00) Asia/Anadyr</option>
                                                    <option value="Asia/Kamchatka" @if($data->timezone == "Asia/Kamchatka") selected @endif>(UTC +12:00) Asia/Kamchatka</option>
                                                    <option value="Pacific/Funafuti" @if($data->timezone == "Pacific/Funafuti") selected @endif>(UTC +12:00) Pacific/Funafuti</option>
                                                    <option value="Pacific/Kwajalein" @if($data->timezone == "Pacific/Kwajalein") selected @endif>(UTC +12:00) Pacific/Kwajalein</option>
                                                    <option value="Pacific/Majuro" @if($data->timezone == "Pacific/Majuro") selected @endif>(UTC +12:00) Pacific/Majuro</option>
                                                    <option value="Pacific/Nauru" @if($data->timezone == "Pacific/Nauru") selected @endif>(UTC +12:00) Pacific/Nauru</option>
                                                    <option value="Pacific/Tarawa" @if($data->timezone == "Pacific/Tarawa") selected @endif>(UTC +12:00) Pacific/Tarawa</option>
                                                    <option value="Pacific/Wake" @if($data->timezone == "Pacific/Wake") selected @endif>(UTC +12:00) Pacific/Wake</option>
                                                    <option value="Pacific/Wallis" @if($data->timezone == "Pacific/Wallis") selected @endif>(UTC +12:00) Pacific/Wallis</option>
                                                    <option value="Antarctica/McMurdo" @if($data->timezone == "Antarctica/McMurdo") selected @endif>(UTC +13:00) Antarctica/McMurdo</option>
                                                    <option value="Pacific/Auckland" @if($data->timezone == "Pacific/Auckland") selected @endif>(UTC +13:00) Pacific/Auckland</option>
                                                    <option value="Pacific/Enderbury" @if($data->timezone == "Pacific/Enderbury") selected @endif>(UTC +13:00) Pacific/Enderbury</option>
                                                    <option value="Pacific/Fakaofo" @if($data->timezone == "Pacific/Fakaofo") selected @endif>(UTC +13:00) Pacific/Fakaofo</option>
                                                    <option value="Pacific/Fiji" @if($data->timezone == "Pacific/Fiji") selected @endif>(UTC +13:00) Pacific/Fiji</option>
                                                    <option value="Pacific/Chatham" @if($data->timezone == "Pacific/Chatham") selected @endif>(UTC +13:45) Pacific/Chatham</option>
                                                    <option value="Pacific/Apia" @if($data->timezone == "Pacific/Apia") selected @endif>(UTC +14:00) Pacific/Apia</option>
                                                    <option value="Pacific/Kiritimati" @if($data->timezone == "Pacific/Kiritimati") selected @endif>(UTC +14:00) Pacific/Kiritimati</option>
                                                    <option value="Pacific/Tongatapu" @if($data->timezone == "Pacific/Tongatapu") selected @endif>(UTC +14:00) Pacific/Tongatapu</option>
                                                </select>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Optional Clock-In Comment</label>
                                                <select name="clock_comment" class="ui dropdown uppercase">
                                                    <option value="">Select Status</option>
                                                    <option value="1" @isset($data->clock_comment) @if($data->clock_comment == 1) selected @endif @endisset>Enabled</option>
                                                    <option value="0" @isset($data->clock_comment) @if($data->clock_comment == 0) selected @endif @endisset>Disabled</option>
                                                </select>
                                            </div>
                                            <div class="eight wide field">
                                                <label>Web Clock-In/Out IP Restriction</label>
                                                <textarea name="iprestriction" rows="3" placeholder="Enter allowed IP address. If more than one, add comma after each IP address.">@isset($data->iprestriction){{ $data->iprestriction }}@endisset</textarea>
                                            </div>
                                            
                                    </div>
                                    <div class="actions align-left">
                                        <button class="ui positive small button approve" type="submit" name="submit"><i class="ui checkmark icon"></i> Update</button>
                                        <a href="{{ url('dashboard') }}" class="ui grey small button cancel"><i class="ui times icon"></i> Cancel</a>
                                    </div>
                                    </form> 
                                        
                            </div>
                        </div>
                    </div>

                    <div class="ui tab" data-tab="about">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <p class="license col-md-6" style="margin-bottom:0">
                                    <h3 style="margin-top:0" class="ui header">Timely Sheets: Attendance Management System</h3>
                                    <p>Timely Sheets is a Time and Attendance platform designed to help HR in managing employee attendance life cycle from time tracking to scheduling and understand the true value of their Human Resources.</p>

                                    <h4 class="ui header">Timely Sheets' smarter approach to Time and Attendance</h4>
                                    <ul>
                                        <li>Engage your people everywhere on their preferred devices.</li>
                                        <li>Take action and respond to changes on the fly.</li>
                                        <li>Use one version of a single system across your entire organization.</li>
                                        <li>Make better business decisions based on contextual insights.</li>
                                        <li>Get a full view of talent, attendance, and schedule with Timely Sheets software.</li>
                                    </ul>
                                    <div class="footer-text">
                                        <div class="sub header">Version 1.0</div>
                                        <div class="sub header">Copyright (c) 2019 Brian Luna. All rights reserved.</div>
                                    </div>
                                </p>

                                <div class="ui section divider"></div>
                                <h4 class="ui header">Send Feedback
                                    <div class="sub header">Write your feedback and send to our developer email mr.brianluna@gmail.com</div>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="ui tab" data-tab="attribution">
                        <div class="tab-content">
                        <h3 class="ui header">Legal Notice
                        <div class="sub header">Copyright (c) 2019 Brian Luna. All rights reserved.</div>
                        </h3>

                        <h5 class="ui header">Laravel
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) Taylor Otwell
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Bootstrap
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2011-2018 Twitter, Inc.
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Semantic UI
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2015 Semantic Org
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                            SOFTWARE.
                        </p>

                        <h5 class="ui header">jQuery JavaScript Library
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright jQuery Foundation and other contributors
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">DataTables
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2008-2018 SpryMedia Ltd
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Chart.js
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2018 Chart.js Contributors
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Air Datepicker
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2016 Timofey Marochkin
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">MDTimePicker
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2017 Dionlee Uy
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </div>
    </div>

    @endsection
    
    @section('scripts')
    <script type="text/javascript">
        $('.menu .item').tab();
    </script>
    @endsection 