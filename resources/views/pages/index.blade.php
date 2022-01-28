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
                    <form action="{{ route('package.track') }}" method="POST">
                        @csrf
                        <div class="track-button">
                                <div class="input-tracking">
                                    <input type="text" name="tracking_id" id="id-inputs" placeholder='Enter Tracking ID' />
                                    <div class="button-signin">
                                        <button type="submit" class="link-nav-button">Search</button>
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
    
        <!-- Comment Scetion -->
        <div class="Testmo" id="5">
            <div class="Services-wrap">
                <h1 class="mainHeader">
                    Meet Our<br />
                    <span class="blue-mainHeader">Happy </span>Customers
                </h1>
                <p class="subHeader">
                    you comfort and happiness why you work with us is priceless.
    
                </p>
    
                <div class="tests">
                    <div class="t-wrap">
                        <div class="t-box">
                            <div class="t-wrap-box">
                                <div class="img">
                                <div class="img-tests"id="c">
                                    <img src='./Styles/images/1.jpg' alt="" />
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
                                    <img src='./Styles/images/3.jpg' alt="" />
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
                                    <img src='./Styles/images/2.jpg' alt="" />
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
                                    <img src='./Styles/images/3.jpg'alt="" />
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
                                    <img src='./Styles/images/1.jpg' alt="" />
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
@endsection