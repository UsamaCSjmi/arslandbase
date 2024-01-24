<?php require_once('./assets/header.php')?>
<div style="margin-top:65px" class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <img src="<?php echo SITE_PATH?>/images/faq.jpg" style="width:100%">
        </div>
        <div class="banner-cover container end-in-banner">
            <div class="row center">
                <h1 class="big-heading font-heading" style="color:#fff;">FAQ's</h1>
            </div>
        </div>
    </div>
    <div class="container col pad-prop" style="margin:60px 0">
        <h2 class="big-heading mbt-50 font-heading">Frequently Asked Questions</h2>
        <div class="tnc" style="border-top: 1px solid #00000040;padding-top: 45px; width:100%">
            <h2><strong>FAQ's</strong></h2>
            <style>

                .faq-container {
                    /* max-width: 600px; */
                    margin: 0 auto;
                }
                .categ_faq{
                    margin-top: 20px;
                }
                .q_a {
                    border: 1px solid #ddd;
                    margin-bottom: 10px;
                    overflow: hidden;
                }

                .q_on {
                    margin-top: 0 !important;
                    margin-bottom: 0!important;
                    cursor: pointer;
                    padding: 10px;
                    border-bottom: 1px solid #ddd;
                    text-align: left;
                    background: none;
                    position: relative;
                }

                .q_on::after {
                    content: '▼'; /* Down arrow */
                    position: absolute;
                    top: 50%;
                    right: 10px;
                    transform: translateY(-50%);
                    transition: transform 0.3s;
                    font-weight: 400;
                }

                .a_on {
                    display: block;
                    visibility: hidden;
                    opacity: 0;
                    max-height: 0;
                    padding: 0 10px;
                    transition: max-height 0.5s ease, padding 0.5s ease, visibility 0.3s,opacity 0.3s;
                }
                .a_on.active{
                    visibility: visible;
                    opacity: 1;
                    padding: 10px 10px;
                    max-height: 500px;
                    transition: max-height 0.5s ease, padding 0.5s ease, visibility 0.3s,opacity 0.3s;
                }

                .q_on.active::after {
                    /* content: '▲'; Up arrow when active */
                    transform: translateY(-50%) rotate(180deg);
                }
            </style>
            <div class="faq-container">
                <div class="categ_faq">
                    <h3>Introduction</h3>
                    <div class="q_a">
                        <h4 class="q_on">What is ARS Landbase?</h4>
                        <div class="a_on">
                            <p>ARS Landbase is a fastest growing Real Estate Consultancy Company and the dynamic venture, which is being launched by the leadership of ARS Landbase, which was launched in the month of April 2016. While, ARS Landbase has been operating since 2007, the leaders at the company wanted to improve and refine their existing services to cater to the requirements of their customers, which prompted them to set up ARS Landbase.</p>
                            <p>ARS Landbase has digitised itself to offer best in class, prompt and quality services to its customers by using its highly innovative consultancy/service models. The company is now looking to offer end to end solutions to buyers and sellers through their website. ARS Landbase caters to the requirements of its clients in numerous areas including commercial sector, residential projects, commercial leasing, resale projects and Turnkey Solutions.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Is ARS Landbase a subsidiary of ARS Landbase?</h4>
                        <div class="a_on">
                            <p>ARS Landbase is a subsidiary of ARS Landbase. Though, it is an entirely new venture under the umbrella of ARS Landbase, launched with the purpose of offering exceptional, quick and end-to-end turnkey solutions to its clients in the real estate space.</p>
                            <p>ARS Landbase was launched after the owner of the company resolved to use his expertise and knowledge from the mortgage industry to meet and satisfy the needs of buyers in the real estate sector. The company dealt with the recent problems and issues of the customers in the real estate sector, which further enabled them in becoming the premium channel partners of some of the leading real estate developers in the country including DLF Limited, Vatika Limited, Tata Housing, M3M India Limited, Godrej Properties, Conscient Infrastructure, Eldeco Properties and Mahindra LifeSpaces among others.</p>										
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Turnkey Solutions at ARS Landbase</h4>
                        <div class="a_on">
                            <p>Our turnkey solutions are all about delivering exceptional quality, value and services to our clients, which further enables them in managing their projects and delivering excellent services to the customers in the real estate segment. We offer a comprehensive range of property consulting, leasing and buying services to property buyers, which allow them to make the right real estate investments, and decisions. Our customised software is designed to help our clients manage their properties and office related procedures well. We will aid our customers by providing them excellent property consultancy, mortgage and planning services.</p>										
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Where ARS Landbase is located?</h4>
                        <div class="a_on">
                            <p>ARS Landbase, leading real estate consulting and mortgage planning company which is centrally located in the city of Gurgaon, Haryana in India. Please visit us for a cup of coffee and discuss the possibilities we can shake hands together.</p>
                        </div>
                    </div>
                </div>							
                <div class="categ_faq">
                    <h3>Documents</h3>
                    <div class="q_a">
                        <h4 class="q_on">What is the list of documents that you should verify before booking a property?</h4>
                        <div class="a_on">
                            <p>List of documents - </p>
                            <ol>
                                <li>Confirm the approved plans from the appropriate authority are in place.</li>
                                <li>Check that all other permissions from various authorities are in place.<br/> E.g. LOI, License, Building Plans, Environment clearance, Airport Authority, etc.</li>
                                <li>Confirm that the Land title is clear and there is no disputes/litigation (Title Certificate).</li>
                                <li>Have the agreement evaluated by an Advocate. Check possession date promised and provide for penalty if Builder does not deliver  as agreed.</li>
                                <li>Check and negotiate the payment schedule.-</li>
                            </ol>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Due diligence before buying a resale property? </h4>
                        <div class="a_on">
                            <ol>
                                <li>Check for a duly stamped registry</li>
                                <li>Ensure no dues are accorded to the builder/Authority</li>
                                <li>Check for seller’s name in municipal/Authority records</li>
                                <li>Confirm seller’s membership in the society/Authority (if formed)</li>
                                <li>Ensure there are no pending bills, charges or taxes</li>
                                <li>Make sure that the property is mortgage free( Not mortgaged with any Bank/NBFCs/Private Financed)</li>
                                <li>Sanctioned Building Plan (to ensure no unauthorized construction)</li>
                                <li>Previous title documents (that chain of title is complete).</li>
                            </ol>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Basic Documents given by the Builder in Direct Allotments ( Original Bookings)? </h4>
                        <div class="a_on">
                            <ol>
                                <li>Xerox of Duly filed, signed application form for your records with acceptance and duly signed and stamped from the developer/owner.</li>
                                <li>Allotment letter</li>
                                <li>Payment Receipts for the payment made till date.</li>
                                <li>Executed Builder Buyer Agreement.</li>
                                <li>Possession Letter( Given at the time of Possession)</li>
                            </ol>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Difference Between Conveyance Deed, Title Deed and Sale Deed. </h4>
                        <div class="a_on">
                            <p><strong>Conveyance Deed</strong><br/>The word conveyance means the transfer of ownership or interest in real property from one person to another by a document, such as a deed, lease, or mortgage. In India, transfer of property or rights in immovable property is governed by the Transfer of Property Act, 1882. For the transfer of any immovable property or rights in immovable property, it is necessary to execute a conveyance deed.</p>
                            <p><strong>Title Deed</strong><br/>A title deed is a document that proves the right of a person to an immovable property. A person can acquire an immovable property by various means and a properly stamped and executed document evidencing the transaction is a title document. For example a sale deed, a release deed, a relinquishment deed, a gift deed, a family settlement deed, a partition deed, a will all are evidence of how a person has acquired an immovable property and may be called title deeds.</p>
                            <p><strong>Sale Deed</strong><br/>A sale deed, also called a “conveyance”, is a document which transfers immovable property be it land or a house, flat, office or other structure to another person. In almost all cases, the sale deed must be registered compulsorily except in the case of resale of units in existing cooperative societies where the state law grants a specific exemption from registration. Regardless, all sale deeds are liable for stamp duty and the rates vary from state to state. Also the duty depends upon various factors, such as age of building, location and type of unit and so on.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What is a Building Completion Certificate?</h4>
                        <div class="a_on">
                            <p>A building completion certificate is the final document granted by the plan sanctioning authority and usually follows the occupancy certificate. This document certifies that all acts necessary in connection with the construction of a building are complete.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What is an Occupancy Certificate?</h4>
                        <div class="a_on">
                            <p>An occupancy certificate is granted by the plan sanctioning authority once the building is complete and ready for Inhabitation. In some places, an official water connection is granted only after the OC has been obtained. This document is given after verification that the construction has been carried out in accordance with the approved plans. The builder is not entitled to give possession and the unit buyer is not allowed to occupy the unit till the OC has been obtained. Further, the property comes into existence on and from the date of granting of OC. Property taxes are also levied as a unit from the OC date.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">How to register your property? </h4>
                        <div class="a_on">
                            <p>A building completion certificate is the final document granted by the plan sanctioning authority and usually follows the occupancy certificate. This document certifies that all acts necessary in connection with the construction of a building are complete.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What is Power of Attorney?</h4>
                        <div class="a_on">
                            <p>Power of Attorney is the right/authorization given by a property- owner to someone through whom the owner transfers the power and rights to deal with the Property to his/her chosen power of attorney. A power of attorney can be either a co-owner of the property, a blood- relative of the owner or any other person not related to that property or the owner.There are two types of power of attorney that can be granted namely ‘General Power of Attorney’ wherein a property owner gives ‘general’ rights to his/her chosen attorney. These include but are not limited to sell, lease, sub-lease etc. the Property as the Power of Attorney deems fit. The other type is ‘Special Power of Attorney’ wherein only a ‘special’ or ‘specific’ right is given by the owner to his/her chosen Power of Attorney.</p>
                        </div>
                    </div>
                </div>                            
                <div class="categ_faq">
                    <h3>Taxes</h3>
                    <div class="q_a">
                        <h4 class="q_on">What are the taxes that need to be paid at the time of property purchase?</h4>
                        <div class="a_on">
                            <p>The buyer needs to pay the following taxes at the time of registering the property:</p>
                            <ol>
                                <li>TDS or tax deduction at source on amount exceeding Rs 50 lakhs for the purchase of immovable property excluding agricultural land. The TDS must be submitted in the name of the seller.</li>
                                <li>Stamp duty on registration</li>
                                <li>Service Tax is applicable if the property is being purchased from the builder who conceived and constructed the project before offering possession to the buyer. If a ready-to-use property is purchased from the seller then service tax is not applicable.</li>
                                <li>Value Added Tax (if applicable in the state)</li>
                            </ol>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What are the prevailing rates of different property taxes to be paid?</h4>
                        <div class="a_on">
                            <p><strong>TDS</strong>- 1% on the amount exceeding Rs 5o lakhs<br/>Stamp duty depends on the state and municipal lawss.</p>
                            <p><strong>Service tax</strong>- 14.50% if the property is being developed by a builder/developer as a service for buyers.<br/> ( Rates are revising .50% from June 1st'16. New Rate will 15% from 1st June 2016 onwards.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What is TDS or tax Deduction at source on sale of property?</h4>
                        <div class="a_on">
                            <p>A new section 194IA has been inserted in the Income-tax Act, 1961 by the Finance Act, 2013. It provides for tax deduction at source on transfer of certain immovable property other than agricultural land of Rs. 50 lakh or more.<br/><br/>As per this new provision, any person, being a transferee responsible for paying to a resident transferor by way of consideration for transfer of immovable property other than agricultural land, shall at the time of credit of such sum to the account of the transferor or at the time of payment of such sum in cash or by issue of a cheque or draft or by any other mode, whichever is earlier, is required to deduct an amount equal to 1 percent of such sum as income-tax thereon specially when the value of the immovable property is Rs. 50 lakh or more.</p>										
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">How TDS on property is calculated?</h4>
                        <div class="a_on">
                            <p>In terms of calculating the cost on which TDS needs to be calculated, everything paid to the seller in consideration for property is considered i.e.</p>
                            <ol>
                                <li>Basic cost</li>
                                <li>IDC, EDC, PLC</li>
                                <li>Parking</li>
                                <li>Fire-fighting equipment</li>
                                <li>Electrification, wiring expenses etc.</li>
                            </ol>
                            <p>Anything paid to the third parties or other authorities are excluded</p>
                            <ol>
                                <li>Stamp duty</li>
                                <li>Registration fees</li>
                                <li>Any payments to government authorities.</li>
                                <li>Taxes charged by the builder</li>
                            </ol>
                            <p>In case a ready property is being purchased from an end user, then everything paid to the seller in consideration for the property as per the agreement-to-sale is considered.</p>
                        </div>
                    </div>
                
                    <div class="q_a">
                        <h4 class="q_on">What are Capital Gains on sale of Property?</h4>
                        <div class="a_on">
                            <p>The income tax rules define gain in two broad categories; namely short term capital gain (STCG) and long term capital gain (LTCG). Any gains arising by selling a property after holding it for 3 or lesser number of years, is short term capital gain. Any gains arising by selling the property after holding it for more than 3 years comes under long term capital gain.</p>
                            <p>For short term capital gain, the capital gain from asset is added to the investor’s income and taxed as per the income tax slab they fall under.</p>
                            <p>For long term capital gain, tax liability is determined based on indexed cost of acquisition and improvement. Indexation is a concept, which factors inflation in its calculation by using a factor called cost inflation index (CII).</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">How to calculate Short Term and Long term Capital Gain? Is it calculated from the date of registration OR from the date of Possession?</h4>
                        <div class="a_on">
                            <p>Possession certificate from the builder is what matters the most. Registration does not. The nature of the tax can be assessed based on the following two scenarios<br/><strong>During the under-construction phase</strong></p>										
                            <ol>
                                <li>When the buyers books the property rights by making an advance payment and makes subsequent payments to the developer as and when demanded and also with the progress in the construction then he gets the right to acquire a residential unit, and not a residential unit.</li>
                                <li>The right is acquired by executing documents with the builder like allotment letter, or execution of builder-buyer agreement (whichever happens first).</li>
                                <li>If the buyer has not obtained possession of the property, the right of the buyer would be in the nature of capital assets and accordingly, gain arising on such transfer would be in the nature of long term or short terms gain depending upon the period of holding. If more than 3 years, it is LTCG otherwise it is STCG.</li>
                                <li>Section 54-F is applicable to exempt your capital gains from taxes i.e. entire sale proceeds net of expenses incurred to complete transfer would require to be reinvested to exempt capital gains from taxes.</li>
                            </ol>
                            <p><strong>After the possession of the property</strong></p>
                            <ol>
                                <li>The unit becomes a residential house after the buyer obtains the possession from the developer. The nature of capital asset has changed – from rights to acquire to a residential house.</li>
                                <li>Therefore, period prior to taking of possession is not to be considered.</li>
                                <li>When you take possession of the flat which you have agreed to purchase, the right to purchase the flat gets converted into the flat itself. Therefore, if you sell the flat after taking possession, the period of three years begins/commences from the date of taking possession of the flat.</li>
                                <li>Capital gains tax Long term or short term liability can accordingly be computed depending on period of holding of the right to own a flat or asset.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What is the Stamp Duty and Who is liable to pay the stamp duty?</h4>
                        <div class="a_on">
                            <p>Stamp Duty is a tax, similar to sales tax and income tax collected by the government, and must be paid in full and on time. A stamp duty paid instrument/document is considered a proper and legal instrument/document. The liability of paying stamp duty is that of the buyer unless there is an agreement to the contrary.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Which instrument attract payment of Stamp Duty?</h4>
                        <div class="a_on">
                            <p>Stamp Duty is a tax, similar to sales tax and income tax collected by the government, and must be paid in full and on time. A stamp duty paid instrument/document is considered a proper and legal instrument/document. The liability of paying stamp duty is that of the buyer unless there is an agreement to the contrary.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Is Stamp Duty is Payable when a property is transferred by the way of Gift?</h4>
                        <div class="a_on">
                            <p>Yes. Stamp duty will have to be paid if the flat is gifted by the donor.</p>
                        </div>
                    </div>
                </div> 
                <div class="categ_faq">
                    <h3>Charges</h3>
                    <div class="q_a">
                        <h4 class="q_on">From what date are the maintenance charges are due?</h4>
                        <div class="a_on">
                            <p>Maintenance charges usually get applicable from the date (or month in general) the possession is taken of the Property.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">From what date is the Property Tax Due?</h4>
                        <div class="a_on">
                            <p>Property tax is applicable from the date of execution of Property documents in favour of the owner.</p>										
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What are NON OCCUPANCY Charges?</h4>
                        <div class="a_on">
                            <p>Non- occupancy charges become applicable to be paid if the ownership has been transferred by the Society/builder to the owner but the flat/unit is lying vacant even when it is in a ready- to- move condition.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What is the difference between Holding and Maintenance Charges?</h4>
                        <div class="a_on">
                            <p>Maintenance charges are the charges either annually or monthly applicable to be paid by the owner once he/she has taken possession of the Property. These charges are paid for the general maintenance and upkeep of the building/society.</p>
                            <p>Holding charges are to be paid by owner/holder who is a non-occupying owner (has not yet occupied the property) to the Developer/society/ government development agency.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Is the buyer liable to pay the labour cess?</h4>
                        <div class="a_on">
                            <p>There is a central act called The Building and Other Construction Workers Welfare Cess Act, 1996 under which a Builder/contractor is bound to pay 1% of the cost of construction where the cost of building exceeds Rs. 10 lacs and more than 10 workers are employed.<br/> Since the liability is clearly cast upon these persons there is no case for recovering this from the flat buyer moreso when there is no obligation to pay under the agreement. You must definitely write to the builder and put these points on record in the event you wish to pursue the matter later before the consumer forum.</p>
                        </div>
                    </div>
                </div>
                <div class="categ_faq">
                    <h3>NRI</h3>
                    <div class="q_a">
                        <h4 class="q_on">How can NRIs invest in Real Estate in India?</h4>
                        <div class="a_on">
                            <p>According to the regulations of FEMA and RBI, an NRI is allowed to do the following investments in property:</p>
                            <ol>
                                <li>Any immovable property can be purchased by an NRI in India other than any agricultural land, farm house and plantation property.</li>
                                <li>He can get any immovable property as mentioned above by gift from Indian resident, Indian citizen residing outside India or person of Indian origin.</li>
                                <li>He can also obtain any property by the way of inheritance.</li>
                                <li>He can transfer immovable property to any resident of India by sale.</li>
                                <li>He can transfer any agricultural land, farm house or plantation land to any resident of India by gift.</li>
                                <li>He can also transfer his residential or commercial property by means of gift to any person either residing in India or abroad or person of Indian origin.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">How to conduct Pruchase procedure?</h4>
                        <div class="a_on">
                            <p>A sale agreement must be drawn on a Rs 50 stamp paper, which will mention the final amount, advance payment, time limit to pay the due amount and details of installments.<br/>Once the sale deed is completed, you need to get it registered at the sub-registrar or Sub-District Magistrate. The overseas buyer’s foreign address has to be mentioned in the sale agreement. He can appoint a representative in India (with a power of attorney) to act on his behalf. The power of attorney should be notarised with the Indian consulate in the buyer’s country of residence.</p>
                            <p>The property can be registered in the name of the NRI and the holder of the power of attorney can sign on his behalf by producing a copy of the document to the appropriate authorities.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What to check before buying a property in India?</h4>
                        <div class="a_on">
                            <p>Few points of consideration are under:</p>
                            <p><strong>Property name:</strong><br/> The name of property should be clear from issues and the seller should have the required right to sell it, especially if it is inherited or any joint property.</p>
                            <p><strong>No Dues Certificate:</strong><br/> Always check that there will be no outstanding electricity/water bills or any other authority dues pending with the property. Take a no dues certificate from the seller at time of purchase.</p>
                            <p><strong>Bank release letter:</strong><br/> It is advisable to take the bank release letter from the concerned bank, if the property had been mortgaged as security in any type of loan.</p>
                            <p><strong>Permits:</strong><br/> The property of sale should have all approvals and permits from the civic authorities in terms of construction.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">What are the sources to finance the purchase of property in India?</h4>
                        <div class="a_on">
                            <p>The payment for purchase of permitted property by an NRI can be made by way of remittance through banking channels from abroad or from money lying in their NRE/NRO or FCNR account. The money for purchase of the permitted properties has to come only through banking channels hence the payment cannot be tendered in the form of traveler’s cheques or foreign currency.<br/><br/> NRIs are even allowed to finance the purchase with home loan in Indian Rupees. The home loan can be granted by the Indian employer of the NRI employee for the purpose of financing of the property.</p>
                        </div>
                    </div>
                    <div class="q_a">
                        <h4 class="q_on">Are NRI/PIO/OCI eligible for Housing Loans to buy property from the Indian Banks/ NBFCs?</h4>
                        <div class="a_on">
                            <p>An authorised dealer or a housing finance institution in India approved by the National Housing Bank may provide housing loan to a non-resident Indian or a person of Indian origin residing outside India.</p>
                            <p>For acquisition of a residential accommodation in India, subject to the following conditions, namely:</p>
                            <ol>
                                <li>The quantum of loans, margin money and the period of repayment shall be at par with those applicable to housing finance provided to a person residing in India.</li>
                                <li>The loan amount shall not be credited to Non-resident External (NRE)/Foreign Currency Non-resident (FCNR)/Non-resident non-repatriable (NRNR) account of the borrower.</li>
                                <li>The loan shall be fully secured by equitable mortgage by deposit of title deal of the property proposed to be acquired, and if necessary, also be lien on the borrower’s other assets in India.</li>
                                <li>The installment of loan, interest and other charges, if any, shall be paid by the borrower by remittances from outside India through normal banking channels , i.e., NRO/NRE account in India or out of rental income derived from renting out the property acquired by utilization of the loan or by any relative of the borrower in India by crediting the borrower’s loan account through the bank account of such relative (The word ‘relative’ means ‘relative’ as defined in section 6 of the Companies Act, 1956.)</li>
                                <li>The rate of interest on the loan shall conform to the directives issued by the Reserve Bank of India or, as the case may be, the National Housing Bank.</li>
                                <li>A maximum of 80 per cent amount is financed by the financial institution. The rest should be given by the NRI.</li>
                                <li>The NRI has to repay his principal amount as well as interest part from that similar channel only.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<script>
    let faqs = document.querySelectorAll(".q_a");
    faqs.forEach(faq => {
        faq.addEventListener("click",(e)=>{
            let question = faq.querySelectorAll(".q_on")[0];
            let answer = faq.querySelectorAll(".a_on")[0];
            if(!answer.classList.contains('active')){
                answer.classList.add('active')
                question.classList.add('active');
            }
            else{
                answer.classList.remove('active')
                question.classList.remove('active');
            }
        });
    });
</script>

<?php require_once('./assets/footer.php')?>