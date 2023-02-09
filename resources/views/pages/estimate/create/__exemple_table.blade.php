<div class="table-responsive">
    <table class="table table-striped box-shadow-none mt-4" id="billTbl">
        <thead>
            <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                <th scope="col">#</th>
                <th scope="col" class="required">Product</th>
                <th scope="col" class="required">Qty</th>
                <th scope="col" class="required">Unit Price</th>
                <th scope="col">Tax</th>
                <th scope="col" class="required">Amount</th>
                <th scope="col" class="text-end">Action</th>
            </tr>
        </thead>
        <tbody class="invoice-item-container" >
            <tr class="tax-tr">
                <td class="text-center item-number align-center">1</td>
                <td class="table__item-desc w-25" >
                    <select class="form-select product io-select2 select2-hidden-accessible" required=""
                        data-control="select2" name="product_id[]" tabindex="-1" aria-hidden="true"
                        data-select2-id="select2-data-1234-h47i">
                        <option selected="selected" value="" data-select2-id="select2-data-1236-bedo">Select
                            Product or Enter free text</option>
                        <option value="24" data-select2-id="select2-data-2182-7hfs">10 hrs per day</option>
                        <option value="112" data-select2-id="select2-data-2183-ei0v">123</option>
                        <option value="39" data-select2-id="select2-data-2184-qxfu">360 Sanal Tur</option>
                        <option value="25" data-select2-id="select2-data-2185-58hq">8Hrs. NC Plus Package</option>
                    </select>
                </td>
                <td class="table__qty">
                    <input class="form-control qty " required="" type="number" min="0" step=".01"
                        oninput="validity.valid||(value=value.replace(/[e\+\-]/gi,''))" name="quantity[]">
                </td>
                <td>
                    <input class="form-control price-input price "
                        oninput="validity.valid||(value=value.replace(/[e\+\-]/gi,''))" min="0" step=".01"
                        pattern="^\d*(\.\d{0,2})?$" required=""
                        onkeypress="if(this.value.length==8) return false;" name="price[]" type="number">
                </td>
                <td data-select2-id="select2-data-1705-4ej1">
                    <select name="tax[]" class="form-select io-select2 fw-bold tax select2-hidden-accessible"
                        data-control="select2" multiple="" tabindex="-1" aria-hidden="true"
                        data-select2-id="select2-data-1273-efee">
                        <option value="5" data-id="1" data-select2-id="select2-data-1707-l9if">VAT 5%
                        </option>
                        <option value="2.5" data-id="2" data-select2-id="select2-data-1708-z03k">SGST 2.5
                        </option>
                        <option value="9" data-id="4" data-select2-id="select2-data-1709-xjyc">IGST</option>
                        <option value="20" data-id="6" data-select2-id="select2-data-1710-xcld">MwsT</option>
                        <option value="18" data-id="7" data-select2-id="select2-data-1711-qr6y">CGST AND SGST
                        </option>
                        <option value="8.25" data-id="10" data-select2-id="select2-data-1712-a1ec">Test</option>
                        <option value="975" data-id="11" data-select2-id="select2-data-1713-rwab">TVQ</option>
                        <option value="9" data-id="12" data-select2-id="select2-data-1714-p1yw">CGST</option>
                        <option value="18" data-id="13" data-select2-id="select2-data-1715-b4zl">VAT TWO
                        </option>
                        <option value="21" data-id="15" data-select2-id="select2-data-1716-fi11">BTW 21
                        </option>
                        <option value="30" data-id="16" data-select2-id="select2-data-1717-jvsd">New VAT
                        </option>
                        <option value="8" data-id="18" data-select2-id="select2-data-1718-b748">gst-8</option>
                        <option value="50" data-id="21" data-select2-id="select2-data-1719-a61c">aq</option>
                        <option value="5" data-id="22" data-select2-id="select2-data-1720-mti3">Rogan Becker
                        </option>
                        <option value="21" data-id="24" data-select2-id="select2-data-1721-03ak">MwST Inklusive
                        </option>
                        <option value="7" data-id="25" data-select2-id="select2-data-1722-os9o">vataa</option>
                        <option value="15" data-id="26" data-select2-id="select2-data-1723-vw0z">Retención
                        </option>
                        <option value="0" data-id="29" data-select2-id="select2-data-1724-pf31">لا توجد
                        </option>
                        <option value="21" data-id="31" data-select2-id="select2-data-1725-jbvh">IVA</option>
                        <option value="12" data-id="32" data-select2-id="select2-data-1726-owqw">VATAX</option>
                        <option value="18" data-id="33" data-select2-id="select2-data-1727-hchb">GST</option>
                        <option value="123" data-id="36" data-select2-id="select2-data-1728-jh4n">sss</option>
                        <option value="0" data-id="37" data-select2-id="select2-data-1729-0zaz">IMPUESTOS
                        </option>
                        <option value="92" data-id="38" data-select2-id="select2-data-1730-2hcv">Allah Ditta
                        </option>
                        <option value="15" data-id="39" data-select2-id="select2-data-1731-bggb">القيمة المضافة
                        </option>
                        <option value="9" data-id="41" data-select2-id="select2-data-1732-lfww">VAT 9%
                        </option>
                        <option value="19" data-id="42" data-select2-id="select2-data-1733-4gcl">VAT 19%
                        </option>
                        <option value="5" data-id="44" data-select2-id="select2-data-1734-4xwa">VAT</option>
                        <option value="21" data-id="46" data-select2-id="select2-data-1735-ak8v">BE</option>
                        <option value="18" data-id="47" data-select2-id="select2-data-1736-q2df">IGV</option>
                        <option value="7" data-id="48" data-select2-id="select2-data-1737-0d3q">7 Prozent
                        </option>
                        <option value="1" data-id="49" data-select2-id="select2-data-1738-bowd">Revenue Tax
                        </option>
                        <option value="18" data-id="50" data-select2-id="select2-data-1739-lx5v">GST 18%
                        </option>
                        <option value="20" data-id="51" data-select2-id="select2-data-1740-yj9u">TVA</option>
                        <option value="23" data-id="52" data-select2-id="select2-data-1741-9mqf">VAT 23%
                        </option>
                        <option value="15" data-id="53" data-select2-id="select2-data-1742-78f0">abc</option>
                    </select><span
                        class="select2 select2-container select2-container--bootstrap-5 select2-container--below"
                        dir="ltr" data-select2-id="select2-data-1274-zxjc" style="width: 161.219px;"><span
                            class="selection"><span class="select2-selection select2-selection--multiple"
                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                aria-disabled="false">
                                <ul class="select2-selection__rendered" id="select2-tax-qt-container"></ul><span
                                    class="select2-search select2-search--inline">
                                    <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
                                        spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
                                        aria-describedby="select2-tax-qt-container" placeholder="Select TAX" style="width: 100%;"></textarea>
                                </span>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </td>
                <td class="text-end item-total pt-8 text-nowrap">4,800.00</td>
                <td class="text-end">
                    <button type="button" title="Delete"
                        class="btn btn-icon fs-3 text-danger btn-active-color-danger delete-invoice-item">
                        <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                            </path>
                        </svg><!-- <i class="fa-solid fa-trash"></i> Font Awesome fontawesome.com -->
                    </button>
                </td>
            </tr>

            <tr class="border-bottom border-bottom-dashed tax-tr" data-select2-id="select2-data-2283-fpcn">
                <td class="text-center item-number align-center">2</td>
                <td class="table__item-desc w-25" data-select2-id="select2-data-2282-poqa">
                    <select class="form-select productId product fw-bold select2-hidden-accessible"
                        name="product_id[]" 'data-control'="" tabindex="-1" aria-hidden="true"
                        data-select2-id="select2-data-2503-d5n9"> 'select2' required&gt;
                        <option selected="selected" value="">Select Product or Enter free text</option>

                        <option value="24">10 hrs per day</option>

                        <option value="112">123</option>

                        <option value="39">360 Sanal Tur</option>

                        <option value="25" data-select2-id="select2-data-2505-ictr">8Hrs. NC Plus Package</option>

                        <option value="62">abc</option>

                        <option value="23">ABC</option>

                        <option value="72">Acknow</option>

                        <option value="40">airtel internet</option>

                        <option value="111">Al</option>

                        <option value="80">Alyssa Morales</option>

                        <option value="54">aq new</option>

                        <option value="18">Basic</option>

                        <option value="52">basic hosting</option>

                        <option value="89">Bi Weekly</option>

                        <option value="77">Bianca Cleveland</option>

                        <option value="20">Bree Burnett</option>

                        <option value="42">candidate</option>

                        <option value="121">cherat</option>

                        <option value="68">Claudia Aguilar</option>

                        <option value="71">client-product</option>

                        <option value="6">Cricket Bat</option>

                        <option value="30">crown post</option>

                        <option value="51">demo Product测试</option>

                        <option value="47">DENEME</option>

                        <option value="109">dfgsgsd</option>

                        <option value="9">Dress</option>

                        <option value="26">Electronics spare parts</option>

                        <option value="76">eNLACE DE FIBRA OPTICA INCLUYE Sistema de video, Incluye: * 04 Camaras
                            IP</option>

                        <option value="99">FARAJY</option>

                        <option value="38">Fotoraf</option>

                        <option value="63">gramata</option>

                        <option value="45">hair oil</option>

                        <option value="53">Hanna Foster</option>

                        <option value="32">hello</option>

                        <option value="31">hello</option>

                        <option value="84">HORAS</option>

                        <option value="15">hosting</option>

                        <option value="14">Hourly Labour Charge</option>

                        <option value="21">IGST</option>

                        <option value="69">Iphone 11 64GB</option>

                        <option value="101">iphone 12</option>

                        <option value="55">Kerry Pierce</option>

                        <option value="114">Kopi Kapucino</option>

                        <option value="11">Lambo</option>

                        <option value="57">Laptop</option>

                        <option value="29">larva 777 100 ml</option>

                        <option value="19">Led Bulb</option>

                        <option value="4">MacBook Pro</option>

                        <option value="96">maintenance</option>

                        <option value="67">Marah Knapp</option>

                        <option value="44">Marketplace Membership</option>

                        <option value="115">mcm</option>

                        <option value="33">Melissa Daniel</option>

                        <option value="120">Milk Pack</option>

                        <option value="91">My new product1</option>

                        <option value="94">Nderrim Motori</option>

                        <option value="118">New Product One</option>

                        <option value="95">Oil</option>

                        <option value="7">Onion Hair Oil</option>

                        <option value="119">Oppo a57</option>

                        <option value="107">Ordinateur HP</option>

                        <option value="102">Paneer</option>

                        <option value="46">Product</option>

                        <option value="123">Projector</option>

                        <option value="104">Pushpen Roy</option>

                        <option value="2">Realme 8</option>

                        <option value="1">Rich Dad Poor Dad</option>

                        <option value="113">Roti Maker</option>

                        <option value="41">sa</option>

                        <option value="97">Sample</option>

                        <option value="100">samsung zfold</option>

                        <option value="50">SEO</option>

                        <option value="117">SEO</option>

                        <option value="12">service payment</option>

                        <option value="48">ss</option>

                        <option value="66">Supply &amp; Installtion of acces ladder HDG 7 MTR</option>

                        <option value="65">Supply &amp; Installtion of aluminium nosing</option>

                        <option value="64">Supply &amp; Installtion of HDG handrel 20mm</option>

                        <option value="8">T-shirt</option>

                        <option value="74">tesetyretyer</option>

                        <option value="16">Test</option>

                        <option value="59">test</option>

                        <option value="13">test pro</option>

                        <option value="106">thsirt imprimer</option>

                        <option value="87">Ticket VIP Silver</option>

                        <option value="98">TM500ml</option>

                        <option value="105">Transferencia electrónica.</option>

                        <option value="92">Transport Profi Bucuresti</option>

                        <option value="116">vinil blockout</option>

                        <option value="22">vps1</option>

                        <option value="43">wak wak</option>

                        <option value="5">Wardrobe</option>

                        <option value="83">Web Development</option>

                        <option value="93">Website</option>

                        <option value="88">Weekly</option>

                        <option value="103">Work for February</option>

                        <option value="78">Zonwering</option>

                        <option value="108">منتج رقم 1</option>

                    </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr"
                        data-select2-id="select2-data-2504-k5xn" style="width: 284.5px;"><span
                            class="selection"><span class="select2-selection select2-selection--single"
                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-disabled="false" aria-labelledby="select2-product_id-w5-container"
                                aria-controls="select2-product_id-w5-container"><span
                                    class="select2-selection__rendered" id="select2-product_id-w5-container"
                                    role="textbox" aria-readonly="true" title="8Hrs. NC Plus Package">8Hrs. NC Plus
                                    Package</span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </td>
                <td class="table__qty">
                    <input class="form-control qty " required="" name="quantity[]" type="number" min="0"
                        step=".01" oninput="validity.valid||(value=value.replace(/[e\+\-]/gi,''))">
                </td>
                <td>
                    <input class="form-control price-input price " required="" name="price[]" type="number"
                        oninput="validity.valid||(value=value.replace(/[e\+\-]/gi,''))" min="0" step=".01"
                        onkeypress="if(this.value.length==8) return false;">
                </td>
                <td class="" data-select2-id="select2-data-2386-zuef">
                    <select data-link="defaultTax" class="form-select taxId tax fw-bold select2-hidden-accessible"
                        name="tax[]" placeholder="Select Tax" multiple="" tabindex="-1" aria-hidden="true"
                        data-select2-id="select2-data-2499-pl02">

                        <option value="5" data-id="1">VAT 5%</option>

                        <option value="2.5" data-id="2">SGST 2.5</option>

                        <option value="9" data-id="4">IGST</option>

                        <option value="20" data-id="6">MwsT</option>

                        <option value="18" data-id="7">CGST AND SGST</option>

                        <option value="8.25" data-id="10">Test</option>

                        <option value="975" data-id="11">TVQ</option>

                        <option value="9" data-id="12">CGST</option>

                        <option value="18" data-id="13">VAT TWO</option>

                        <option value="21" data-id="15">BTW 21</option>

                        <option value="30" data-id="16">New VAT</option>

                        <option value="8" data-id="18">gst-8</option>

                        <option value="50" data-id="21">aq</option>

                        <option value="5" data-id="22">Rogan Becker</option>

                        <option value="21" data-id="24">MwST Inklusive</option>

                        <option value="7" data-id="25">vataa</option>

                        <option value="15" data-id="26">Retención</option>

                        <option value="0" data-id="29">لا توجد</option>

                        <option value="21" data-id="31">IVA</option>

                        <option value="12" data-id="32">VATAX</option>

                        <option value="18" data-id="33">GST</option>

                        <option value="123" data-id="36">sss</option>

                        <option value="0" data-id="37">IMPUESTOS</option>

                        <option value="92" data-id="38">Allah Ditta</option>

                        <option value="15" data-id="39">القيمة المضافة</option>

                        <option value="9" data-id="41">VAT 9%</option>

                        <option value="19" data-id="42">VAT 19%</option>

                        <option value="5" data-id="44">VAT</option>

                        <option value="21" data-id="46">BE</option>

                        <option value="18" data-id="47">IGV</option>

                        <option value="7" data-id="48">7 Prozent</option>

                        <option value="1" data-id="49">Revenue Tax</option>

                        <option value="18" data-id="50">GST 18%</option>

                        <option value="20" data-id="51">TVA</option>

                        <option value="23" data-id="52">VAT 23%</option>

                        <option value="15" data-id="53">abc</option>

                    </select><span class="select2 select2-container select2-container--bootstrap-5" dir="ltr"
                        data-select2-id="select2-data-2500-4jn6" style="width: 192.734px;"><span
                            class="selection"><span class="select2-selection select2-selection--multiple"
                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                aria-disabled="false">
                                <ul class="select2-selection__rendered" id="select2-tax-vn-container"></ul><span
                                    class="select2-search select2-search--inline">
                                    <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
                                        spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
                                        aria-describedby="select2-tax-vn-container" placeholder="Select TAX" style="width: 100%;"></textarea>
                                </span>
                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </td>
                <td class="tbAmount text-right item-total pt-8 text-nowrap">4,500.00</td>
                <td class="text-end">
                    <button type="button" title="Delete"
                        class="btn btn-sm text-danger fs-3 btn-icon btn-active-color-danger delete-invoice-item">
                        <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                            </path>
                        </svg><!-- <i class="fa-solid fa-trash"></i> Font Awesome fontawesome.com -->
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
