@extends('dashboard.layout.dlayout')
@section('content')


<main id="main" class="home-section container-fluid">
    <div class="col-md-12">
        <div class="col-md-11 pt-4 pb-5">
            <div class="wrapper hoa_invoice-InvoicePage offset-sm-1 hoa_invoice-invoiceHeader-mainDiv">
                <div class="col-md-12">

                    <div class="text-align-center">
                        <label class="pb-1 hoa_invoiceHeader-invoiceLable">INVOICE</label>

                        <div class="mt-4 add_Letter_head">
                            <button class="hoa_invoice-p6 me-2">+</button>
                            Add Letter Head
                        </div>
                    </div>

                    <!--invoice details starts-->
                    <section class="bodycont">
                        <div class="row px-0">
                            <div class="hoa_invoice-p6-invoiceDetails col-5 pb-4 m-auto">
                                <div class="mt-2 pt-1 hoa_invoice-invDetails-h1 ms-2">
                                    Invoice Details
                                </div>
                                <div class="row mt-4">
                                    <div class="col-5">
                                        <div class="hoa_invoice-invDetails-p ms-2">Type of Supply</div>
                                    </div>
                                    <div class="col-7">
                                        <select name="typeOfSupply" id="typeOfSupply" class="hoa_invoice-p6-select col-12 py-2">
                                            <option>Regular</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-5">
                                        <div class="hoa_invoice-invDetails-p ms-2">Invoice Number<span style="color: red;">*</span></div>
                                    </div>
                                    <div class="col-7">
                                        <input type="number" required min="0" class="hoa_invoice-p6-select invoiceHeader_invoiceDetails-calc form-control py-2" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-5">
                                        <div class="hoa_invoice-invDetails-p ms-2">Date of issue<span style="color: red;">*</span></div>
                                    </div>
                                    <div class="col-7">
                                        <input type="date" placeholder="mm-dd-yy" class="hoa_invoice-p6-select invoiceHeader_invoiceDetails-calen form-control py-2" />
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-5">
                                        <div class="hoa_invoice-invDetails-p ms-2">Due Date</div>
                                    </div>
                                    <div class="col-7">
                                        <input type="date" placeholder="mm-dd-yy" class="hoa_invoice-p6-select invoiceHeader_invoiceDetails-calen form-control py-2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--invoice details ends-->


                    <!--supplier and recipient details starts here-->
                    <section class="mt-5">
                        <div class="hoa_invoice-p6-invoiceDetails row m-auto" style="width: 91%;">
                            <div class="col-md-6">

                                <div style="text-align: left;">
                                    <div class="mb-2 mt-3 ms-4 invoiceHeader-supplierHead">
                                        Supplier Details
                                    </div>

                                    <div class="col-md-11 hoa_invoice-p6-box py-4 m-auto supplier-border">
                                        <!-- <input type="text"
                                                class="col-md-9 hoa_invoice-p6_supplier ps-4 supplier-searchBar" />

                                            <div class="mt-5 supplier-button-alignment">
                                                <button type="button" class="hoa_invoice-p6-button bg_red">Complete
                                                    profile</button>
                                            </div> -->
                                        <p>Name : </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div style="font-family:'Inter';">
                                    <div class="mb-2 mt-3 invoiceHeader-supplierHead ms-4 m-auto">
                                        Recepient details
                                    </div>

                                    <div class="col-md-11 hoa_invoice-p6-box py-4 m-auto recipient-border">
                                        <input type="text" placeholder="Search for a Client" class="search_clients col-md-9 hoa_invoice-p6_supplier ps-4 recipient-searchBar" />
                                        <input type="hidden" placeholder="clientid" class="clientid" value="" id="clientid" />
                                        <input type="hidden" placeholder="otherdeails" class="otherdeails" value="" id="otherdeails" />
                                        <ul class="search_clientsul"></ul>

                                        <div class="mt-5 supplier-button-alignment">
                                            <button type="button" class="hoa_invoice-p6-button" data-bs-toggle="modal" data-bs-target="#recipientModal" style="background: #075A5A;">Add New Recepient</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="text-align: left;margin-top: 8%;">Would You Like to send your invoice to
                                Different
                                address ?</div>

                            <div class="pt-3">
                                <button class="hoa_invoice-p6 col-md-12 col-lg-12" id="Add1" type="button" style="margin-right: 1%;font-size: 17px;float: left;margin-left: 1%;">+</button><span style="float: left;margin-left: 1%;">
                                    Add
                                    Shipping
                                    Address</span>

                                    <!--  style="display:none;" -->

                                <div id="textboxDiv1">
                                     <!-- <textarea name="shippingaddress" id="shippingaddress" class="shippingaddress" cols="30" rows="10"></textarea>    -->

                                </div> <br>
                            </div>

                            <div class="mt-3 mb-2">
                                <button class="hoa_invoice-p6 col-lg-12 col-md-12" id="Add2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-right: 1%;font-size: 17px;float: left;margin-left:
                                            1%;">+</button><span style="float: left;margin-left: 1%;">
                                    Add
                                    Other
                                    Details</span>

                                <!-- <div id="textboxDiv2" class="pb-5"></div> -->

                            </div>
                        </div>
                    </section>
                    <!--supplier and recipient details ends here-->

                    <!--product details-->
                    <div class="row">
                        <div class="hoa_invoice-p6-invoiceDetails col-md-12 m-auto mt-5" style="width: 97.6%;">

                            <div style="font-weight: 600;" class="mb-2 mt-3">
                                Product Details
                            </div>

                            <div style="float: right;">
                                <button class="mb-3 py-2 product-details-addTax-button"><span class="me-2 ms-2 pe-1 ps-1 product-details-addTax-Plusbutton">+</span><span class="me-2 product-details-addTax-Text">Add
                                        Taxation</span></button>
                                <img src="{{asset('/')}}assets/icons/BlueExclaimation.svg" onclick="" role="button" />
                            </div>

                            <div class="table-responsive-sm">
                                <table class="table table-bordered" style="border-color: #239C9C;border-radius: 8px;">
                                    <thead>
                                        <tr style="white-space: pre;" class="bg_light-green-2">
                                            <th class="col-md-3 ps-3">Item
                                            </th>
                                            <th class="col-md-1 ps-3">HSN code</th>
                                            <th class="col-md-1">Tax Rate <br> (per.)</th>
                                            <th class="col-md-1">Quantity <br> (no.)</th>
                                            <th class="col-md-1">Discount <br> (per.)</th>
                                            <th class="col-md-1">Rate <br>(Rs.)</th>
                                            <th class="col-md-2">Amount <br> (Rs.)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-hover bg_white">
                                        <tr>
                                            <td style="opacity: 0.4;">Your Item name</td>
                                            <td style="opacity: 0.4;">0000</td>
                                            <td style="opacity: 0.4;">%</td>
                                            <td style="opacity: 0.4;">01</td>
                                            <td style="opacity: 0.4;">%</td>
                                            <td style="opacity: 0.4;">0</td>
                                            <td style="opacity: 0.4;">0</td>
                                        </tr>

                                        <tr>
                                            <td colspan="7" class="pb-4 pt-4 ps-3">
                                                <div>
                                                    <button class="hoa_invoice-p6 col-md-12 ms-2 me-2" id="Add3" type="button" style="font-size: 17px;">+</button><span>
                                                        Add Description</span>
                                                    <div id="textboxDiv3"></div> <br>
                                                    <div class="row">

                                                    </div>
                                                </div>

                                                <div>
                                                    <button class="hoa_invoice-p6 col-md-12 ms-2 me-2" type="button" data-bs-toggle="modal" data-bs-target="#AddTaxation" style="font-size: 17px;">+</button><span>
                                                        Add Additional Tax</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="pt-2">
                                <button class="hoa_invoice-p6 col-md-12 ms-2 me-2" id="Add4" type="button" style="font-size: 17px;float: left;">+</button><span style="float: left;">
                                    Add Another Line</span><span>
                                    <hr class="new1">
                                </span>

                                <div id="textboxDiv4" class="ps-3"></div> <br>
                            </div>

                            <div class="row">
                                <div class="col-6"></div>

                                <div class="col-6 text-align-center">
                                    <div class="me-2 row justify-content-end">
                                        <label class="me-4 total-amount">TOTAL
                                            AMOUNT (INR)</label> <br>

                                        <input type="text" class="col-9 py-3 total-amount-textBox" />
                                    </div>

                                    <div class="me-2 row justify-content-end mt-4">
                                        <label class="me-5 pe-5 invoice-value">Invoice
                                            Value</label>
                                        <br>

                                        <input type="text" placeholder="Total Value in Words" class="col-9 py-2 mb-4 invoice-value-textBox" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product details ends here-->


                    <!--authorized signature starts-->
                    <div class="row">
                        <div class="hoa_invoice-p6-invoiceDetails col-md-8 mt-5 m-auto" style="width: 80%;">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="pt-4 mt-3">
                                        <button class="hoa_invoice-p6 col-md-2 ms-2 me-2" type="button" style="font-size: 17px;float: left;" data-bs-toggle="modal" data-bs-target="#Terms">+</button><span>
                                            Add Terms & Conditions</span>
                                    </div>

                                    <div class="mt-3">
                                        <button class="hoa_invoice-p6 col-md-2 ms-2 me-2" type="button" data-bs-toggle="modal" data-bs-target="#BankDetails" style="font-size: 17px;float: left;">+</button><span>
                                            Add Bank Details</span>
                                    </div>

                                    <div class="mt-3">
                                        <button class="hoa_invoice-p6 col-md-2 ms-2 me-2" id="Add7" type="button" style="font-size: 17px;float: left;">+</button><span>
                                            Add Note</span>
                                        <div id="textboxDiv7"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div style="float: right;position: relative;" class="mt-4">
                                        <img src="{{asset('/')}}assets/icons/rectangle.svg" />
                                        <img src="{{asset('/')}}assets/icons/pen.svg" style="position: absolute;top: 21%;left: 43%;" />
                                        <button type="button" class="authorized_sign">+
                                            Authorized
                                            Signature</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!--authorized signature starts-->

                    <!--page bottom starts-->
                    <div class="row mt-5 pt-5">
                        <div class="col-md-6 m-auto">
                            <div class="text-align-center">Check Before you proceed</div>
                            <button type="button" class="preview m-auto mt-3" onclick="location.href='PreviewInvoice.html'">Preview
                                <span class="ps-1"><img src="{{asset('/')}}assets/icons/eye.svg" /></span></button>

                            <div class="row col-md-12">
                                <button type="button" class="authorized_sign mt-4 col-6">
                                    Save and Download</button>

                                <button type="button" class="authorized_sign m-auto mt-4 col-5">
                                    Save to Draft</button>
                            </div>
                        </div>
                    </div>
                    <!--page bottom ends-->

                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Add other details in supplier section starts here-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ms-2 hoa_invoiceHeader-modalHeader">
                    <h5 class="modal-title" id="exampleModalLabel">Other Details
                    </h5>
                    <button type="button" class="btn-close me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ms-2">

                <form id="addd_otherdetailsform" method="post" enctype="multipart/form-data">
                        @csrf


                    <div class="row mt-2">
                        <div class="col-md-11 row">
                            <div class="col-md-7">
                                <input type="text" name="contractno" placeholder="PO / Contract Number" class="form-control hoa_invoiceHeader-modalText" />
                            </div>
                            <div class="col-md-5">
                                <input type="date" name="contractnodateon" placeholder="Dated on" class="form-control hoa_invoiceHeader-modalText hoa_invoiceHeader-modalCal" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-11 row">
                            <div class="col-md-7">
                                <input type="text" name="ewayno" placeholder="E-way Bill Number" class="form-control hoa_invoiceHeader-modalText" />
                            </div>
                            <div class="col-md-5">
                                <input type="date" name="ewaynodateon" placeholder="Dated on" class="form-control hoa_invoiceHeader-modalText hoa_invoiceHeader-modalCal" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-11 row">
                            <div class="col-md-12">
                                <input type="text" name="airwaysbillno" placeholder="GRN / BL / Airways Bill" class="form-control hoa_invoiceHeader-modalText" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-11 row">
                            <div class="col-md-6">
                                <input type="text" name="portofloading" placeholder="Port of Loading" class="form-control hoa_invoiceHeader-modalText" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="portofdischarge" placeholder="Port of Discharge" class="form-control hoa_invoiceHeader-modalText" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-11 row">
                            <div class="col-md-12">
                                <input type="text" name="arnno" placeholder="ARN Number" class="form-control hoa_invoiceHeader-modalText" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-11 row">
                            <div class="col-md-12">
                                <input type="text" name="bondno" placeholder="LUT / Bond Number" class="form-control hoa_invoiceHeader-modalText" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-11 row">
                            <!-- <div class="col-1">
                                <input type="checkbox" class="form-control hoa_invoiceHeader-modalCheckbox" />
                            </div>
                            <div class="col-10 invoiceHeader-CheckText">Show this data in all upcoming invoices
                                by default.
                            </div> -->
                        </div>
                    </div>
                    <div class="messageshowotherdetails"></div>

                    <div class="row mt-4">
                        <div class="col-md-11 row">
                            <div class="col-md-5">
                                <!-- <span class="btn-lg invoiceHeader-modalButton form-control">Add and
                                    save</span> -->
                                    <span id="addd_otherdetails" class="btn-lg invoiceHeader-modalButton form-control addd_otherdetails">Add and
                                    save</span>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!--modal for Add other details in supplier section ends here-->


    <!--modal for Add recipient details starts here-->
    <div class="modal fade" id="recipientModal" tabindex="-1" aria-labelledby="recipientModalLabel" aria-hidden="true">
        <div class="modal-dialog invoiceHeaderModal">
            <div class="modal-content">
                <div class="modal-header  ms-2 hoa_invoiceHeader-modalHeader">
                    <h5 class="modal-title" id="exampleModalLabel">Recipient Details</h5>
                    <button type="button" class="btn-close me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  ms-2">
                    <form id="addd_clientsform" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row mt-3">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Your Full Name*</label>
                                <div class="col-md-6">
                                    <input type="text" name="firstname" placeholder="First Name" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lastname" placeholder="Last Name" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Your Company Name*</label>
                                <div class="col-md-12">
                                    <input type="text" name="company" placeholder="Company name" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Your Business Number</label>
                                <div class="col-md-12">
                                    <input type="tel" name="phone" placeholder="+91" id="phone" class="form-control hoa_invoiceHeader-modalText pe-md-5 me-md-5" name="businessNumber" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Your Business Email ID</label>
                                <div class="col-md-12">
                                    <input type="text" name="business_email" placeholder="Email ID" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Location of your Company*</label>
                                <div class="col-md-12">
                                    <input type="text" name="company_address" placeholder="Company Address" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Name of your State*</label>
                                <div class="col-md-12">
                                    <input type="text" name="state" placeholder="State" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Name of a city where your Company is
                                    Located*</label>
                                <div class="col-md-12">
                                    <input type="text" name="city" placeholder="District/City" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Your Postal Code/zip code*</label>
                                <div class="col-md-12">
                                    <input type="text" name="zipcode" placeholder="Zipcode" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 row">
                                <label class="RecipientModal-label mb-2">Your GST identification Number</label>
                                <div class="col-md-12">
                                    <input type="text" name="gst" placeholder="GSTIN" class="form-control hoa_invoiceHeader-modalText" />
                                </div>
                            </div>
                        </div>
                        <div class="messageshow"></div>

                        <div class="row mt-4">
                            <div class="col-md-11 row mt-4">
                                <div class="col-md-6">
                                    <span id="addd_clients" class="btn-lg invoiceHeader-modalButton form-control addd_clients">Add
                                        Client</span>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--modal for add recipient details ends here-->


    <!--modal for Add taxation in product details starts here-->
    <div class="modal fade" id="AddTaxation" tabindex="-1" aria-labelledby="AddTaxationLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ms-2 hoa_invoiceHeader-modalHeader">
                    <h5 class="modal-title" id="exampleModalLabel">Add Taxation</h5>
                    <button type="button" class="btn-close me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ms-2">
                    <div class="row mt-2">
                        <div class="col-md-10">
                            <label class="addTaxation-label mb-3">For what you are adding Tax ?</label>
                            <button class="btn-lg col-md-12 addTaxation-RadioButton" type="button">For
                                Services<span style="float: right;"><input type="radio" Name="whyAddingTax" /></span></button>
                            <button class="btn-lg col-md-12 addTaxation-RadioButton mt-3" type="button">For
                                Goods/Products<span style="float: right;"><input type="radio" Name="whyAddingTax" /></span></button>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-10">
                            <label class="addTaxation-label mb-3">How would you like to Apply tax to your
                                Services/Products ?</label>
                            <button class="btn-lg col-md-12 addTaxation-RadioButton" type="button">Individually
                                on each item<span style="float: right;"><input type="radio" Name="whyAddingTax" /></span></button>
                            <button class="btn-lg col-md-12 addTaxation-RadioButton mt-3" type="button">On total
                                amount of items<span style="float: right;"><input type="radio" Name="whyAddingTax" /></span></button>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-10">
                            <label class="addTaxation-label mb-3 col-md-12">Set your Tax value</label>
                            <input type="text" placeholder="%" class="addTaxation-textBox col-md-3 py-2" />
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-11 row">
                            <div class="col-1">
                                <input type="checkbox" class="form-control hoa_invoiceHeader-modalCheckbox" />
                            </div>
                            <div class="col-10 invoiceHeader-CheckText">Show this data in all upcoming invoices
                                by default.
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-11 row">
                            <div class="col-md-5">
                                <button class="btn-lg invoiceHeader-modalButton form-control">Add and
                                    save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal for Add taxation in ends here-->

    <!--modal for terms & condition starts here-->
    <div class="modal fade" id="Terms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ms-2 hoa_invoiceHeader-modalHeader">
                    <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
                    <button type="button" class="btn-close me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ms-2">
                    <div class="row mt-2">
                        <div class="col-md-10">
                            <button type="button" class="termsCond_button form-control">Add
                                line<span class="termsCond_plus" style="float: right;">+</span></button>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-10">
                            <h5>Add Terms of Payment</h5>
                            <button type="button" class="termsCond_button form-control mt-3">Add
                                line<span class="termsCond_plus" style="float: right;">+</span></button>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-11 row">
                            <div class="col-1">
                                <input type="checkbox" class="form-control hoa_invoiceHeader-modalCheckbox" />
                            </div>
                            <div class="col-10 invoiceHeader-CheckText">Show this data in all upcoming invoices
                                by default.
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-11 row">
                            <div class="col-md-5">
                                <button class="btn-lg invoiceHeader-modalButton form-control">Add and
                                    save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal for terms & condition ends here-->

    <!--modal for adding banking details starts here-->
    <div class="modal fade" id="BankDetails" tabindex="-1" aria-labelledby="BankDetailsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ms-2 hoa_invoiceHeader-modalHeader">
                    <h5 class="modal-title" id="exampleModalLabel">Bank Details</h5>
                    <button type="button" class="btn-close me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ms-2">
                    <div class="row mt-3">
                        <div class="col-md-10">
                            <select name="bankName" id="bankName" class="invoiceHeader-bankdetails mb-4 col-md-12 py-2 px-3">
                                <option value="bankName" disabled selected>Bank Name</option>
                                <option value="sbi">State Bank of India</option>
                                <option value="pnb">Punjab National Bank</option>
                                <option value="bob">Bank of Baroda</option>
                            </select>

                            <input type="text" value="Branch Name" class="form-control invoiceHeader-bankdetails py-2 px-3 mb-4" id="branchName" />

                            <select name="accType" id="accType" class="invoiceHeader-bankdetails col-md-12 py-2 px-3 mb-4">
                                <option value="accType" disabled selected>Type of Account</option>
                                <option value="savingAcc">Saving Account</option>
                                <option value="currentAcc">Current Account</option>
                                <option value="salaryAcc">Salary Account</option>
                                <option value="nriAcc">NRI Account</option>
                            </select>

                            <input type="text" placeholder="Account Number" class="form-control mb-4 px-3 py-2 invoiceHeader-bankdetails" id="accNumber" />


                            <input type="text" placeholder="IFSC Code" class="form-control mb-4 px-3 py-2 invoiceHeader-bankdetails" id="ifscCode" />
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-11 row">
                                <div class="col-1">
                                    <input type="checkbox" class="form-control hoa_invoiceHeader-modalCheckbox" />
                                </div>
                                <div class="col-10 invoiceHeader-CheckText">Show this data in all upcoming
                                    invoices
                                    by default.
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-11 row">
                                <div class="col-md-5">
                                    <button class="btn-lg invoiceHeader-modalButton form-control">Add and
                                        save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal for adding banking details ends here-->

