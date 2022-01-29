@extends('layouts.front')

@section('content')
           <!-- Home Section -->
    <div class="HomeMain" id="1">
        <div class="HomeMain-overlay">
            <div class="HomeMain-wrap">
                <h1 class="mainHeader">
                    The New <span class="blue-mainHeader">Definition</span>
                    <br /> of Logistics
                </h1>
                <p class="subHeader">
                    ADC is your number one online <br />
                    logistics site in  transport <br />
                    items with the push of a button <br />
                    anytime anywhere
                </p>
                <form action="">
                <div class="track-button">
                        <div class="input-tracking">
                            <input type="text" name="" id="id-inputs" placeholder='Enter Tracking ID' />
                            <div class="button-signin">
                                <a href="#" class="link-nav-button">Search</a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Quality Section -->
    <div class="Qualities" id="2">
        <div class="Qualities-wrap">
            <h1 class="mainHeader">
                Get <span class="blue-mainHeader">Smooth</span>
                Deliveries <br />
                form Day One
            </h1>
            <p class="subHeader">
                we use state of the act techs to give up smooth and easy experience
            </p>
        </div>
        <div class="Qualities-boxes">
            <div class="Qualities-wrap-box">
                <div class="Qualities-box-subs">
                    <div class="Qualities-sub-box">
                        <span
                            class="iconify"
                            data-icon="icon-park-outline:speed-one"
                            id="i-eeon"
                        ></span>
                    </div>
                    <p class="title-Qualities-box">Quick Delivery</p>
                </div>
                <div class="Qualities-box-subs">
                    <div class="Qualities-sub-box">
                        <span
                            class="iconify"
                            data-icon="mdi:cash-lock"
                            id="i-eeon"
                        ></span>
                    </div>
                    <p class="title-Qualities-box">Secure Payments</p>
                </div>
                <div class="Qualities-box-subs">
                    <div class="Qualities-sub-box">
                        <span
                            class="iconify"
                            data-icon="fluent:eye-tracking-24-filled"
                            id="i-eeon"
                        ></span>
                    </div>
                    <p class="title-Qualities-box">Easy Tracking</p>
                </div>
                <div class="Qualities-box-subs">
                    <div class="Qualities-sub-box">
                        <span class="iconify" data-icon="carbon:van" id="i-eeon"></span>
                    </div>
                    <p class="title-Qualities-box">
                        Fast Transportaton
                    </p>
                </div>
            </div>
        </div>
    </div>              

    <!-- About Section -->
    <div class="AboutUS" id="3">
        <div class="AboutUS-wrap">
            <div class="aleft">
                <div class="cans">
                    <h1 class="mainHeader">
                        Why Should You <br />
                        <span class="blue-mainHeader">Pick Us</span>
                    </h1>
                    <p class="subHeader">

                        <br />
                        Technology and its application are fundamental at ADCL.
                        We understand the role of technology in providing an
                        exceptional customer experience. For this reason, our
                        processes, products and services are built around modern
                        technology to help us deliver your shipments cheaper,
                        safely and at the speed of light.
                    </p>
                </div>
            </div>
            <div class="right">

            </div>
        </div>
    </div>

    <!-- Secrvice Scetion -->
    <div class="Services" id="4">
        <div class="Services-wrap">
            <h1 class="mainHeader">
                Services That <br />
                <span class="blue-mainHeader">Suits</span> You
            </h1>
            <p class="subHeader">
                here are some of the services we offer to
                give the best comfort during your transactions with
                us

            </p>
            <div class="ServicePoints">
                <div class="Service-point-wrap">
                    <div class="absParent">
                        <div class="Service-box">
                            <div class="Service-box-wrap">
                                <div class="foricon">
                                    <span
                                        class="iconify"
                                        data-icon="fa-solid:shipping-fast"
                                        id="i-eeone"
                                    ></span>
                                </div>
                                <p class="box-service-header">
                                    
                                    Flash Shipping
                                </p>
                                <p class="extra-text">
                                    Technology and its application are
                                    fundamental at ADC. We understand the
                                    role of technology in providing an
                                    exceptional customer experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absParent">
                        <div class="Service-box">
                            <div class="Service-box-wrap">
                                <div class="foricon">
                                    <span
                                        class="iconify"
                                        data-icon="grommet-icons:shop"
                                        id="i-eeone"
                                    ></span>
                                </div>
                                <p class="box-service-header">
                                    
                                    E-commerce
                                </p>
                                <p class="extra-text">
                                    Technology and its application are
                                    fundamental at ADC. We understand the
                                    role of technology in providing an
                                    exceptional customer experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absParent">
                        <div class="Service-box">
                            <div class="Service-box-wrap">
                                <div class="foricon">
                                    <span
                                        class="iconify"
                                        data-icon="ic:outline-airplane-ticket"
                                        id="i-eeone"
                                    ></span>
                                </div>
                                <p class="box-service-header">
                                    
                                    Overseas Shipping
                                </p>
                                <p class="extra-text">
                                    Technology and its application are
                                    fundamental at ADC. We understand the
                                    role of technology in providing an
                                    exceptional customer experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absParent">
                        <div class="Service-box">
                            <div class="Service-box-wrap">
                                <div class="foricon">
                                    <span class="iconify" data-icon="ph:package-bold"
                                        id="i-eeone"></span>
                                </div>
                                <p class="box-service-header">
                                    Quick Quote
                                </p>
                                <p class="extra-text">
                                    Technology and its application are
                                    fundamental at ADC. We understand the
                                    role of technology in providing an
                                    exceptional customer experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What we ship Section -->
   
    <div class="What-we-ship" id="#">
        <div class="Qualities-wrap">
            <h1 class="mainHeader">
                Products  <span class="blue-mainHeader">shipped</span>
                 <br />
                across
            </h1>
            <p class="subHeader">
                Agro & Agro-Allied, Chemical, Oil & Gas, <br> FMCG, Manufacturing, Construction & Mining, <br> Maritime, Special Project Logistics.
            </p>
        </div>
        <div class="Qualities-boxes">
            <div class="What-we-ship-wrap-box">
                <div class="achive" id="o-o">
                    <h1>9 Billion Kg+</h1>
                    <h3>Weight of</h3>
                    <p>Goods moved</p>
                </div>
                <div class="achive" id="o-s">
                    <h1>50, 000+</h1>
                    <h3>Registered</h3>
                    <p>Truck Assets</p>
                </div>
                <div class="achive" id="o-t">
                    <h1>700+</h1>
                    <h3>Number of</h3>
                    <p>Enterprises Serviced</p>
                </div>
                <div class="achive" id="o-fo">
                    <h1>150, 000</h1>
                    <h3>Number of</h3>
                    <p>Jobs Created</p>
                </div>
                <div class="achive" id="o-fi">
                    <h1>6</h1>
                    <h3>Physical Presence</h3>
                    <p>In Countries</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Comment Scetion -->
    <div class="Testmo" id="5">
        <div class="Services-wrap">
            <h1 class="mainHeader">
                Meet Our<br />
                <span class="blue-mainHeader">Happy </span>Customers
            </h1>
            <p class="subHeader" style="padding: 0 20px;">
                you comfort and happiness why you work with us is priceless.

            </p>

            <div class="tests">
                <div class="t-wrap">
                    <div class="t-box">
                        <div class="t-wrap-box">
                            <div class="img">
                            <div class="img-tests"id="c">
                                <img src='{{ asset('images/1.jpg') }}' alt="" />
                            </div>
                            <span style='font-size:13px; color:gray; margin:0; padding:0;'><br />Owner of M C Automotive Repair, Paint & Body</span>
                                <div class="t-name">
                                    Mark Nielsen
                                </div>
                                <div class="comment">
                                    
                                I have been using ADC Delivery services since 2019. 
                                As a small business owner I think it is important to 
                                support our local businesses in Tucson. ADC delivery 
                                has always been exceptional 
                                and on time every time. Our business depends on timely 
                                deliveries to make sure our customers vehicles are 
                                completed as quoted. The staff at ADC are very courteous and knowledgeable.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-box">
                        <div class="t-wrap-box">
                            <div class="img">
                                <div class="img-tests"id="b">
                                <img src='{{ asset('images/3.jpg') }}' alt="" />
                                </div>
                                <span style='font-size:13px; color:gray; margin:0; padding:0;'><br />Distribution Supervisor</span>
                                <div class="t-name">
                                Garrett Ham    
                                </div>
                                <div class="comment">
                                Great company! Love working with them. Thanks for your business..                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-box">
                        <div class="t-wrap-box">
                            <div class="img" >
                            <div class="img-tests" id="a">
                                <img src='{{ asset('images/2.jpg') }}' alt="" />
                            </div>
                            <span style='font-size:13px; color:gray; margin:0; padding:0;'><br /></span>
                                <div class="t-name">
                                Pat Connors
                                </div>
                                <div class="comment">
                                These guys are GREAT. Fahad and her colleagues are completely professional and efficient. They make doing business with ADC a joy. After getting to know Fahad I doubt anyone will not enjoy her sense of humor!!! Great job and thanks for all that you do!!! 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-box">
                        <div class="t-wrap-box">
                            <div class="img" >
                            <div class="img-tests" id="a">
                                <img src='{{ asset('images/5.jpg') }}'alt="" />
                            </div>
                            <span style='font-size:13px; color:gray; margin:0; padding:0;'><br />MAI Tucson</span>
                                <div class="t-name">
                                Dan Swango PhD
                                </div>
                                <div class="comment">
                                My experience with the service and integrity of these folks is outstanding. They know their stuff and great service. , 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-box">
                        <div class="t-wrap-box">
                            <div class="img" >
                            <div class="img-tests" id="a">
                                <img src='{{ asset('images/6.jpg') }}' alt="" />
                            </div>
                            <span style='font-size:13px; color:gray; margin:0; padding:0;'><br />Store Owner</span>
                                <div class="t-name">
                                    Peter De La Rambelje
                                </div>
                                <div class="comment">
                                If you need something delivered in a an efficient and effective manner, ADC Delivery Services is the answer. Friendly professional staff with owners that are hands on. Small or large they have the answer. 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-box">
                        <div class="t-wrap-box">
                            <div class="img" >
                            <div class="img-tests" id="a">
                                <img src='https://images.unsplash.com/photo-1589234217365-08d3e0e5cf42?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80' alt="" />
                            </div>
                            <span style='font-size:13px; color:gray; margin:0; padding:0;'><br />Store Owner</span>
                                <div class="t-name">
                                    Peter De La Rambelje
                                </div>
                                <div class="comment">
                                If you need something delivered in a an efficient and effective manner, ADC Delivery Services is the answer. Friendly professional staff with owners that are hands on. Small or large they have the answer. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="What-who-ship" id="#" style="background: white; margin:0 auto; padding: 3rem 0;">
        <div class="Qualities-wrap"  style="margin: 0 auto; text-align:center;">
            <h1 class="mainHeader" style="color: black">
               7<span class="blue-mainHeader">00+</span>
                 <br />
            </h1>
            <p class="subHeader" style="color: black">
                Businesses use ADC to <br> move their cargo across World.
            </p>
        </div>
        <div class="Qualities-boxes">
            <div class="Who-ship-wrap-box" style="display: flex; justify-content: space-between;">

                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 15.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 16.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 17.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 18.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 19.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 20.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 23.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 24.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image 26.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/image _mouka.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/Honeywell_logo 1.svg') }}" alt="">
                </div>
                <div class="companys" style="margin: 0 1rem;">
                    <img src="{{ asset('images/company logos/DHL.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection