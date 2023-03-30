@extends('layouts.frontend', ['title' => 'Contact Us'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Contact Us', 'subtitle' => 'Contact Us'])
@endsection

@section('page-content')
<section class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-4 contact_address heading_space wow fadeInLeft animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInLeft; margin-bottom: 5rem;">
                <h3 class="text-block text-black text-bold text-med m-b-40">Get in Touch</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                <div class="address" style="margin-top: 15px;">
                    <i class="fa fa-map-pin icon-i"></i>
                    <h4>Visit Us</h4>
                    <p>Tottenham Road, Japan.</p>
                </div><br>
                <div class="address">
                    <i class="fa fa-envelope icon-i second"></i>
                    <h4>Email Us</h4>
                    <p><a href="mailto:info@resourceindeed.com">info@resourceindeed.com</a></p>
                </div><br>
                <div class="address">
                    <i class="fa fa-phone icon-i"></i>
                    <h4>Call Us</h4>
                    <p>(+01) 123 456 7890</p>
                </div>
            </div>
            <div class="col-md-8 wow fadeInRight animated" data-wow-delay="4500ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
                <h3 class="text-block text-black text-bold text-med m-b-40">Send Us a Message</h3>
                <p>If you have any questions, please complete the form below. Tell us a bit about what you’re looking for, and we’ll be in touch shortly.</p>
                <p>Get in touch with the right people at {{config('app.name')}}. We’d love to hear from you. </p>
                @if(Session::has('success'))
                <div class="alert alert-success messages" id="status">
                    {{Session::get('success')}}
                </div>
                @endif
                <form class="m-t-30" method="post" action="{{ route('contact.store') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    <div class="row au-form-group">
                        <div class="form-group">
                            @if ($errors->has('service'))
                            <span class="help-block with-errors">
                                {{ $errors->first('service') }}
                            </span>
                            @endif
                            <select id="service" class="au-input au-input-2" name="service" required>
                                <option value="Human Resource Management">Human Resource Management</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="General Resource &amp; Material Needs">General Resource &amp; Material Needs</option>
                                <option value="Waste Management">Waste Management</option>
                                <option value="Professional Services">Professional Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('first_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('first_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="First Name*" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('last_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('last_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Last Name*" id="last_name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('job_title'))
                            <span class="help-block with-errors">
                                {{ $errors->first('job_title') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Job Title*" id="job_title" name="job_title" required>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('company_name'))
                            <span class="help-block with-errors">
                                {{ $errors->first('company_name') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="text" placeholder="Company Name*" id="company_name" name="company_name" required>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('industry'))
                            <span class="help-block with-errors">
                                {{ $errors->first('industry') }}
                            </span>
                            @endif
                            <select class="au-input au-input-2" id="industry" name="industry" required>
                                <option value="">Select your industry<sup>*</sup></option>
                                <option value="Accounting">Accounting</option>
                                <option value="Airlines/Aviation">Airlines/Aviation</option>
                                <option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
                                <option value="Alternative Medicine">Alternative Medicine</option>
                                <option value="Animation">Animation</option>
                                <option value="Apparel/Fashion">Apparel/Fashion</option>
                                <option value="Architecture/Planning">Architecture/Planning</option>
                                <option value="Arts/Crafts">Arts/Crafts</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Aviation/Aerospace">Aviation/Aerospace</option>
                                <option value="Banking/Mortgage">Banking/Mortgage</option>
                                <option value="Biotechnology/Greentech">Biotechnology/Greentech</option>
                                <option value="Broadcast Media">Broadcast Media</option>
                                <option value="Building Materials">Building Materials</option>
                                <option value="Business Supplies/Equipment">Business Supplies/Equipment</option>
                                <option value="Capital Markets/Hedge Fund/Private Equity">Capital Markets/Hedge Fund/Private Equity</option>
                                <option value="Chemicals">Chemicals</option>
                                <option value="Civic/Social Organization">Civic/Social Organization</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Commercial Real Estate">Commercial Real Estate</option>
                                <option value="Computer Games">Computer Games</option>
                                <option value="Computer Hardware">Computer Hardware</option>
                                <option value="Computer Networking">Computer Networking</option>
                                <option value="Computer Software/Engineering">Computer Software/Engineering</option>
                                <option value="Computer/Network Security">Computer/Network Security</option>
                                <option value="Construction">Construction</option>
                                <option value="Consumer Electronics">Consumer Electronics</option>
                                <option value="Consumer Goods">Consumer Goods</option>
                                <option value="Consumer Services">Consumer Services</option>
                                <option value="Cosmetics">Cosmetics</option>
                                <option value="Dairy">Dairy</option>
                                <option value="Defense/Space">Defense/Space</option>
                                <option value="Design">Design</option>
                                <option value="E-Learning">E-Learning</option>
                                <option value="Education Management">Education Management</option>
                                <option value="Electrical/Electronic Manufacturing">Electrical/Electronic Manufacturing</option>
                                <option value="Entertainment/Movie Production">Entertainment/Movie Production</option>
                                <option value="Environmental Services">Environmental Services</option>
                                <option value="Events Services">Events Services</option>
                                <option value="Executive Office">Executive Office</option>
                                <option value="Facilities Services">Facilities Services</option>
                                <option value="Farming">Farming</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Fine Art">Fine Art</option>
                                <option value="Fishery">Fishery</option>
                                <option value="Food Production">Food Production</option>
                                <option value="Food/Beverages">Food/Beverages</option>
                                <option value="Fundraising">Fundraising</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Gambling/Casinos">Gambling/Casinos</option>
                                <option value="Glass/Ceramics/Concrete">Glass/Ceramics/Concrete</option>
                                <option value="Government Administration">Government Administration</option>
                                <option value="Government Relations">Government Relations</option>
                                <option value="Graphic Design/Web Design">Graphic Design/Web Design</option>
                                <option value="Health/Fitness">Health/Fitness</option>
                                <option value="Higher Education/Acadamia">Higher Education/Acadamia</option>
                                <option value="Hospital/Health Care">Hospital/Health Care</option>
                                <option value="Hospitality">Hospitality</option>
                                <option value="Human Resources/HR">Human Resources/HR</option>
                                <option value="Import/Export">Import/Export</option>
                                <option value="Individual/Family Services">Individual/Family Services</option>
                                <option value="Industrial Automation">Industrial Automation</option>
                                <option value="Information Services">Information Services</option>
                                <option value="Information Technology/IT">Information Technology/IT</option>
                                <option value="Insurance">Insurance</option>
                                <option value="International Affairs">International Affairs</option>
                                <option value="International Trade/Development">International Trade/Development</option>
                                <option value="Internet">Internet</option>
                                <option value="Investment Banking/Venture">Investment Banking/Venture</option>
                                <option value="Investment Management/Hedge Fund/Private Equity">Investment Management/Hedge Fund/Private Equity</option>
                                <option value="Judiciary">Judiciary</option>
                                <option value="Law Enforcement">Law Enforcement</option>
                                <option value="Law Practice/Law Firms">Law Practice/Law Firms</option>
                                <option value="Legal Services">Legal Services</option>
                                <option value="Legislative Office">Legislative Office</option>
                                <option value="Leisure/Travel">Leisure/Travel</option>
                                <option value="Library">Library</option>
                                <option value="Logistics/Procurement">Logistics/Procurement</option>
                                <option value="Luxury Goods/Jewelry">Luxury Goods/Jewelry</option>
                                <option value="Machinery">Machinery</option>
                                <option value="Management Consulting">Management Consulting</option>
                                <option value="Maritime">Maritime</option>
                                <option value="Market Research">Market Research</option>
                                <option value="Marketing/Advertising/Sales">Marketing/Advertising/Sales</option>
                                <option value="Mechanical or Industrial Engineering">Mechanical or Industrial Engineering</option>
                                <option value="Media Production">Media Production</option>
                                <option value="Medical Equipment">Medical Equipment</option>
                                <option value="Medical Practice">Medical Practice</option>
                                <option value="Mental Health Care">Mental Health Care</option>
                                <option value="Military Industry">Military Industry</option>
                                <option value="Mining/Metals">Mining/Metals</option>
                                <option value="Motion Pictures/Film">Motion Pictures/Film</option>
                                <option value="Museums/Institutions">Museums/Institutions</option>
                                <option value="Music">Music</option>
                                <option value="Nanotechnology">Nanotechnology</option>
                                <option value="Newspapers/Journalism">Newspapers/Journalism</option>
                                <option value="Non-Profit/Volunteering">Non-Profit/Volunteering</option>
                                <option value="Oil/Energy/Solar/Greentech">Oil/Energy/Solar/Greentech</option>
                                <option value="Online Publishing">Online Publishing</option>
                                <option value="Other Industry">Other Industry</option>
                                <option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
                                <option value="Package/Freight Delivery">Package/Freight Delivery</option>
                                <option value="Packaging/Containers">Packaging/Containers</option>
                                <option value="Paper/Forest Products">Paper/Forest Products</option>
                                <option value="Performing Arts">Performing Arts</option>
                                <option value="Pharmaceuticals">Pharmaceuticals</option>
                                <option value="Philanthropy">Philanthropy</option>
                                <option value="Photography">Photography</option>
                                <option value="Plastics">Plastics</option>
                                <option value="Political Organization">Political Organization</option>
                                <option value="Primary/Secondary Education">Primary/Secondary Education</option>
                                <option value="Printing">Printing</option>
                                <option value="Professional Training">Professional Training</option>
                                <option value="Program Development">Program Development</option>
                                <option value="Public Relations/PR">Public Relations/PR</option>
                                <option value="Public Safety">Public Safety</option>
                                <option value="Publishing Industry">Publishing Industry</option>
                                <option value="Railroad Manufacture">Railroad Manufacture</option>
                                <option value="Ranching">Ranching</option>
                                <option value="Real Estate/Mortgage">Real Estate/Mortgage</option>
                                <option value="Recreational Facilities/Services">Recreational Facilities/Services</option>
                                <option value="Religious Institutions">Religious Institutions</option>
                                <option value="Renewables/Environment">Renewables/Environment</option>
                                <option value="Research Industry">Research Industry</option>
                                <option value="Restaurants">Restaurants</option>
                                <option value="Retail Industry">Retail Industry</option>
                                <option value="Security/Investigations">Security/Investigations</option>
                                <option value="Semiconductors">Semiconductors</option>
                                <option value="Shipbuilding">Shipbuilding</option>
                                <option value="Sporting Goods">Sporting Goods</option>
                                <option value="Sports">Sports</option>
                                <option value="Staffing/Recruiting">Staffing/Recruiting</option>
                                <option value="Supermarkets">Supermarkets</option>
                                <option value="Telecommunications">Telecommunications</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Think Tanks">Think Tanks</option>
                                <option value="Tobacco">Tobacco</option>
                                <option value="Translation/Localization">Translation/Localization</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Utilities">Utilities</option>
                                <option value="Venture Capital/VC">Venture Capital/VC</option>
                                <option value="Veterinary">Veterinary</option>
                                <option value="Warehousing">Warehousing</option>
                                <option value="Wholesale">Wholesale</option>
                                <option value="Wine/Spirits">Wine/Spirits</option>
                                <option value="Wireless">Wireless</option>
                                <option value="Writing/Editing">Writing/Editing</option>

                            </select>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('email'))
                            <span class="help-block with-errors">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="email" placeholder="Email Address*" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('phone_number'))
                            <span class="help-block with-errors">
                                {{ $errors->first('phone_number') }}
                            </span>
                            @endif
                            <input class="au-input au-input-2" type="tel" placeholder="Phone Number*" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('country'))
                            <span class="help-block with-errors">
                                {{ $errors->first('country') }}
                            </span>
                            @endif
                            <select id="country" name="country" class="au-input au-input-2">
                                <option value="">Country<sup>*</sup></option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('msg'))
                            <div class="help-block with-errors">
                                {{ $errors->first('msg') }}
                            </div>
                            @endif
                            <textarea class="au-textarea" placeholder="Details*" style="height: 170px;" id="msg" name="msg" required></textarea>
                        </div>
                    </div>
                    <input class="au-btn au-btn-primary" type="submit" id="contactBtn" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#phone_number").intlTelInput({
            // preferredCountries: ["us", "ca"],
            separateDialCode: true,
            initialCountry: ""
        }).on('countrychange', function(e, countryData) {
            $("#phone_number").val('+' + ($("#phone_number").intlTelInput("getSelectedCountryData").dialCode));
        });
    });
</script>

<style>
    .icon-i {
        background: #004a94;
        float: left;
        height: 60px;
        width: 64px;
        text-align: center;
        font-size: 35px;
        line-height: 50px;
        border-radius: 4px;
        color: #fff;
    }

    .second {
        background: #f58634;
    }

    .address h4 {
        margin: 10px 0 0 80px;
    }

    .address p {
        display: block;
        margin: 0 0 0 80px;
    }
</style>
@endsection