</main>


<!--script for setting country flag-->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->




<script>
    // var input = document.querySelector("#phone");
    // intlTelInput(input, {
    //     initialCountry: "IN",
    //     geoIpLookup: function(success, failure) {
    //         $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //             var countryCode = (resp && resp.country) ? resp.country : "us";
    //             success(countryCode);
    //         });
    //     },
    // });
</script>


<!---->
<script>
    document.getElementById('Add1').addEventListener('click', function() {
        var textarea = document.createElement('textarea');
        textarea.className = "mytextbox2";
        document.getElementById('textboxDiv1').appendChild(textarea);
        // $('#textboxDiv1').show();
    });
</script>

<script>
    document.getElementById('Add2').addEventListener('click', function() {
        var textarea = document.createElement('textarea');
        textarea.className = "mytextbox2";
        document.getElementById('textboxDiv2').appendChild(textarea);
    });
</script>

<script>
    document.getElementById('Add3').addEventListener('click', function() {
        var textarea = document.createElement('textarea');
        textarea.className = "mytextbox2";
        document.getElementById('textboxDiv3').appendChild(textarea);
    });
</script>

<script>
    document.getElementById('Add4').addEventListener('click', function() {
        var textarea = document.createElement('textarea');
        textarea.className = "mytextbox2";
        document.getElementById('textboxDiv4').appendChild(textarea);
    });
</script>
<script>
    document.getElementById('Add7').addEventListener('click', function() {
        var textarea = document.createElement('textarea');
        textarea.className = "mytextbox2";
        document.getElementById('textboxDiv7').appendChild(textarea);
    });
</script>



@endsection