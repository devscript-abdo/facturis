<div class="modal fade" id="facturis_id_modal_add_customer" tabindex="-1" aria-hidden="true">
    <!--facturisStart::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--facturisStart::Modal content-->
        <div class="modal-content">
            <!--facturisStart::Form-->
            <form class="form" action="#" id="facturis_id_modal_add_customer_form"
                data-facturis-redirect="../../demo1/dist/apps/customers/list.html">
                <!--facturisStart::Modal header-->
                <div class="modal-header" id="facturis_id_modal_add_customer_header">
                    <!--facturisStart::Modal title-->
                    <h2 class="fw-bold">Add a Customer</h2>
                    <!--facturisEnd::Modal title-->
                    <!--facturisStart::Close-->
                    <div id="facturis_id_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                        <!--facturisStart::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--facturisEnd::Svg Icon-->
                    </div>
                    <!--facturisEnd::Close-->
                </div>
                <!--facturisEnd::Modal header-->
                <!--facturisStart::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--facturisStart::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="facturis_id_modal_add_customer_scroll"
                        data-facturis-scroll="true" data-facturis-scroll-activate="{default: false, lg: true}"
                        data-facturis-scroll-max-height="auto"
                        data-facturis-scroll-dependencies="#facturis_id_modal_add_customer_header"
                        data-facturis-scroll-wrappers="#facturis_id_modal_add_customer_scroll"
                        data-facturis-scroll-offset="300px">
                        <!--facturisStart::Input group-->
                        <div class="fv-row mb-7">
                            <!--facturisStart::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Name</label>
                            <!--facturisEnd::Label-->
                            <!--facturisStart::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="name"
                                value="Sean Bean" />
                            <!--facturisEnd::Input-->
                        </div>
                        <!--facturisEnd::Input group-->
                        <!--facturisStart::Input group-->
                        <div class="fv-row mb-7">
                            <!--facturisStart::Label-->
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Email</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Email address must be active"></i>
                            </label>
                            <!--facturisEnd::Label-->
                            <!--facturisStart::Input-->
                            <input type="email" class="form-control form-control-solid" placeholder="" name="email"
                                value="sean@dellito.com" />
                            <!--facturisEnd::Input-->
                        </div>
                        <!--facturisEnd::Input group-->
                        <!--facturisStart::Input group-->
                        <div class="fv-row mb-15">
                            <!--facturisStart::Label-->
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <!--facturisEnd::Label-->
                            <!--facturisStart::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder=""
                                name="description" />
                            <!--facturisEnd::Input-->
                        </div>
                        <!--facturisEnd::Input group-->
                        <!--facturisStart::Billing toggle-->
                        <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                            href="#facturis_id_modal_add_customer_billing_info" role="button" aria-expanded="false"
                            aria-controls="facturis_id_customer_view_details">Shipping Information
                            <span class="ms-2 rotate-180">
                                <!--facturisStart::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--facturisEnd::Svg Icon-->
                            </span>
                        </div>
                        <!--facturisEnd::Billing toggle-->
                        <!--facturisStart::Billing form-->
                        <div id="facturis_id_modal_add_customer_billing_info" class="collapse show">
                            <!--facturisStart::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--facturisStart::Label-->
                                <label class="required fs-6 fw-semibold mb-2">Address Line 1</label>
                                <!--facturisEnd::Label-->
                                <!--facturisStart::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="address1"
                                    value="101, Collins Street" />
                                <!--facturisEnd::Input-->
                            </div>
                            <!--facturisEnd::Input group-->
                            <!--facturisStart::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--facturisStart::Label-->
                                <label class="fs-6 fw-semibold mb-2">Address Line 2</label>
                                <!--facturisEnd::Label-->
                                <!--facturisStart::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="address2"
                                    value="" />
                                <!--facturisEnd::Input-->
                            </div>
                            <!--facturisEnd::Input group-->
                            <!--facturisStart::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--facturisStart::Label-->
                                <label class="required fs-6 fw-semibold mb-2">Town</label>
                                <!--facturisEnd::Label-->
                                <!--facturisStart::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="city"
                                    value="Melbourne" />
                                <!--facturisEnd::Input-->
                            </div>
                            <!--facturisEnd::Input group-->
                            <!--facturisStart::Input group-->
                            <div class="row g-9 mb-7">
                                <!--facturisStart::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--facturisStart::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">State / Province</label>
                                    <!--facturisEnd::Label-->
                                    <!--facturisStart::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="state"
                                        value="Victoria" />
                                    <!--facturisEnd::Input-->
                                </div>
                                <!--facturisEnd::Col-->
                                <!--facturisStart::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--facturisStart::Label-->
                                    <label class="required fs-6 fw-semibold mb-2">Post Code</label>
                                    <!--facturisEnd::Label-->
                                    <!--facturisStart::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="postcode"
                                        value="3000" />
                                    <!--facturisEnd::Input-->
                                </div>
                                <!--facturisEnd::Col-->
                            </div>
                            <!--facturisEnd::Input group-->
                            <!--facturisStart::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--facturisStart::Label-->
                                <label class="fs-6 fw-semibold mb-2">
                                    <span class="required">Country</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Country of origination"></i>
                                </label>
                                <!--facturisEnd::Label-->
                                <!--facturisStart::Input-->
                                <select name="country" aria-label="Select a Country" data-control="select2"
                                    data-placeholder="Select a Country..."
                                    data-dropdown-parent="#facturis_id_modal_add_customer"
                                    class="form-select form-select-solid fw-bold">
                                    <option value="">Select a Country...</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
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
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
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
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="HT">Haiti</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
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
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
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
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
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
                                    <option value="GB">United Kingdom</option>
                                    <option value="US" selected="selected">United States</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="VI">Virgin Islands</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                                <!--facturisEnd::Input-->
                            </div>
                            <!--facturisEnd::Input group-->
                            <!--facturisStart::Input group-->
                            <div class="fv-row mb-7">
                                <!--facturisStart::Wrapper-->
                                <div class="d-flex flex-stack">
                                    <!--facturisStart::Label-->
                                    <div class="me-5">
                                        <!--facturisStart::Label-->
                                        <label class="fs-6 fw-semibold">Use as a billing adderess?</label>
                                        <!--facturisEnd::Label-->
                                        <!--facturisStart::Input-->
                                        <div class="fs-7 fw-semibold text-muted">If you need more info, please check
                                            budget planning</div>
                                        <!--facturisEnd::Input-->
                                    </div>
                                    <!--facturisEnd::Label-->
                                    <!--facturisStart::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <!--facturisStart::Input-->
                                        <input class="form-check-input" name="billing" type="checkbox"
                                            value="1" id="facturis_id_modal_add_customer_billing"
                                            checked="checked" />
                                        <!--facturisEnd::Input-->
                                        <!--facturisStart::Label-->
                                        <span class="form-check-label fw-semibold text-muted"
                                            for="facturis_id_modal_add_customer_billing">Yes</span>
                                        <!--facturisEnd::Label-->
                                    </label>
                                    <!--facturisEnd::Switch-->
                                </div>
                                <!--facturisStart::Wrapper-->
                            </div>
                            <!--facturisEnd::Input group-->
                        </div>
                        <!--facturisEnd::Billing form-->
                    </div>
                    <!--facturisEnd::Scroll-->
                </div>
                <!--facturisEnd::Modal body-->
                <!--facturisStart::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--facturisStart::Button-->
                    <button type="reset" id="facturis_id_modal_add_customer_cancel"
                        class="btn btn-light me-3">Discard</button>
                    <!--facturisEnd::Button-->
                    <!--facturisStart::Button-->
                    <button type="submit" id="facturis_id_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--facturisEnd::Button-->
                </div>
                <!--facturisEnd::Modal footer-->
            </form>
            <!--facturisEnd::Form-->
        </div>
    </div>
</div>
